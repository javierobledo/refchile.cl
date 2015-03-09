<?php
    function PageMain(){
        global $TMPL, $LNG, $CONF, $db, $loggedIn, $settings;
        if(isset($_SESSION['username']) && isset($_SESSION['password']) || isset($_COOKIE['username']) && isset($_COOKIE['password'])){
            $verify = $loggedIn->verify();
            if($verify['username']){
                $TMPL_old = $TMPL;
                $TMPL = array();
                $TMPL['url'] = $CONF['url'];
                $feed = new feed();
                $feed->db = $db;
                $feed->url = $CONF['url'];
                $feed->user = $verify;
                $feed->id = $verify['idu'];
                $feed->username = $verify['username'];
                $feed->per_page = $settings['perpage'];
                $feed->time = $settings['time'];
                $feed->censor = $settings['censor'];
                $feed->smiles = $settings['smiles'];
                $feed->c_per_page = $settings['cperpage'];
                $feed->c_start = 0;
                $feed->l_per_post = $settings['lperpost'];
                $feed->online_time = $settings['conline'];
                $feed->friends_online = $settings['ronline'];
                $feed->subscriptionsList = $feed->getSubs($verify['idu'], 0);
                $feed->subscribersList = $feed->getSubs($verify['idu'], 1);
                $feed->updateStatus($verify['offline']);
                if($_GET['b'] == 'new'){
                    if(isset($_POST['group_name']) && isset($_POST['group_privacy']) && isset($_POST['group_description'])){
                        $group = new group($db,$_POST['group_name'],$_POST['group_privacy'],$_POST['group_description']);
                        $group->storeInDB();
                        header("Location: ".$CONF['url']."/index.php?a=group&g=".$group->name);
                    }
                    $skin = new skin('group/new');
                    $page = '';
                    $page .= $skin->make();
                    $TMPL = $TMPL_old; unset($TMPL_old);
                    $TMPL['group'] = $page;
                    $skin = new skin('feed/sidebar'); $sidebar = '';
                    
                    $TMPL['editprofile'] = $feed->fetchProfileWidget($verify['username'], realName($verify['username'], $verify['first_name'], $verify['last_name']), $verify['image']);
                    $TMPL['sidebar'] = $feed->sidebarTypes($_GET['filter'], $feed->subscriptions);
                    $TMPL['dates'] = $feed->sidebarDates($_GET['filter'], $feed->subscriptions);
                    $TMPL['trending'] = $feed->sidebarTrending($_GET['tag'], 5);
                    $TMPL['users'] = $feed->onlineUsers();
                    $TMPL['subscriptions'] = $feed->sidebarSubs(0, 0);
                    $TMPL['subscribers'] = $feed->sidebarSubs(1, 0);
                    $TMPL['friendsactivity'] = $feed->sidebarFriendsActivity(20, 1);
                    if(count($feed->subscriptionsList[0]) < 6) {
                        $TMPL['suggestions'] = $feed->sidebarSuggestions();
                    }
                    $TMPL['ad'] = generateAd($settings['ad3']);
                    
                    $sidebar = $skin->make();
                    $TMPL['group_menu'] = $sidebar;
                }else{
                    if(isset($_GET['g'])){
                        $group_name = $_GET['g'];
                        $group = new group($db);
                        $group->loadFromDB($group_name);
                        $group->getGroupMessages();
                        $group->feed = $feed;
                        $messages = $group->getViewMessages();
                        $skin = new skin('group/home');
                        $page = '';
                        $page .= $skin->make();
                        $TMPL = $TMPL_old;
                        unset($TMPL_old);
                        $TMPL['group'] = $page.$messages;
                        $skin = new skin('feed/sidebar'); $sidebar = '';
                        
                        $TMPL['editprofile'] = $feed->fetchProfileWidget($verify['username'], realName($verify['username'], $verify['first_name'], $verify['last_name']), $verify['image']);
                        $TMPL['sidebar'] = $feed->sidebarTypes($_GET['filter'], $feed->subscriptions);
                        $TMPL['dates'] = $feed->sidebarDates($_GET['filter'], $feed->subscriptions);
                        $TMPL['trending'] = $feed->sidebarTrending($_GET['tag'], 5);
                        $TMPL['users'] = $feed->onlineUsers();
                        $TMPL['subscriptions'] = $feed->sidebarSubs(0, 0);
                        $TMPL['subscribers'] = $feed->sidebarSubs(1, 0);
                        $TMPL['friendsactivity'] = $feed->sidebarFriendsActivity(20, 1);
                        if(count($feed->subscriptionsList[0]) < 6) {
                            $TMPL['suggestions'] = $feed->sidebarSuggestions();
                        }
                        $TMPL['ad'] = generateAd($settings['ad3']);
                        
                        $sidebar = $skin->make();
                        $TMPL['group_menu'] = $sidebar;
                    }else{
                        // If the session or cookies are not set, redirect to home-page
                        header("Location: ".$CONF['url']."/index.php?a=welcome");
                    }

                }
            }
        }else{
            // If the session or cookies are not set, redirect to home-page
            header("Location: ".$CONF['url']."/index.php?a=welcome");
        }
        
        $skin = new skin('group/content');
        return $skin->make();
    }
    
    class group{
        public $db;
        public $id;
        public $name;
        public $privacy;
        public $description;
        public $image;
        public $cover;
        public $messages;
        public $per_page=10;
        public $feed;
        
        function __construct($db,$name,$privacy,$description){
            $this->db = $db;
            $this->name = $name;
            $this->privacy = $privacy;
            $this->description = $description;
            $this->image = 'default.png';
            $this->cover = 'default.png';
        }
        
        function storeInDB(){
            $query = $this->db->query(sprintf("INSERT INTO `groups` (`name`, `privacy`, `description`, `image`,`cover`) VALUES ('%s', '%s', '%s', '%s', '%s')",$this->name,$this->privacy,$this->description,$this->image,$this->cover));
            
        }
        
        function loadFromDB($group_name){
            $query = $this->db->query(sprintf("SELECT * FROM `groups` WHERE `name` = '%s'",$group_name));
            while ($obj = $query->fetch_object()) {
                $this->id = $obj->id;
                $this->name = $obj->name;
                $this->description = $obj->description;
                $this->privacy = $obj->privacy;
                $this->image = $obj->image;
                $this->cover = $obj->cover;
            }
            $query->close();
        }
        
        function getGroupMessages(){
            $query = $this->db->query(sprintf("SELECT `messages`.*,`users`.* FROM `messages`,`group_messages`,`users` WHERE `messages`.id=`group_messages`.mid AND `group_messages`.gid= %s AND messages.uid = users.idu;",$this->id));
            while($row = $query->fetch_assoc()) {
                $row['event'] = 'message';
                $rows[] = $row;
            }
            $query->close();
            $this->messages = $rows;
        }
        
        function getViewMessages($type, $typeVal) {
            $rows = $this->messages;
            // QUERY: Holds the query string
            // TYPE: [loadTimeline, loadFeed, loadProfile, loadHashtags]
            // TYPEVAL: Values for the JS functions
            
            // If the Feed is empty, display a welcome message
            if(empty($rows) && $type == 'loadTimeline') {
                return $this->feed->showError('welcome_timeline');
            } elseif(empty($rows) && $type == 'loadHashtags') {
                return $this->feed->showError('no_results');
            }
            
            // Define the $loadmore variable
            $loadmore = '';
            
            // If there are more results available than the limit, then show the Load More Comments
           // if(array_key_exists($this->per_page, $rows)) {
             //   $loadmore = 1;
                
                // Unset the last array element because it's not needed, it's used only to predict if the Load More Messages should be displayed
               // array_pop($rows);
           // }
            
            // Define the $messages variable
            $messages = '';
            
            // If it's set profile, then set $profile
            if($this->feed->profile) {
                $profile = ', \''.$this->feed->profile.'\'';
            }
            $messages .= '<div class="last-message" name="name-'.$rows[0]['idu'].'" id="last-'.$rows[0]['id'].'" title="type-'.str_replace('\'', '', $typeVal).'" alt="profile-'.str_replace(array(', \'', '\''), '', $profile).'"></div>';
            // Start outputting the content
            foreach($rows as $row) {
                $time = $row['time']; $b = '';
                if($this->time == '0') {
                    $time = date("c", strtotime($row['time']));
                } elseif($this->time == '2') {
                    $time = $this->ago(strtotime($row['time']));
                } elseif($this->time == '3') {
                    $date = strtotime($row['time']);
                    $time = date('Y-m-d', $date);
                    $b = '-standard';
                }
                
                // Define the style variable (reset the last value)
                $style = '';
                if($this->username == $row['username']) { // If it's current username is the same with the current author
                    if($row['public'] == 1) {
                        $privacy = '<a onclick="privacy('.$row['id'].', 0)" title="'.$LNG['this_post_public'].'"><div class="public_btn"></div></a>';
                        $delete = '<a onclick="delete_the('.$row['id'].', 1)" title="'.$LNG['delete_this_message'].'"><div class="delete_btn"></div></a>';
                        // $style = '';
                    } else {
                        $privacy = '<a onclick="privacy('.$row['id'].', 1)" title="'.$LNG['this_post_private'].'"><div class="private_btn"></div></a>';
                        $delete = '<a onclick="delete_the('.$row['id'].', 1)" title="'.$LNG['delete_this_message'].'"><div class="delete_btn"></div></a>';
                        // Hide the comment box
                        $style = ' style="display: none"';
                    }
                } elseif(empty($this->feed->username)) { // If the user is not registered
                    // $privacy = '';
                    // $delete = '';
                    $style = ' style="display: none"'; // Hide the comments post box for visitors
                    if($row['public'] == 0) {
                        $hide = 1;
                    }
                } else { // If the current username is not the same as the author
                    if($row['public'] == 1) {
                        $privacy = '';
                        $delete = '<a onclick="report_the('.$row['id'].', 1)" title="'.$LNG['report_this_message'].'"><div class="report_btn"></div></a>';
                        $style = '';
                    } else {
                        $privacy = '';
                        $delete = '<a onclick="report_the('.$row['id'].', 1)" title="'.$LNG['report_this_message'].'"><div class="report_btn"></div></a>';
                        // Hide the comment box
                        $style = ' style="display: none"';
                        $hide = 1;
                    }
                }
                
                if($hide && !$this->feed->is_admin) {
                    $error = $this->feed->showError('message_hidden');
                    $messages .= $error[0];
                } else {
                    $messages .= '
                    <div class="message-container" id="message'.$row['id'].'">
                    <div class="message-content">
                    <div class="message-inner">
                    <div class="message-avatar" id="avatar'.$row['id'].'">
                    <a href="'.$this->url.'/index.php?a=profile&u='.$row['username'].'">
                    <img onmouseover="profileCard('.$row['idu'].', '.$row['id'].', 0, 0);" onmouseout="profileCard(0, 0, 0, 1);" onclick="profileCard(0, 0, 1, 1);" src="'.$this->url.'/thumb.php?src='.$row['image'].'&t=a&w=50&h=50" />
                    </a>
                    </div>
                    <div class="message-top">
                    '.$delete.'
                    <span id="privacy'.$row['id'].'">'.$privacy.'</span>
                    <div class="message-author" id="author'.$row['id'].'">
                    <a href="'.$this->url.'/index.php?a=profile&u='.$row['username'].'">'.realName($row['username'], $row['first_name'], $row['last_name']).'</a>
                    </div>
                    <div class="message-time">
                    <span id="time'.$row['id'].'"><a href="'.$this->url.'/index.php?a=post&m='.$row['id'].'" target="_blank">
                    <div class="timeago'.$b.'" title="'.$time.'">
                    '.$time.'
                    </div>
                    </span>
                    <div class="comments_preloader" id="del_message_'.$row['id'].'"></div>
                    </a>
                    </div>
                    </div>
                    <div class="message-message">
                    '.nl2br($this->feed->parseMessage($row['message'])).'
                    </div>
                    </div>
                    <div class="message-divider"></div>
                    '.$this->feed->getType($row['type'], $row['value'], $row['id']).'
                    <div class="message-replies">
                    <div class="message-actions"><div class="message-actions-content" id="message-action'.$row['id'].'">'.$this->feed->getActions($row['id'], $row['likes'], null).'</div></div>
                    <div class="message-replies-content" id="comments-list'.$row['id'].'">
                    '.$this->feed->getComments($row['id'], null, $this->feed->c_start).'
                    </div>
                    </div>
                    <div class="message-comment-box-container" id="comment_box_'.$row['id'].'"'.$style.'>
                    <div class="message-reply-avatar">
                    '.((!empty($this->feed->user)) ? '<a href="'.$this->feed->url.'/index.php?a=profile&u='.$this->feed->user['username'].'"><img src="'.$this->feed->url.'/thumb.php?src='.$this->feed->user['image'].'&t=a&w=50&h=50" /></a>' : '').'
                    </div>
                    <div class="message-comment-box-form">
                    <textarea id="comment-form'.$row['id'].'" onclick="showButton('.$row['id'].')" placeholder="'.$LNG['leave_comment'].'" class="comment-reply-textarea"></textarea>
                    </div>
                    <div class="comment-btn" id="comment_btn_'.$row['id'].'">
                    <a onclick="postComment('.$row['id'].')">'.$LNG['post'].'</a>
                    </div>
                    <div class="delete_preloader" id="post_comment_'.$row['id'].'"></div>
                    </div>
                    </div>	
                    </div>';
                    $start = $row['id'];
                }
            }
            
            // If the $loadmore button is set, then show the Load More Messages button
            if($loadmore) {
                $messages .= '
                <div class="message-container" id="more_messages">
                <div class="load_more"><a onclick="'.$type.'('.$start.', '.$typeVal.''.$profile.')">'.$LNG['view_more_messages'].'</a></div>
                </div>';
            }
            return $messages;
        }
        
        function getGroupInformation(){
            
            
        }
        
        function getColumns($table) {
            
            $query = $this->db->query("SHOW columns FROM `$table` WHERE Field NOT IN ('idu', 'username', 'date', 'salted')");
            
            // Define an array to store the results
            $columns = array();
            
            // Fetch the results set
            while ($row = $query->fetch_array()) {
                // Store the result into array
                $columns[] = $row[0];
            }
            
            // Return the array;
            return array_flip($columns);
        }
    }
?>
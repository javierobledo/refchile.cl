<?php
    function PageMain(){
        global $TMPL, $LNG, $CONF, $db, $loggedIn, $settings;
        if(isset($_SESSION['username']) && isset($_SESSION['password']) || isset($_COOKIE['username']) && isset($_COOKIE['password'])){
            $verify = $loggedIn->verify();
            if($verify['username']){
                $TMPL_old = $TMPL;
                $TMPL = array();
                $TMPL['url'] = $CONF['url'];
                if($_GET['b'] == 'new'){
                    if(isset($_POST['group_name']) && isset($_POST['group_privacy']) && isset($_POST['group_description'])){
                        $group = new group($db,$_POST['group_name'],$_POST['group_privacy'],$_POST['group_description']);
                        $group->storeInDB();
                    }else{
                        echo 'NOOOO';
                    }
                    $skin = new skin('group/new');
                    $page = '';
                    $page .= $skin->make();
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
                        print_r($group);
                        $skin = new skin('group/home');
                        $page = '';
                        $page .= $skin->make();
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
            $query = $this->db->query(sprintf("SELECT `messages`.* FROM `messages`,`group_messages` WHERE `messages`.id=`group_messages`.mid AND `group_messages`.gid= %s",$this->id));
            while ($obj = $query->fetch_object()) {
                $this->id = $obj->id;
                $this->name = $obj->name;
                $this->description = $obj->description;
                $this->privacy = $obj->privacy;
                $this->image = $obj->image;
                $this->cover = $obj->cover;
            }
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
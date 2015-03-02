<?php
error_reporting(0);
#error_reporting(E_ALL ^ E_NOTICE);

$CONF = $TMPL = array();

// The MySQL credentials
//$CONF['host'] = 'mysql.refchile.cl';
$CONF['host'] = 'localhost';
$CONF['user'] = 'refchile';
$CONF['pass'] = 'Ref2015BASE';
$CONF['name'] = 'phpdolphin';

// The Installation URL
//$CONF['url'] = 'http://www.refchile.cl';
$CONF['url'] = 'http://localhost/~jrobledo/refchile.cl';

// The Notifications e-mail
$CONF['email'] = 'notifications@refchile.cl';

// The themes directory
$CONF['theme_path'] = 'themes';

$action = array('admin'			=> 'admin',
				'feed'			=> 'feed',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'post'			=> 'post',
				'recover'		=> 'recover',
				'timeline'		=> 'timeline',
				'profile'		=> 'profile',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'page'			=> 'page',
                'group'         => 'group'
				);
?>
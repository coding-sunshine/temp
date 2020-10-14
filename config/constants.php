<?php

$host = gethostname();
$ip = gethostbyname($host);

// echo $ip;
define('DEVPC', true);
if(isset($_SERVER['SERVER_ADDR'])){
    if($_SERVER['SERVER_ADDR'] == '188.166.207.67'){
        define('DEVPC',false);
    }
}else{
    if($ip == '188.166.207.67'){
      define('DEVPC', false);  
    }
}




define('PUBLIC_FOLDER', '/');
define('AVATAR_PATH', 'uploads/avatar/');
define('LOGO_PATH' , 'uploads/logo/');
define('EVENT_PATH' , 'uploads/event/');
define('SLIDE_PATH' , 'uploads/slide/');
define('AFFILIATE_IMAGE_PATH' , 'uploads/affiliate_slide/');
define('HOT_IMAGE_PATH' , 'uploads/hot_images/');
define('LOGO_MARKETING_KEY' , 'piabsalt98374');
define('LOGO_SIGNATURE_KEY' , 'piabsaltSignature');
define('LOGO_HOT_KEY' , 'piabSaltHotLogo98374');
define('LOGO_WP_PRIMARY_KEY' , 'piabsalt33444');
define('LOGO_WP_WHITE_KEY' , 'piabsalt746489');
define('LOGO_GENERIC_KEY' , '093820983');
define('GMAP_API_KEY' , 'AIzaSyCIYMYl_m4iIa5y7k1jh-8dAPBk1hcW2EQ');
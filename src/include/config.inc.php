<?php 
@session_start();
global $arrConfig;

if($_SERVER["HTTP_HOST"] == 'web.colgaia.local' || $_SERVER["HTTP_HOST"] == 'localhost' ){
    error_reporting(E_ALL);
} else {
    error_reporting(0);
};  

$arrConfig['servername'] = 'sql.freedb.tech';
$arrConfig['username'] = 'freedb_natureal';
$arrConfig['password'] = 'TtQfPe6PmHUBH!9';
$arrConfig['dbname'] = 'freedb_natureal';

$arrConfig['isLoginKey'] = 'aajbajkh%/rcKI!ª~uaca76';


$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/natureal';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal'; 
$arrConfig['url_components'] = $arrConfig['url_site'] . '/src/components/';
$arrConfig['dir_components'] = $arrConfig['dir_site'] . '/src/components/';
$arrConfig['dir_pfp'] = $arrConfig['dir_site'] . '/public/users_pfp/';




$arrConfig['email_token'] = 'aajbajkh%/rcKI!ª~uaca76';
$arrConfig['key_jwt'] = 'r/FqiRRE';
$arrConfig['encode_jwt'] = 'IJt3d80e';


$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];


$arrConfig['fotos'] = '/var/www/natureal/public/users_pfp/';

include_once 'db.inc.php';







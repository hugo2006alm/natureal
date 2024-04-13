<?php 
@session_start();
global $arrConfig;


$arrConfig['servername'] = 'sql.freedb.tech';
$arrConfig['username'] = 'freedb_natureal';
$arrConfig['password'] = 'TtQfPe6PmHUBH!9';
$arrConfig['dbname'] = 'freedb_natureal';

$arrConfig['isLoginKey'] = 'aajbajkh%/rcKI!ª~uaca76';

$arrConfig['url_site'] = 'http://localhost/natureal';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal'; 

$arrConfig['dir_include'] = $arrConfig['dir_site'] . '/src/include/';

$arrConfig['email_token'] = 'aajbajkh%/rcKI!ª~uaca76';
$arrConfig['key_jwt'] = 'r/FqiRRE';
$arrConfig['encode_jwt'] = 'IJt3d80e';


$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];

include_once 'db.inc.php';
include_once 'mail.inc.php';







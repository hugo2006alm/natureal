<?php 
@session_start();
global $arrConfig;


$arrConfig['servername'] = 'sql.freedb.tech';
$arrConfig['username'] = 'freedb_natureal';
$arrConfig['password'] = 'TtQfPe6PmHUBH!9';
$arrConfig['dbname'] = 'freedb_natureal';

$arrConfig['isLoginKey'] = 'aajbajkh%/rcKI!ª~uaca76';

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/natureal';
$arrConfig['dir_site'] = 'C:/wamp64/www/natureal/src'; 
$arrConfig['url_paginas'] = $arrConfig['url_site'] . '/pages/';
$arrConfig['url_modules'] = $arrConfig['url_site'] . '/modules/';
$arrConfig['dir_modules'] = $arrConfig['dir_site'] . '/modules/';
$arrConfig['url_admin'] = $arrConfig['url_site'] . '/admin/';
$arrConfig['dir_admin'] = $arrConfig['dir_site'] . '/admin/';

$arrConfig['dir_include'] = $arrConfig['dir_site'] . '/src/include/';
=========

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/natureal';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal'; 
$arrConfig['url_components'] = $arrConfig['url_site'] . '/src/components/';
$arrConfig['dir_components'] = $arrConfig['dir_site'] . '/src/components/';
$arrConfig['dir_pfp'] = $arrConfig['dir_site'] . '/public/users_pfp/';
$arrConfig['url_auth'] = $arrConfig['url_site'] . '/src/auth/';


>>>>>>>>> Temporary merge branch 2

$arrConfig['email_token'] = 'aajbajkh%/rcKI!ª~uaca76';
$arrConfig['key_jwt'] = 'r/FqiRRE';
$arrConfig['encode_jwt'] = 'IJt3d80e';


$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];

include_once 'db.inc.php';

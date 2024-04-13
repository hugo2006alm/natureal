<?php 
@session_start();
global $arrConfig;


$arrConfig['servername'] = 'sql.freedb.tech';
$arrConfig['username'] = 'freedb_natureal';
$arrConfig['password'] = 'TtQfPe6PmHUBH!9';
$arrConfig['dbname'] = 'freedb_natureal';

$arrConfig['isLoginKey'] = 'aajbajkh%/rcKI!ª~uaca76';

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/natureal/src';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal/src'; 
$arrConfig['url_paginas'] = $arrConfig['url_site'] . '/pages/';
$arrConfig['url_modules'] = $arrConfig['url_site'] . '/modules/';
$arrConfig['dir_modules'] = $arrConfig['dir_site'] . '/modules/';
$arrConfig['url_admin'] = $arrConfig['url_site'] . '/admin/';
$arrConfig['dir_admin'] = $arrConfig['dir_site'] . '/admin/';

$arrConfig['dir_include'] = $arrConfig['dir_site'] . '/include/';

$arrConfig['url_components'] = $arrConfig['url_site'] . '/components/';
$arrConfig['dir_components'] = $arrConfig['dir_site'] . '/components/';

$arrConfig['email_token'] = 'aajbajkh%/rcKI!ª~uaca76';
$arrConfig['key_jwt'] = 'r/FqiRRE';
$arrConfig['encode_jwt'] = 'IJt3d80e';


$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];


$arrConfig['fotos'] = '/var/www/natureal/public/users_pfp/';

include_once 'db.inc.php';
include_once 'email.inc.php';

<?php 
@session_start();
global $arrConfig;



$arrConfig['servername'] = 'sql.freedb.tech';
$arrConfig['username'] = 'freedb_natureal';
$arrConfig['password'] = 'TtQfPe6PmHUBH!9';
$arrConfig['dbname'] = 'freedb_natureal';

$arrConfig['isLoginKey'] = 'aajbajkh%/rcKI!ª~uaca76';

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/educse';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal'; 
$arrConfig['url_paginas'] = $arrConfig['url_site'] . '/pages/';
$arrConfig['url_modules'] = $arrConfig['url_site'] . '/modules/';
$arrConfig['dir_modules'] = $arrConfig['dir_site'] . '/modules/';
$arrConfig['url_admin'] = $arrConfig['url_site'] . '/admin/';
$arrConfig['dir_admin'] = $arrConfig['dir_site'] . '/admin/';

$arrConfig['dir_include'] = $arrConfig['dir_site'] . '/src/include/';

$arrConfig['email_token'] = 'aajbajkh%/rcKI!ª~uaca76';
$arrConfig['key_jwt'] = 'r/FqiRRE';
$arrConfig['encode_jwt'] = 'IJt3d80e';


//include_once $arrConfig['dir_include'] . 'functions.inc.php';
include_once $arrConfig['dir_include'] . 'db.inc.php';
//include_once $arrConfig['dir_site'] . '/metodos/mail.met.php';
//include_once $arrConfig['dir_admin'] . 'dashboards/layout.dash.php';


//logs();

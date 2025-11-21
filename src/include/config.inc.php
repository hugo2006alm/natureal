<?php 
@session_start();
global $arrConfig;


$arrConfig['servername'] = getenv('DB_HOST') ?: 'localhost';
$arrConfig['username']  = getenv('DB_USER') ?: '';
$arrConfig['password']  = getenv('DB_PASS') ?: '';
$arrConfig['dbname']    = getenv('DB_NAME') ?: '';

$arrConfig['isLoginKey'] = getenv('APP_LOGIN_KEY') ?: 'changeme-login-key';

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/natureal/src';
$arrConfig['url_auth'] = $arrConfig['url_site'] . '/auth/';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal/src'; 
$arrConfig['url_paginas'] = $arrConfig['url_site'] . '/pages/';
$arrConfig['url_modules'] = $arrConfig['url_site'] . '/modules/';
$arrConfig['dir_modules'] = $arrConfig['dir_site'] . '/modules/';
$arrConfig['url_admin'] = $arrConfig['url_site'] . '/admin/';
$arrConfig['dir_admin'] = $arrConfig['dir_site'] . '/admin/';

$arrConfig['dir_include'] = $arrConfig['dir_site'] . '/include/';

$arrConfig['url_components'] = $arrConfig['url_site'] . '/components/';
$arrConfig['dir_components'] = $arrConfig['dir_site'] . '/components/';

$arrConfig['email_token'] = getenv('APP_EMAIL_TOKEN') ?: 'changeme-email-token';
$arrConfig['key_jwt'] = getenv('APP_JWT_KEY') ?: 'changeme-jwt-key';
$arrConfig['encode_jwt'] = getenv('APP_JWT_ENCODE') ?: 'changeme-jwt-encode';
$arrConfig['email_user'] = getenv('SMTP_USER') ?: '';
$arrConfig['email_pass'] = getenv('SMTP_PASS') ?: '';


$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];


$arrConfig['fotos'] = '/Applications/XAMPP/xamppfiles/htdocs/natureal/public/users_pfp/';

$_SESSION['confidence']=0;

include_once 'db.inc.php';
include_once 'email.inc.php';

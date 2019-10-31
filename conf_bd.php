<?
$ipt = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : getenv('REMOTE_ADDR')); 

if (($_SESSION['adm_en']=="1")&&($_SESSION['adm']>0)){$enadm=1;}

$admuser=strtolower("admin");
$admpas=strtolower("331210");

$hostname='http://remzona23.ru/';
$hostname2='http://www.remzona23.ru';
$hostname3='http://127.0.0.1/remzona23.ru';


?>
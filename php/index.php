<?php
$host = 'db';
$user = 'root';
$password = 'root';
$db = 'test';

$db = new mysqli($host,$user,$password,$db);

//if(!$db){
//    echo $db->errno;
//    return;
//}
//var_dump($db);
phpinfo();
?>
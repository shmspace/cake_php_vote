<?php

$config = array();
$config['host'] = 'localhost';
$config['port'] = '3306';
$config['login'] = 'root';
$config['password'] = '123456';

$connection = mysqli_connect($config['host'] . ':' . $config['port'], $config['login'], $config['password']);
$rs = mysqli_select_db($connection, "cakephp_votes");
print $rs;

?>

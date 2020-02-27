<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "restaurant";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}
catch (PDOException $e) {
    die("Can't connect: ".$e->getMessage());
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE,  PDO:: FETCH_ASSOC);

$dish_names  =  array();
$res  =  $db->query ('SELECT  id, name  FROM  restaurant');
foreach($res->fetchAll() as  $row)  {
    $dish_names [$row['id']] =  $row['name'];
	}
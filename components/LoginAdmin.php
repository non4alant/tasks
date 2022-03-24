<?php
require_once dirname(__DIR__) . '/components/Db.php';
$db = Db::getConnection();
$login =  trim($_POST['login']) ;
$password = trim($_POST['password']);
$result= "SELECT login, password  FROM `user` WHERE `access` = 1";
$result = $db->query($result);
$admin = $result ->fetch();


if($login == $admin['login'] && $password == $admin['password']){
    header("Location: http://crmformybusiness/admin/");
}else{
    echo 'Доступ запрещен';
}


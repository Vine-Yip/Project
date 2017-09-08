<?php
//config.php
//测试用主机名、账号、密码、数据库，全部用变量表示
$my_host="localhost";
$my_username="keyanchu";
$my_password="ky650223";
$my_database = "test";

$link = mysqli_connect("$my_host","$my_username","$my_password","$my_database");

if(!$link)
{
    die("连接错误:".mysqli_connect_error());
}
?>
<?php 
    header("Content-Type: text/html; charset=utf8");

    echo $_POST['submit'];

    if(!isset($_POST['submit'])){
        exit("error");
    }//判断是否有submit操作

    $password=$_POST['AdminPass'];//post获取表单里的password

    echo $password;

?>
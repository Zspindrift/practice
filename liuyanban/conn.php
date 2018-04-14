<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/11
 * Time: 18:22
 */
    //打开数据库连接
    $link = @mysqli_connect('localhost','root','') or die('打开连接失败');
    //选择数据库
    @mysqli_select_db($link,'newblog') or die('选择数据库失败');
    //设置传输编码
    mysqli_set_charset($link,'UTF8');
?>

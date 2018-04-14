<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/11
 * Time: 18:53
 */
    //连接数据库
    include "conn.php";
    if(isset($_POST['sub'])){
        $title = $_POST['title'];
        $con = $_POST['con'];

        //操作数据库插入数据
        //拼字符串
        $sql = "insert into blog(bid,title,content,time) values(null,'$title','$con',now())";
        //发送字符串
        $query = mysqli_query($link,$sql);
        if($query){
            //echo "插入成功";
            header("location:index.php");
        }else{
            echo "插入失败";
        }
    }
?>
<!--
增 insert into 表名(列名，列名......) values (值，值......)  列名-值一一对应
删
改
查 select * form 表名
   select * form 表名 where 限定条件
   select title,con form 表名 where 限定条件
-->

<meta charset="utf-8">
<form action="add.php" method="post">
    标题：<input type="text" name="title"><br/>
    内容：<textarea name="con" cols="30" rows="10"></textarea><br/>
    <input type="submit" name="sub" value="发表">
</form>

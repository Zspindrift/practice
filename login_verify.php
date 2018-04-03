<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/2
 * Time: 20:14
 */
    if(isset($_POST['sub'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $arr = ['&','%','='];
        $flag = true;
        for($i=0; $i<strlen($username); $i++){
            for($j=0; $j<count($arr); $j++){
                if($username[$i] == $arr[$j]){
                    $flag = false;
                }
            }
        }
        if($flag == false){
            echo "输入非法";
        }else{
            if($username == 'admin' && $pass =='123456') {
                echo "登录成功";
            }else{
                echo "登录失败";
            }
        }
    }
?>

<meta charset="UTF-8">
<form action="login_verify.php" method="post">
    用户名：<input type="text" name="username"><br/>
    密码：<input type="password" name="pass"><br/>
    <input type="submit" value="提交" name="sub">
</form>

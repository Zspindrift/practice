<?php
    if(isset($_POST['sub'])){
        $num = $_POST['num'];
        switch($num){
            case 10:
                echo 123;
                break;
            case 20:
                echo 456;
                break;
            default:
                echo "default";
                break;
        }
    }

?>

<meta charset="UTF-8">
<form action="switch_case.php" method="post">
    数据：<input type="text" name="num"><br/>
    <input type="submit" value="提交" name="sub">
</form>
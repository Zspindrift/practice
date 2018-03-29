<?php
    if(isset($_POST['sub'])){
        $arr = $_POST['address'];
        $str = substr($arr,10);
        $newstr = base64_decode($str);
        echo $newstr;


        /*$dizhi = base64_decode($arr);
        $newdizhi = "thunder://".$dizhi;
        echo $newdizhi;*/
    }
?>

<meta charset="UTF-8">
<form action="base64.php" method="post">
    地址：<input type="text" name="address"><br/>
    <input type="submit" value="提交" name="sub">
</form>

<?php
    if(isset($_POST['sub'])){
        $year = $_POST['year'];
        if(is_numeric($year)){ //判断是否为数字is_numeric()
            if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)){
                echo $year."是闰年";
            }else{
                echo $year."不是闰年";
            }
        }else{
            echo "请输入数字";
        }
    }
    echo "<br/>";

//    $str = "feifei";
//    for($i = 0;$i < strlen($str);$i++){
//        echo $str[$i]."<br/>";
//    }

    $str = array("feifei","loves","yueyue");
    for($i=0; $i<count($str); $i++){
        echo "\$str[{$i}]" . "=" . $str[$i] . "<br/>";
    }


?>

<meta charset="UTF-8">
<form action="runnian.php" method="post">
    year: <input type="text" name="year" value="<?php echo $_POST['year']?$year:"";?>">
    <input type="submit" name="sub" value="提交">
</form>

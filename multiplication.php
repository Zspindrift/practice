<?php
    echo "<caption>九九乘法表</caption>";
    echo "<br/>";
    for($i=1; $i<=9; $i++){
        for($j=1; $j<=$i; $j++){
            echo $i . "*" . $j . "=" . $i*$j . "&nbsp;";
        }
        echo "<br/>";
    }

    //二
    echo "<table width='800' border='1' align='center'>";
    echo "<caption>九九乘法表</caption>";
    echo "<br/>";
    for($i=1; $i<=9; $i++){
        echo "<tr>";
        for($j=1; $j<=$i; $j++){
            echo "<td>";
            echo $i . "*" . $j . "=" . $i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //三
    echo "<table width='800' align='center' border='1'>";
    echo "<caption>九九乘法表</caption>";
    for($i=9; $i>=1; $i--){
        echo "<tr>";
        for($j=1; $j<=$i; $j++){
            echo "<td>";
            echo $i."*".$j."=".$i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //四
    echo "<table width='800' align='center' border='1'>";
    echo "<caption>九九乘法表</caption>";
    for($i=1; $i<=9; $i++){
        echo "<tr>";
        //先打空格
        for($j=1; $j<=9-$i; $j++){
            echo "<td>"."&nbsp;"."</td>";
        }
        //再打算式
        for($k=1; $k<=$i; $k++){
            echo "<td>";
            echo $i."*".$k."=".$i*$k;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //五
    echo "<table width='800' align='center' border='1'>";
    echo "<caption>九九乘法表</caption>";
    for($i=9; $i>=1; $i--){
        echo "<tr>";
        //先打空格
        for($j=1; $j<=9-$i; $j++){
            echo "<td>"."&nbsp;"."</td>";
        }
        //再打算式
        for($k=1; $k<=$i; $k++){
            echo "<td>".$i."*".$k."=".$i*$k."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>


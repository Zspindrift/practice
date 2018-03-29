<?php
    echo "<table width='800' border='1' align='center'>";
    echo "<caption>隔行换色</caption>";
    for($i=0; $i<100; $i++){
        if($i % 2 == 0){
            $color = 'red';
        }else{
            $color = 'yellow';
        }
        echo "<tr bgColor='".$color."' onmouseover=lrow(this) onmouseout=drow(this)>";
            for($j=0; $j<10; $j++){
                echo "<td>".$i."</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
?>

<script>
    var ys = "";
    function lrow(obj){
        ys = obj.bgColor;
        obj.bgColor = "green";
    }

    function drow(obj){
        obj.bgColor = ys;
    }

</script>

<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/11
 * Time: 19:35
 */
    include "conn.php";
    //$sql = "select * from blog order by bid asc"; 正序排列 默认
    $sql = "select * from blog order by bid desc"; //逆序排列
    $query = mysqli_query($link,$sql);
    while($rs = mysqli_fetch_array($query)){
    //for($i=0; $i<5; $i++){
?>

<h3>标题：<?php echo $rs['title'];?> | 删除 | 修改</h3>
<li>时间：<?php echo $rs['time'];?></li>
<p><?php echo $rs['content'];?></p>
<hr/>

<?php
    }
?>
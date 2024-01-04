<?php

include 'connect.php';
if(isset($_GET['deletecol'])){
    $COL_NO_2=$_GET['deletecol'];


    $sql="DELETE FROM `v_sem` WHERE `COL 2`='$COL_NO_2'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:edit.php');
    }
    else{
        die (mysqli_error($con));
    }
}
?>
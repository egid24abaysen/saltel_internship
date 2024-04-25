<?php
include 'conn.php';
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE from high_school where id=$id");
if($delete){
    header("location:allhischools.php");
    echo "removed";
}
?>
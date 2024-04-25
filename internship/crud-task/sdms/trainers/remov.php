<?php
include 'conn.php';
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE from trainers where trainer_id=$id");
if($delete){
    header("location:alltrainers.php");
    echo "removed";
}
?>
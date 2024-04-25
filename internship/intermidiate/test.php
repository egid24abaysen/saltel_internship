<?php 
include "conn.php";
$dates = "2023-10-10";
$insert=mysqli_query($conn,"insert into courses(id,date) values(2,'$dates')");
if($insert){
    echo "inserted";
}
?>
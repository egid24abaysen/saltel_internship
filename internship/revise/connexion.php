<?php
$host='localhost';
$name='keke';
$pass='';
$dbname='revise';

$conn = mysqli_connect($host,$name,$pass,$dbname);
if($conn){
echo 'connected <br>';
}

?>
<?php
$host='localhost';
$name='Aba-Art';
$pass='123';
$dbname='crusade';

$conn = mysqli_connect($host,$name,$pass,$dbname);
if(!$conn){
echo 'not connected <br>';
}

?>
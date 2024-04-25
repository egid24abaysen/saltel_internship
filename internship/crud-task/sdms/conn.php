<?php
$host='localhost';
$name='root';
$pass='';
$dbname='school_system';

$conn = mysqli_connect($host,$name,$pass,$dbname);
if(!$conn){
echo 'not connected <br>';
}

?>
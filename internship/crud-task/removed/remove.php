<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLG - REMOVED</title>
</head>
<body>
<?php
include 'connexion.php';
$idxup=$_GET['id'];
$remove=mysqli_query($conn,"DELETE from crud_tube where id=$idxup");
if($remove){
   echo"<h2>removed</h2>";
}
?>
</body>
<style>
    body{
        background: #000;
        background: url(../Premium\ Vector\ _\ Abstract\ halftone\ background.jpeg);
    }
    h2{
        position: absolute;
        color: white;
        top: 50%;
        left: 46%;
        font-size: 50px;
        font-weight: 700;
    }
</style>
</html>

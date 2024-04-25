<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLG - CHANGE</title>
</head>
<body>

<?php
include 'connexion.php';
$idxup=$_GET['id'];
if(isset($_POST['push'])){
    $nickname=$_POST['nikname'];
    $digz=$_POST['digz'];
    $sql=mysqli_query($conn,"UPDATE crud_tube SET nick_name='$nickname' AND digits=$digz where id=$idxup");
    if($sql){
        echo "changed... ";
    }
}
?>
    <div class="change-form">
        <form action="" method="POST">
            <p>
                <label for="">New Nickname</label>
                <input type="text" name="nikname">
            </p>
            <p>
                <label for="">New Digits</label>
                <input type="text" name="digz">
            </p>
            <p>
                <button type="submit" name="push">Push</button>
            </p>
            
        </form>
    </div>
</body>
</html>

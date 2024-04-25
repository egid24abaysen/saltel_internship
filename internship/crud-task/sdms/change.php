<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDMS</title>
</head>
<body>

<?php
include 'conn.php';
$idxup=$_GET['id'];
if(isset($_POST['change'])){
    $n_xkulnm=$_POST['n_xkulnm'];
    $n_tel4n=$_POST['n_tel4n'];
    $n_loc=$_POST['n_loc'];
    $sql=mysqli_query($conn,"UPDATE high_school SET name='$n_xkulnm' , tel=$n_tel4n , location='$n_loc' where id=$idxup");
    if($sql){
        header("location:allhischools.php");
        echo "changed... ";
    }
}
?>
    <div class="change-form">
        <form action="" method="POST">
        <h2>Change Hi-School Details</h2>
            <p>
                <label for="">New High School</label>
                <input type="text" name="n_xkulnm">
            </p>
            <p>
                <label for="">New School Contacts</label>
                <input type="text" name="n_tel4n">
            </p>
            <p>
                <label for="">New School Location</label>
                <input type="text" name="n_loc">
            </p>
            <p>
                <input type="submit" name="change" value="Change">
            </p>
            
        </form>
    </div>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Courier New', Courier, monospace;
        color: wheat;
    }body{
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-repeat: no-repeat;
        background: url(./trainers/background.jpeg);  
    }
    .change-form{
        position: absolute;
        top: 5rem;
        background: transparent;
        backdrop-filter: blur(20px);
        border-radius: 20px;
        box-shadow: 1px 1px 5px beige;
        padding: 1.2rem;
        height: max-content;
        
    }form{
        padding: 1.4rem;
    }h1{
       font-weight: 700;
    }p{
        padding: .8rem;
    }input{
        background: transparent;
        color: white;
        padding: 5px;
        border-radius: 3px;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
    }select,option{
        color: black;
    }input[type='submit'],input[type='button']{
        background: black;
    }
</style>
</html>

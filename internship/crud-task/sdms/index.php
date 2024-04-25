<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDMS</title>
</head>
<body>
    <div class="form">
        <form action="index.php" method="post">
            <h2>add school</h2>
            <p>
                <label for="">School Name</label>
                <input type="text" name="sch_name" required>
            </p>
            <p>
                <label for="">School Phone</label>
                <input type="text" name="sch_phone" required>
            </p>
            <p>
                <label for="">School Location</label>
                <input type="text" name="sch_location" required>
            </p>
            <p>
                <input type="submit" value="Add School" name="add_sch">
            </p>
        </form>
    </div>
    <?php
    include 'conn.php';
   if(isset($_POST['add_sch'])){
    $schname=$_POST['sch_name'];
    $schphone=$_POST['sch_phone'];
    $schloc=$_POST['sch_location'];
    $query="INSERT into high_school(name,tel,location) values('$schname','$schphone','$schloc')";
    $insert_operation=mysqli_query($conn,$query);
    if($insert_operation){
        header("location:allhischools.php");
        echo "<br>inserted<br>";
    }
   }
    ?>
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
    }.form{
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
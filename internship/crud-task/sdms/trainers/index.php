<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDMS - Trainers</title>
</head>
<body>
    <div class="form">
        <form action="index.php" method="post">
            <h2>Add Trainer</h2>
            <p>
                <label for="">Trainer Name</label>
                <input type="text" name="tr_name" required>
            </p>
            <p>
                <label for="">Trainer Phone</label>
                <input type="text" name="tr_phone" required>
            </p>
            <p>
                <label for="">Trainer Course</label>
                <input type="text" name="tr_course" required>
            </p>
            <p>
    <select name="school" id="">
        <option value="">select</option>
        <?php
        include'conn.php';
        $query_select_school= mysqli_query($conn,"SELECT * FROM high_school");
        while($school=mysqli_fetch_array($query_select_school)){
            echo "<option value='".$school['id']."'>".$school['name']."</option>";
        }
        ?>
    </select>
            </p>
            <p>
                <input type="submit" value="Add Trainer" name="add_tr">
            </p>
        </form>
    </div>
    <?php
    include 'conn.php';
   if(isset($_POST['add_tr'])){
    $trname=$_POST['tr_name'];
    $trphone=$_POST['tr_phone'];
    $trcour=$_POST['tr_course'];
    $trsch=$_POST['school'];
    $query="INSERT into trainers(trainer_name,tel,course,tr_school) values('$trname','$trphone','$trcour','$trsch')";
    $insert_operation=mysqli_query($conn,$query);
    if($insert_operation){
        header("location:alltrainers.php");
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
        background: url(background.jpeg);  
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
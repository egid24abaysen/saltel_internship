<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLG - INDEX</title>
</head>
<body>
    <?php 
    include "connexion.php";
    if(isset($_POST['join'])){
        $nick_name=$_POST['nickname'];
        $digits=$_POST['digits'];
        $gang_choice=$_POST[''];
        $insert=mysqli_query($conn,"insert into crud_tube(nick_name,digits) values('$nick_name','$digits')");
        if($insert){
            header("location:index.php");
            echo "<br><i><b>joined blg fam</b></i>";
        }
       }
    ?>
    <div class="form">
        <form action="index.php" method="post">
        <h1>Join BLG-Hood</h1>
            <p>
                <label for="">Your NickName</label><br>
                <input type="text" name="nickname">
            </p>
            <p>
                <label for="">Your Digits</label><br>
                <input type="text" name="digits">
            </p>
            <p>
                <label for="">Gang Name</label><br>
                <select name="" id="">
                    <option value="">BLG-GANG</option>
                    <option value="">WDS-GANG</option>
                    <option value="">BBH-GANG</option>
                    <option value="">MOB-GANG</option>
                    <option value="">TLK-GANG</option>
                    <option value="">SNM-GANG</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Join Hood" name="join">
            </p>
            <p>
                <a href="demo.php"><input type="button" value="See the niggaz" name=""></a>
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
        color: white;
        
    }body{
        display: flex;
        position: relative;align-items: center;
        justify-content: center;
        background: url('Premium\ Vector\ _\ Abstract\ halftone\ background.jpeg');  
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
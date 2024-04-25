<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLG - DEMO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="board">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="100">All niggaz list</th>
                </tr>
                <tr>
                    <th>Rank</th>
                    <th>Nick-Name</th>
                    <th>self-digit</th>
                    <th>gang-niche</th>
                    <th>remove</th>

                </tr>
            </thead>
            <?php
            include 'connexion.php';
            $retrieved=mysqli_query($conn,"SELECT * from crud_tube");
            while($idx=mysqli_fetch_array($retrieved)){
                ?>
                <tr>
                    <td><?php echo $idx['id'];?></td>
                    <td><?php echo $idx['nick_name'];?></td>
                    <td><?php echo $idx['digits'];?></td>
                    <td><?php echo $idx['gang'];?></td>
                    <td>
                        <a href="./removed/remove.php?id=<?php echo $idx['id']?>">Remove</a>
                        <a href="./update.php?id=<?php echo $idx['id']?>">Change</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
</body>
</html>    
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
        position: relative;align-items: center;
        justify-content: center;
        background-size: cover;
        /* background-repeat: no-repeat; */
        background: url('Premium\ Vector\ _\ Abstract\ halftone\ background.jpeg');  
    }form{
        padding: 1.4rem;
    }h1{
       font-weight: 700;
    }p{
        padding: .8rem;
    }tr{
        padding: .8rem;
        margin: .8rem;
    }.board{
        background:transparent;
        backdrop-filter: blur(20px);
        border-radius: 20px;
        box-shadow: 1px 1px 5px beige;
        height: max-content;
        max-width: max-content;
        padding: 2rem;
        position: absolute;
        top: 5rem;

    }th{
        margin: 1rem;
    }a{
        text-decoration: none;
        color: black;
    }
</style>
</html>
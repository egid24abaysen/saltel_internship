<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="form.php" method="post" >
            <h3>add course</h3>
            <p>
                <label for="">course name</label>
            </p>
            <p>
                <input type="text" name="course_name" id="">
            </p>
            <p><button name="add" type="submit">add course</button></p>
        </form>
    </div>
    <div class="select-table">
        <table>
            <thead>
                <tr>
                    <td><?php echo $select?></td>

                </tr>
            </thead>
        </table>
    </div>
    <?php
    include "conn.php";
    if(isset($_POST['add'])){
        $course=$_POST['course_name'];
        $counter=0;
        while($counter<10){
            $counter++;
        }
        
        $sql=mysqli_query($conn,"insert into day_one(id,courses) values($counter,'$course')");
        if($sql){
            echo "<br> course added...";
        }
    }
    ?>
</body>
<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
</html>
<!-- <table>
    <h3>All details</h3>
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</table> -->
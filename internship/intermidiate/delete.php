<?php
include "./revise/connexion.php";
$select = mysqli_query ($conn,"select * from tbname");
while ($row=mysqli_fetch_array($select )){
    echo "ID  -". $row['id']."<br>-  name  -". $row['name'] . "<br>-  TEL  -". $row['tel'];
}

?>
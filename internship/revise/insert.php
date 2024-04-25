<?php
include "connexion.php";

$operation=mysqli_query($conn,"insert into tbname(name) values('mussa')");

if($operation){
    echo 'inserted';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDMS</title>
</head>
<body>
<div class="board"><table>
                        <style>
                table{
                    border-radius: 20px;
                    box-shadow: inset 1px 1px 5px white;
                    border: none;
                    margin-bottom: 20px;
                }
                b{
                    border-bottom: 2px solid wheat;
                }
                table thead tr th{
                    padding: 1rem;
                    border: none;
                    border-bottom: 1px solid wheat;
                }table tr td{
                    padding: 1rem;
                    border: none;
                }
            </style>
            <thead>
                <tr>
                    <th colspan="100">All School</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>High-School</th>
                    <th>School-Contacts</th>
                    <th>School-Location</th>
                    <th>Decision</th>
                </tr>
            </thead>
            <?php
            include 'conn.php';
            $query_select=mysqli_query($conn,"SELECT * from high_school");
            if(mysqli_num_rows($query_select)==0){
                ?>
                <tr>
                    <td colspan="100">No data Found!</td>
                </tr>
                <?php

            }
            while($schools=mysqli_fetch_array($query_select)){
                ?>
                <tr>
                    <td><?php echo $schools['id'];?></td>
                    <td><?php echo $schools['name'];?></td>
                    <td><?php echo $schools['tel'];?></td>
                    <td><?php echo $schools['location'];?></td>
                    <td>
                        <a href="remove.php?id=<?php echo $schools['id']?>" class="remove">Remove</a>
                        <a href="change.php?id=<?php echo $schools['id']?>" class="change">Change</a>
                    </td>
                    <style>
                        .remove{
                            padding: 4px;
                            border-radius: 5px;
                            color: wheat;
                            font-weight: 600;
                            font-size: 18px;
                            background: linear-gradient(45deg,transparent,cyan);
                        }.change{
                            padding: 4px;
                            border-radius: 5px;
                            color: wheat;
                            font-weight: 600;
                            font-size: 18px;
                            background: linear-gradient(45deg,transparent,cyan);
                        }.change:hover{
                            background: transparent;
                            border: none;
                            color: yellow;
                            border: 1px solid wheat;
                            
                        } .remove:hover{
                            background: transparent;
                            border: none;
                            color: red;
                            border: 1px solid wheat;
                            
                        }
                    </style>
                </tr>
                <?php
            }
            ?>
        </table></div>
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
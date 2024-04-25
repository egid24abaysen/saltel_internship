<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDMS - All trainers</title>
</head>
<body>
<div class="board"><table border="1">
            <style>
                table{
                    border-radius: 20px;
                    box-shadow: inset 1px 1px 5px wheat;
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
                <tr class="tit">
                    <th colspan="100"><h2>All Trainers</h2></th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Trainer</th>
                    <th>trainer-Contacts</th>
                    <th>Trainer-Course</th>
                    <th>Decision</th>
                </tr>
            </thead>
            <?php
            include 'conn.php';
            $query_select=mysqli_query($conn,"SELECT * from trainers");
            if(mysqli_num_rows($query_select)==0){
                ?>
                <tr>
                    <td colspan="100">No data Found!</td>
                </tr>
                <?php

            }
            while($trainers=mysqli_fetch_array($query_select)){
                ?>
                <tr>
                    <td><?php echo $trainers['trainer_id'];?></td>
                    <td><?php echo $trainers['trainer_name'];?></td>
                    <td><?php echo $trainers['tel'];?></td>
                    <td><?php echo $trainers['course'];?></td>
                    <!-- <td><?php echo $trainers['course'];?></td> -->

                    <td>
                        <a class="remove" href="remov.php?id=<?php echo $trainers['trainer_id']?>">Remove</a>
                        <a class="change" href="chang.php?id=<?php echo $trainers['trainer_id']?>">Change</a>
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
            
            <?php
            $rel="SELECT trainers.*,high_school.name FROM trainers INNER JOIN high_school ON  trainers.tr_school=high_school.id;";
            $tr_vs_sch=mysqli_query($conn,$rel);
            if(mysqli_num_rows($tr_vs_sch)==0){
                ?>
                <tr>
                    <td colspan="100">Nothing to be found related...<b>sorry!</b></td>
                </tr>
                <?php
            }?>
            <table>
                    <H2>Trainer vs Thier High-School</H2>
                    <tr>
                        <td><b>Trainer Name</b></td>
                        <td><b>Course Name</b></td>
                        <td><b>School Name</b></td>
                    </tr>
            <?php
            while($step=mysqli_fetch_array($tr_vs_sch)){
                ?>
                    <tr>
                    <td><?php echo $step['trainer_name'];?></td>
                    <td><?php echo $step['course'];?></td>
                    <td><?php echo $step['name'];?></td>
                    </tr>
                
            <?php
            }
            ?>
            </table>




            <!-- <?php
            // $selectnbr =mysqli_query($conn,"select trainer_name,course,trainer_school from trainers where tel=0790031001");
            // $countrain =mysqli_query($conn,"select count(trainers.trainer_school) as 'Number In School',high_schools.trainers from trainers,high_schools where trainers.trainer_school=high_schools.trainers group by trainers.trainer_school");

            // while($step=mysqli_fetch_array($countrain)){
            //     ?><ul>
            //         <li><?php echo $step['Number In School'];?></li>
            //         <li><?php echo $step['high_schools.trainers'];?></li>

            //     </ul>
            // <?php
            // }
            while($step=mysqli_fetch_array($tr_vs_sch)){
                ?><ul>
                    <li><?php echo $step['trainers.trainer_name'];?></li>
                    <li><?php echo $step['high_schools.name'];?></li>

                </ul>
            <?php
            }
            // while($step=mysqli_fetch_array($selectnbr)){
            //     ?><ul>
            //         <li><?php echo $step['trainers.trainer_name'];?></li>
            //         <li><?php echo $step['high_schools.name'];?></li>

            //     </ul>
            // <?php
            // }
            // ?> -->
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
        background: url(background.jpeg);  
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
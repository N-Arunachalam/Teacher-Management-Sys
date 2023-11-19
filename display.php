<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Management System - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

</head>

<body>
    <h2 style="text-align:center">Teacher Management System</h2>
    <div class="container-top">
        <img src="images/teachers.jpg" alt="image" style="float:left;max-width:50%;height:auto;">
        <div class="mb-3" style="float:right;">
            <div class="search-box" style="float:right;">
                <form action="search.php" method="POST">
                    <input id="searchvalues" name="searchvalues" type="text" placeholder="Search..">
                    <button style="background:#FDF5E6" type="submit"><i class="fa fa-search">Search</i></button>
                </form>
            </div>
            <br>
            <br>
            <h2 style="padding-inline:5px 5px;">Filter Teacher's Data for Age and No.of.Classes</h2>
            <form action="filter.php" method="POST">
                <label>Age</label>
                <input type="numeric" class="form-control" placeholder="Enter the Age" name="age" autocomplete="off">
                
                <select name="age_f" id="age_f">
                    <option value="ageg">Greater( > Age)</option>
                    <option value="agel">Lesser( < Age)</option>
                    <option value="ageeq">Equal( = Age)</option>
                </select>
                <br>
                <label>No of Classes</label>
                <input type="numeric" class="form-control" placeholder="Enter the No. of Classes" name="classesno" autocomplete="off">
                
                <select name="classesno_f" id="classesno_f">
                    <option value="clsnog">Greater( > Classes)</option>
                    <option value="clsnol">Lesser( < Classes)</option>
                    <option value="clsnoeq">Equal( = Classes)</option>
                </select>
                <br>
                <button type="submit" class="btn btn-primary my-2" name="submit">Filter</button>
            </form>
            <br>
            <h2>Add a new Teacher's Data Record</h2>
            <label>CLICK HERE --> <label>
            <button class="btn btn-primary"><a href="teacher.php" class='text-light'>Add teacher</a>
            </button>
        </div>
    </div>
    <br>
    <div class="container-bottom">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">TEACHER ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">D.O.B</th>
                    <th scope="col">Age</th>
                    <th scope="col">No.of.Classes</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from  `teachers`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['TID'];
                        $name=$row['Name'];
                        $dob=$row['DOB'];
                        $age=$row['Age'];
                        $noclasses=$row['NoClasses'];

                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$dob.'</td>
                        <td>'.$age.'</td>
                        <td>'.$noclasses.'</td>

                        <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

                    </td>
                    </tr>';
                    }
                }

            ?>

            </tbody>
        </table>
    </div>
</body>

</html>
<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <title>Filter</title>
</head>

<body>
    <h2 style="text-align:center">Teacher Management System</h2>
    <div class="container my-5">
    <table class="table">

    <?php
        $age = $_POST['age'];
        $ageq=$_POST['age_f'];
        if($ageq=='ageg'){
            $sql_age = "select * from `teachers` where Age>$age";}
        if($ageq=='agel'){
            $sql_age = "select * from `teachers` where Age<$age";}
        if($ageq=='ageeq'){
            $sql_age = "select * from `teachers` where Age=$age";}
        
        $classesno = $_POST['classesno'];
        $classesnoq=$_POST['classesno_f'];
        if($classesnoq=='clsnog'){
            $sql_clsno = "select * from `teachers` where NoClasses>$classesno";}
        if($classesnoq=='clsnol'){
            $sql_clsno = "select * from `teachers` where NoClasses<$classesno";}
        if($classesnoq=='clsnoeq'){
            $sql_clsno = "select * from `teachers` where NoClasses=$classesno";}

        $sql = "$sql_age intersect $sql_clsno";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0)
        {
    ?>
            <thead>
                <tr>
                    <th scope="col">TEACHER ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">D.O.B</th>
                    <th scope="col">Age</th>
                    <th scope="col">No.of.Classes</th>
                </tr>
            </thead>
    <?php
            while($row=mysqli_fetch_assoc($result))
            {
    ?>
                <tbody>
    <?php
                    echo'
                        <tr>
                            <td>'.$row['TID'].'</td>
                            <td>'.$row['Name'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['Age'].'</td>
                            <td>'.$row['NoClasses'].'</td>
                        </tr>';
            }
    ?>      
                </tbody>
    <?php
            }
            else
            {
    ?>
                <tbody>
                    <tr>
                        <td colspan="4">No Data Found</td>
                    </tr>
                    </tbody>
    <?php
            }
    ?>
    </table>
    </div>
    
    <button style="background:#FDF5E6" class="btn btn-primary m-5" name="submit"><a href="display.php">HomePage</a></button>
               
</body>

</html>
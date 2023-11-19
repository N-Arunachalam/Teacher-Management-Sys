<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $noclasses=$_POST['noclasses'];

    $sql="insert into `teachers` (Name,Age,DOB,NoClasses) values ('$name','$dob','$age','$noclasses')";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "Data inserted";

        header ('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
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
    <title>Teacher Details</title>
</head>

<body>
    <h2 style="text-align:center">Teacher Management System</h2>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>D.O.B</label>
                <input type="date" class="form-control" placeholder="Enter your D.O.B" name="dob"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="numeric" class="form-control" placeholder="Enter your Age" name="age" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>No. of Classes</label>
                <input type="numeric" class="form-control" placeholder="Teacher's No. of Classes" name="noclasses"
                    autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
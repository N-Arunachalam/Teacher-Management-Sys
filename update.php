<?php
include 'connect.php';

$id=$_GET['updateid'];

$sql="Select * from `teachers` where TID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$dob=$row['DOB'];
$age=$row['Age'];
$noclasses=$row['NoClasses'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $noclasses=$_POST['noclasses'];

    $sql="update `teachers` set TID=$id,Name='$name',DOB='$dob',Age='$age',NoClasses='$noclasses' where TID=$id";
    $result=mysqli_query($con,$sql);

    if($result){
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
    <title>Update</title>
</head>

<body>
    <h2 style="text-align:center">Teacher Management System</h2>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off"
                    value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>D.O.B</label>
                <input type="date" class="form-control" placeholder="Enter your D.O.B" name="dob" autocomplete="off"
                    value=<?php echo $dob;?>>
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="numeric" class="form-control" placeholder="Enter your Age" name="age" autocomplete="off"
                    value=<?php echo $age;?>>
            </div>
            <div class="mb-3">
                <label>No. of Classes</label>
                <input type="numeric" class="form-control" placeholder="Enter No. of Classes Handled" name="noclasses"
                    autocomplete="off" value=<?php echo $noclasses;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
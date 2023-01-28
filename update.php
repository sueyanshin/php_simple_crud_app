<?php

include 'connect.php';

$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id ";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<form class="m-5" method="post">
  <div class="mb-3 form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control" placeholder="Enter your phone" name="phone" value=<?php echo $phone;?>>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
</body>
</html>
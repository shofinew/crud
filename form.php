<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
if($con){
      echo "connectd!";
}

if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      $sql= "INSERT INTO crud(NAME,EMAIL,MOBILE,PASSWORD) VALUES('$name','$email','$mobile','$password')";

      $result= mysqli_query($con, $sql);
      if($result){
            echo "data inserted !";
      }else{
            die(mysqli_error($con));
      }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>form</title>
</head>
<body>
      <form action="" method="POST" >

      <label>NAME</label>
      <input type="text" name="name" placeholder="name" ><br>

      <label>EMAIL</label>
      <input type="email" name="email" placeholder="email"><br>

      <label>MOBILE</label>
      <input type="text" name="mobile" placeholder="mobile"><br>

      <label>PASSWORD</label>
      <input type="password" name="password" placeholder="password"><br><br>


      <input type="submit" value="submit" name="submit">
      </form>      
</body>
</html>
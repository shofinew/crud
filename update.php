<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
if($con){
      echo "connectd!";

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      $sql= "UPDATE crud set name='$name', email='$email', mobile='$mobile', password='$password' WHERE  id=$id ";

      $result= mysqli_query($con, $sql);
      if($result){
            echo "data updated !";
            header('location:display.php');
      }else{
            die(mysqli_error($con));
      } 
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


      
      <button type="submit" value="submit" name="submit">update</button>
      </form>      
</body>
</html>
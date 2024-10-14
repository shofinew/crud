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
      $date = $_POST['date'];
      $time = $_POST['time'];

      $sql= "INSERT INTO crud(NAME,EMAIL,MOBILE,PASSWORD,DATE,TIME) VALUES('$name','$email','$mobile','$password','$date','$time')";

      $result= mysqli_query($con, $sql);
      if($result){
            // echo "data inserted !";
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

      <label>DATE</label>
      <input type="date" name="date" ><br><br>

      <label>TIME</label>
      <input type="time" name="time" ><br><br>


      <button type="submit" value="submit" name="submit">submit</button> 
      </form>      
</body>
</html>
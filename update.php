<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");


if(isset($_GET['updateid'])){
      $id=$_GET['updateid'];

if($con){
      $sql="SELECT * FROM crud WHERE id=$id";
      $result=mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);

      $id= $row['ID'];
      $name= $row['NAME'];
      $email= $row['EMAIL'];
      $mobile= $row['MOBILE'];
      $date= $row['DATE'];
      $time= $row['TIME'];
      $password= $row['PASSWORD'];


if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $password = $_POST['password'];

      $sql= "UPDATE crud set name='$name', email='$email', mobile='$mobile',date='$date',time='$time' , password='$password' WHERE  id=$id ";

      $result= mysqli_query($con, $sql);
      if($result){
            // echo "data updated !";
            header('location:display.php');
      }else{
            die(mysqli_error($con));
      } 
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
      <form action="update.php" method="POST" >

      <label>NAME</label>
      <input type="text" name="name" placeholder="name" value="<?php echo $name;?>" ><br>

      <label>EMAIL</label>
      <input type="email" name="email" placeholder="email"  value="<?php echo $email;?>"><br>

      <label>MOBILE</label>
      <input type="text" name="mobile" placeholder="mobile"  value="<?php echo $mobile;?>"><br>

      <label>PASSWORD</label>
      <input type="password" name="password" placeholder="password"  value="<?php echo $password;?>"><br><br>

      <label>DATE</label>
      <input type="date" name="date"   value="<?php echo $date;?>"><br><br>
      
      <label>TIME</label>
      <input type="time" name="time"  value="<?php echo $time;?>"><br><br>


      
      <button type="submit" value="submit" name="submit">update</button>
      </form>      
</body>
</html>
<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
if($con){
      echo "connectd!";
}
if(isset($_GET['deleteid'])){
      $id=$_GET['deleteid'];
$sql = "DELETE FROM crud WHERE id= $id";
$result=mysqli_query($con, $sql);
if($result){
      header('location:display.php');
}else{
      die(mysqli_error($con));
}
}
?>
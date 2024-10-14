<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");

$sql= "ALTER TABLE crud ADD COLUMN `TIME` VARCHAR(255)";
$ex= mysqli_query($con, $sql);
if(!$ex){
      die(mysqli_error($con));
}
?>
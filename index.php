<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
if($con){
    echo "connected!";
}

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql= "INSERT INTO crud(NAME,EMAIL,MOBILE,PASSWORD) VALUES('$name','$email','$mobile','$password')";

    $result= mysqli_query($con, $sql);
    if($result){
        echo "Data inserted!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <label>NAME</label>
        <input type="text" name="name" placeholder="name"><br>

        <label>EMAIL</label>
        <input type="email" name="email" placeholder="email"><br>

        <label>MOBILE</label>
        <input type="text" name="mobile" placeholder="mobile"><br>

        <label>PASSWORD</label>
        <input type="password" name="password" placeholder="password"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>      
</body>
</html>

<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
if($con){
      echo "connectd!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>crudDisplay</title>
</head>
<body>
      <div>
            <button id="add"><a href="form.php"> Add</a></button>
      </div>
      
      
      <table>
            <thead>
                  <tr>
                        <th>sl no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Operation</th>
                  </tr>
            </thead>
            <tbody>

            
      <?php
      
      $sql="SELECT * FROM crud";
      $result= mysqli_query($con, $sql);
      if($result){      
      while ($row= mysqli_fetch_assoc($result)) {
           $id  = $row['ID'];
           $name  = $row['NAME'];
           $email  = $row['EMAIL'];
           $mobile  = $row['MOBILE'];
           $password  = $row['PASSWORD'];

           echo '<tr>
      <th>'.$id.'</th>
      <th>'.$name.'</th>
      <th>'.$email.'</th>
      <th>'.$mobile.'</th>
      <th>'.$password.'</th>
      </tr>';
      
      
      
      }
      }
      ?>
</tbody>

      </table>










      
      
</body>
</html>
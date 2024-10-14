<?php
$con = mysqli_connect("localhost", "root", "", "cruddb");
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
                        <th>Date</th>
                        <th>Time</th>
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
           $date  = $row['DATE'];
           $time  = $row['TIME'];
           $password  = $row['PASSWORD'];

           echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>'.$date.'</td>
      <td>'.$time.'</td>
      
      <td>
            <button ><a href="update.php? updateid='.$id.'">Update</a></button>
            <button><a href="delete.php? deleteid='.$id.'">Delete</a></button>
      </td>
      </tr>';
      }
}
      ?>     
</tbody>

      </table>










      
      
</body>
</html>
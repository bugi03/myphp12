<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "movies_library";//database name-movies library
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
}

$sql = "SELECT * FROM `movies` WHERE 1";
$query =  mysqli_query($conn, $sql);
 

   
  ?>
   <table border="1">
       <tr>
           <td>SE_NO.</td>
           <td>MOVIES_NAME</td>
           <td>LEAD_ACTOR</td>
           <td>LEAD_ACTRESS</td>
		   <td>DIRECTOR_NAME</td>
		   <td>RELEASE_DATE</td>
       </tr>
       <?php foreach ($query as $rows) {?>
       <tr>
           <td><?php echo $rows['SE_NO.'];?></td>
           <td><?php echo $rows['MOVIES_NAME'];?></td>
           <td><?php echo $rows['LEAD_ACTOR'];?></td>
           <td><?php echo $rows['LEAD_ACTRESS'];?></td>
		   <td><?php echo $rows['DIRECTOR_NAME'];?></td>
		   <td><?php echo $rows['RELEASE_DATE'];?></td>
       </tr>
       <?php }?>
   </table> 
  <?php


?>

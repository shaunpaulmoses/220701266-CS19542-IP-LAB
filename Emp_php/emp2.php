<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
   table,tr,td,th{
      border-collapse:collapse;
      border: 1px solid black;
   }
</style>
<body>
   <center>
<?php
   $con = mysqli_connect("localhost","root","","employee");
   $sql= "SELECT * FROM emp_details ";
   $result=mysqli_query($con,$sql);
   if($result->num_rows>0){
      echo "<table><tr><th>Employee Id</th><th>Employee Name</th><th>Employee Designation</th><th>Employee Department</th><th>date Of Joining</th><th>Salary</th>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['eid']."</td><td>".$row['ename']."</td><td>".$row['edes']."</td><td>".$row['edep']  ."</td><td>".$row['edoj']."</td><td>".$row['esal']."</td></tr>" ;
     }
   }
   $con->close();

?> 
</center>
</body>
</html>  
<?php
  $mysqli=new mysqli("localhost","root","","student");
  if($mysqli->connect_error){
      echo("connection Error");
  }
  else{
    echo("connnected To DataBase");
  }
  $sql="SELECT * FROM student_details WHERE roll = ?";
  $stmt=$mysqli->prepare($sql);
  $stmt->bind_param("s",$_GET['q']);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($r,$n,$d);
  $stmt->fetch();
  $stmt->close();
  echo("<table>");
  echo("<th>ROLL NUMBER</th>");
  echo("&nbsp");
  echo("&nbsp");
  echo("<th>NAME</th>");
  echo("&nbsp");
  echo("&nbsp");
  echo("<th>DEPARTMENT</th>");
  echo("<tr>");
  echo("<td>".$r."</td>");
  echo("&nbsp");
  echo("&nbsp");
  echo("<td>".$n."</td>");
  echo("&nbsp");
  echo("&nbsp");
  echo("<td>".$d."</td>");
  echo("</tr></table>")
?>
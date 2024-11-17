<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$con = mysqli_connect( "localhost","root","","bank");

if($con==false){
     
 echo("CONNECTION ERROR");

}

$cid = $_REQUEST[ 'cid' ] ;

$cname = $_REQUEST[ 'cname' ] ;

$aid=$_REQUEST['aid'];

$act=$_REQUEST['act'];

$abal=$_REQUEST['abal'];

$sql = " INSERT INTO customers VALUES( '$cid' , '$cname' ) ";

$sql2="INSERT INTO account VALUES ('$aid','$cid','$act','$abal')";

if(mysqli_query($con,$sql) && mysqli_query($con,$sql2)){
      echo nl2br("TABLE UPDATED\n\n");
      echo nl2br("NAME : ".$cname."\n");
      echo nl2br("CUSTOMER ID : ".$cid."\n");
      echo("ACCOUNT ID ".$aid."<br>");
      echo("ACCOUNT TYPE ".$act."<br>");
      echo("ACCOUNT BALANCE ".$abal."<br>");
}
else{
    echo("Connection Error");
}
?>
</body>
</html>
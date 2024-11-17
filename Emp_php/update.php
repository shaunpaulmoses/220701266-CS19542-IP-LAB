<?php
$con=mysqli_connect("localhost","root","","employee");
$val=$_REQUEST['val'];
$col=$_REQUEST['col'];
$id=$_REQUEST['id'];
$sql= "UPDATE emp_details set $col = '$val' where eid=$id";
if(mysqli_query($con,$sql)){
    echo ("TABLE UPDATED");
}
?>

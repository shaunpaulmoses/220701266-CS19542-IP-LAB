<?php
        $con=mysqli_connect("localhost","root","","employee");
        if($con==false){
            echo("Mysqli Connection Error");
        }
        $ename=$_REQUEST['ename'];
        $eid=$_REQUEST['e_id'];
        $edes=$_REQUEST['edes'];
        $edep=$_REQUEST['edep'];
        $edoj=$_REQUEST['edoj'];
        $esal=$_REQUEST['esal'];
        $sql="INSERT INTO emp_details VALUES('$ename','$eid','$edes','$edep','$edoj','$esal')";
        if(mysqli_query($con,$sql)){
            echo("Table Updated");
        }
    
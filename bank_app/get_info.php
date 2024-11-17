<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Infomation</title>
</head>
<body>
    <style>
        
        .div{

      font-family: 'Times New Roman', Times, serif;

      font-weight: bold;

      text-align: center;


        }

    </style>

    <div>

    <?php

       $con=mysqli_connect("localhost","root","","bank");
       
       if($con==false){

           echo(" Connection Error ");

       }

       $cid=$_REQUEST['c_id'];

       $sql="SELECT * FROM customers WHERE cid = '$cid' ";
       
       $st=$con->prepare($sql);

       $st->execute();

       $st->store_result();

       $st->bind_result($cid,$cname);

       $st->fetch();

       $st->close();
    
       if(mysqli_query($con,$sql)){

          echo("CUSTOMER DETAILS");
          
          echo("<br>");

          echo("<br>");
          
          echo("Customer Id : ".$cid);

          echo("<br>");

          echo("<br>");

          echo("Customer Name : ".$cname);

       }
       else{

        echo("ERROR");

       }
    ?>
    </div>
</body>
</html>
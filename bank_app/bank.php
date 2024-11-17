<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>BANKING</title>
</head>
<body>
    <style>
      form{
        font-family: 'Times New Roman', Times, serif;
        font-size: larger;
        font-weight: bolder;
      }
      input{
        
        font-family: 'Times New Roman', Times, serif;
        font-size: larger;
        font-weight: bolder;
        text-align: center;
      }
      .header{
        font-family: 'Times New Roman', Times, serif;
        font-size: x-large;
        
        color: darkgreen;
        text-align: center;
      }
      select{
        
        font-family: 'Times New Roman', Times, serif;
        font-size: larger;
        font-weight: bolder;
      }
    </style>
    <script>
            $(document).ready(function(){
                    $("#form2").click(function(){
                        $("#ff1").hide();
                        $("#f2").show();
                    });
                    $("#form3").click(function(){
                        $("#ff1").hide();
                        $("#f3").show();
                    });
            });
    </script>
    <center>
    <h1 id="header">BANKING APPLICATION</h1>
    <form name="f1" id="ff1">

        <input type="button" id="form2" value="Insert Details">
        
        <input type="button"  id="form3" value="Get Details">
    
    </form>
    
    <form id = "f2" name = "ff2" style = "display:none" action = "insert2.php " method = "post" >

            <label for="c_name" >Name</label>  &nbsp;&nbsp; <input type ="text " id = "c_name" name = "cname"> <br><br>

            <label for="c_id"> Customer Id </label>   &nbsp;&nbsp; <input type = "text" id = "c_id" name = "cid" > <br><br>

            <label for="a_id">Account Id </label> <input type="text" id="a_id" name="aid"><br><br>

            <label for="ac_t">Account Type</label>

            <select id="ac_t" name="act">

                <option value="Savings">Savings</option>

                <option value="current">Current</option>

            </select><br><br>

            <label for="bal">Balance</label> <input type="text" id="bal" name="abal"><br><br>
            
            <input type="submit" value="Enter Details">

    </form>

    <form id="f3" name="ff3" action="get_info.php" method="POST" style="display:none">

        <label for="c_id_g">ENTER CUSTOMER ID</label> &nbsp;&nbsp;

        <input type="text" id="c_id_g" name="c_id">

        <br><br>

        <input type="submit" value="get Details">

    </form>
    </center>
    

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Record</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #1E3A8A; /* Dark blue background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
            color: #00BFFF; /* Sky blue color */
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            margin-top: 30px;
        }

        table tr {
            display: flex;
            justify-content: center;
        }

        input[type="submit"] {
            font-size: 1.2rem;
            padding: 12px 24px;
            background-color: #00BFFF; /* Sky blue background */
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #00A0D3; /* Slightly darker blue */
        }

        .container {
            background-color: #FFFFFF; /* White container for content */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        p {
            color: #333;
            font-size: 1.1rem;
            margin-top: 10px;
        }

        .success-message {
            font-size: 1.5rem;
            color: #32CD32; /* Lime green for success message */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <h1>Joy's Dental Clinic</h1>

            <?php

            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "JOYSDENTAL");

            // Check connection
            if($conn === false){
                die("<p style='color: red;'>ERROR: Could not connect. " 
                    . mysqli_connect_error() . "</p>");
            }

            // Retrieve form data
            $id =  $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $gender =  $_REQUEST['sex'];
            $age = $_REQUEST['age'];
            $con = $_REQUEST['con'];
            $t = $_REQUEST['d/t'];
            $tc = $_REQUEST['tc'];
            $ap = $_REQUEST['ap'];

            // Insert data into the database
            $sql = "INSERT INTO patient VALUES ('$id', '$name', '$gender', '$age', '$con', '$t', '$tc', '$ap')";

            if(mysqli_query($conn, $sql)){
                echo "<p class='success-message'>Inserted Patient Information</p>"; 
            } else {
                echo "<p style='color: red;'>ERROR: Sorry, could not insert. " 
                    . mysqli_error($conn) . "</p>";
            }

            // Close connection
            mysqli_close($conn);
            ?>

            <table>
                <tr>
                    <form action="admin_homepage.html">
                        <input type="submit" value="Admin Home Page">
                    </form>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>

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
            background-color: #1E90FF; /* Blue background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
            color: #ffffff;
            margin-bottom: 30px;
            text-transform: uppercase;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            border-collapse: collapse;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        td, th {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
            font-size: 1.2rem;
            color: #333;
        }

        td:first-child {
            font-weight: bold;
            color: #00796B;
        }

        td:last-child {
            text-align: right;
            color: #00796B;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        /* Styling buttons and inputs */
        input {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            padding: 10px;
            margin: 20px 0;
            background-color: #00796B;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        input:hover {
            background-color: #004D40;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }

            table td, table th {
                font-size: 1rem;
            }

            input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <center>
        <h1>Joy's Dental Clinic</h1>
        <?php
            $mysqli = new mysqli("localhost", "root", "", "JOYSDENTAL");
            if($mysqli->connect_error) {
                exit('Could not connect');
            }
            $cid=$_REQUEST['id'];

            $sql="SELECT * FROM patient WHERE patid = '$cid' ";
            
            $stmt = $mysqli->prepare($sql);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result( $id, $name, $sex, $ag, $con, $t, $tc, $ap);
            $stmt->fetch();
            $stmt->close();
            
            if($name == null){
                echo "<p style='color:white;'>No Record Of This Patient Is Available</p><br><br>";
            } else {
                echo "<table>";
                echo "<tr><td>Patient Id</td><td>".$id."</td></tr>";
                echo "<tr><td>Patient Name</td><td>".$name."</td></tr>";
                echo "<tr><td>Patient Gender</td><td>".$sex."</td></tr>";
                echo "<tr><td>Patient Age</td><td>".$ag."</td></tr>";
                echo "<tr><td>Treatment Done</td><td>".$t."</td></tr>";
                echo "<tr><td>Total Cost</td><td>".$tc."</td></tr>";
                echo "<tr><td>Amount Paid</td><td>".$ap."</td></tr>";
                echo "<tr><td>Balance Amount</td><td>".($tc-$ap)."</td></tr>";
                echo "</table>";
            }
        ?>
    </center>
</body>
</html>

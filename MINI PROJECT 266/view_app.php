<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #93C5FD;
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        h1 {
            font-size: 3rem;
            color: #1E3A8A;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            font-size: 1.1rem;
            border: 1px solid #1E3A8A;
        }

        th {
            background-color: #1E3A8A;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #1E3A8A;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #1667d9;
        }

        .no-appointments {
            font-size: 1.5rem;
            color: #1E3A8A;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            table, th, td {
                font-size: 0.9rem;
            }

            h1 {
                font-size: 2.2rem;
            }

            input[type="submit"] {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <h1>Joy's Dental Clinic</h1>

    <div class="container">
        <center>
        <?php
            // Step 1: Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "joysdental";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Step 2: Write the SQL Query
            $sql = "SELECT * FROM appt WHERE DATE(d) = CURDATE() ORDER BY t";

            // Step 3: Execute the query
            $result = $conn->query($sql);

            // Step 4: Fetch and display the results
            if ($result->num_rows > 0) {
                // Output data for each row
                echo "<table><tr><th>Patient Id</th><th>Patient Name</th><th>Date</th><th>Time</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>&nbsp;" . $row["id"]. "&nbsp;</td><td>&nbsp;" . $row["name"]. "&nbsp;</td><td>&nbsp;" . $row["d"]. "&nbsp;</td><td>&nbsp;" . $row["t"]. "&nbsp;</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<div class='no-appointments'>NO APPOINTMENTS</div>";
            }

            // Step 5: Close the connection
            $conn->close(); 
        ?>
        </center>
    </div>

    <form action="admin_homepage.html">
        <input type="submit" value="Home Page">
    </form>

</body>

</html>

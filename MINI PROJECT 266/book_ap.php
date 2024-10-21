<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #87CEEB; /* Sky blue */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            color: #ffffff;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px;
        }

        input {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
            border: 2px solid #00796B; /* Darker shade for input border */
            border-radius: 8px;
            background-color: #E0F7FA; /* Light blue for input */
            font-size: larger;
            color: darkblue;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #004D40; /* Darker shade on focus */
        }

        input[type="submit"] {
            background-color: #00796B;
            color: #ffffff;
            font-size: large;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #004D40; /* Darker shade on hover */
        }

        p {
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
            font-size: larger;
            margin-top: 20px;
        }

        .link-button {
            background-color: #00796B;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: large;
        }

        .link-button:hover {
            background-color: #004D40; /* Darker shade on hover */
        }

        /* Media Queries for responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            input {
                font-size: 1rem;
            }

            input[type="submit"] {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <center>
        <h1>JOY'S DENTAL CLINIC</h1>
        
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "JOYSDENTAL");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking values from the form data(input)

            $id = $_REQUEST['id'];
            $name = $_REQUEST['n'];
            $time = $_REQUEST['apt'];
            $d = $_REQUEST['d'];

            // Performing insert query execution
            $sql = "INSERT INTO appt VALUES ('$id', '$name', '$d', '$time')";

            if (mysqli_query($conn, $sql)) {
                echo "<h2>Appointment booked successfully!</h2>";
            } else {
                echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }

        // Close connection
        mysqli_close($conn);
        ?>
        <a href="admin_homepage.html" class="link-button">Home Page</a>
    </center>
</body>
</html>

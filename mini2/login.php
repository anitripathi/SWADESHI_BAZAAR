<?php
// Start the session
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "local_db";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $buisnesstype = $_POST["buisnesstype"];

    // Sanitize input data (to prevent SQL injection)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $buisnesstype = mysqli_real_escape_string($conn, $buisnesstype);

    // Insert data into the database
    $sql = "INSERT IGNORE login (username, password, buisnesstype) VALUES ('$username', '$password', '$buisnesstype')";

    if ($conn->query($sql) === TRUE) {
        // Set the username in session
        $_SESSION['username'] = $username;
        echo "<script>alert('Login successful');</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: white;
        }

        .box {
            position: relative;
            width: 380px;
            height: 520px;
            background-color: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
        }

       

        .form {
            position: absolute;
            background: #dbd1d0;
            inset: 10px;
            border-radius: 8px;
            z-index: 10;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
        }

        .inputbox {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .inputbox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            border: none;
            outline: none;
            color: black;
            font-size: 1em;
            z-index: 10;
        }

        

        .form h2 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            text-align: center;
            letter-spacing: 0.1em;
        }

       

        .inputbox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: black;
            border-radius: 4px;
            transition: 0.5s;
            pointer-events: none;
            z-index: 9;
        }

        

        input[type="submit"] {
            border: 2px solid black;
            outline: none;
            background: #4f4b4b;
            padding: 11px 25px;
            width: 100px;
            margin-top: 10px;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
        }

        input[type="submit"]:active {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="#" method="post">
                <h2>sign in</h2>
                <div class="inputbox">
                    <input type="text" required="required" name="username" placeholder="username" />
                    
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" required="required" name="password" placeholder="password"/>
                    
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="text" required="required" name="buisnesstype" placeholder="buisness type" />
                  
                    <i></i>
                </div>
                
                <input type="submit" value="login" id="loginButton" />
            </form>
           
        </div>
    </div>
</body>

</html>
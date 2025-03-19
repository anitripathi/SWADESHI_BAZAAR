<?php

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
    $sql = "INSERT INTO login (username, password, buisnesstype) VALUES ('$username', '$password', '$buisnesstype')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('login successfilly');</script>";
        header("Location: index.html");
        exit();
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
// }   else {
    //     //Redirect to the form page if accessed directly without submitting the form
        // header("Location: index.html");
        // exit();
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
            background-color: #23242a;
        }

        .box {
            position: relative;
            width: 380px;
            height: 520px;
            background-color: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, #45f3ff);
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
        }

        .box::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, #45f3ff);
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .form {
            position: absolute;
            background: #28292d;
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
            color: #23242a;
            font-size: 1em;
            z-index: 10;
        }

        .inputbox span {
            position: relative;
            left: 0;
            padding: 20px 0px 10px;
            font-size: 1em;
            color: #8f8f8f;
        }

        .form h2 {
            color: #45f3ff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .inputbox input:valid~span,
        .inputbox input:focus~span {
            color: #45f3ff;
            transform: translateX(0px) translateY(-34px);
            font-size: 0.75em;
        }

        .inputbox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #45f3ff;
            border-radius: 4px;
            transition: 0.5s;
            pointer-events: none;
            z-index: 9;
        }

        .inputbox input:valid~i,
        .inputbox input:focus~i {
            height: 44px;
        }

        .links {
            display: flex;
            justify-content: space-between;
        }

        .links a {
            margin: 10px o;
            font-size: 0.75em;
            color: #8f8f8f;
            text-decoration: none;
        }

        .links a:hover,
        .links a:nth-child(2) {
            color: #45f3ff;
        }

        input[type="submit"] {
            border: none;
            outline: none;
            background: #45f3ff;
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
                    <input type="text" required="required" name="username" />
                    <span>USERNAME</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" required="required" name="password" />
                    <span>PASSWORD</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="text" required="required" name="buisnesstype" />
                    <span>BUISNESS TYPE</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">forgot password</a>
                    <a href="#">singup</a>
                </div>
                <input type="submit" value="login" id="loginButton" />
            </form>
           
        </div>
    </div>
</body>

</html>
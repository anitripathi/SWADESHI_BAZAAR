<?php
// Database connection
$servername = "localhost";
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "local_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Insert item into database
    $sql = "INSERT INTO products (name, description, price, image_url) VALUES ('$name', '$description', $price, '$image_url')";

    if ($conn->query($sql) === TRUE) {
         // Display success message using JavaScript
         echo '<script>alert("Item added successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
    <link rel="stylesheet" href="styleaddproducts.css">
</head>
<body>
    <h2 style="font-size: 40px;">Add New Item</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br>
        
        <label for="image_url">Image URL:</label><br>
        <input type="url" id="image_url" name="image_url" required><br>
        
        <input type="submit" value="Add Item">
    </form>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Fruit</title>
</head>
<body>
    <h2>Add New Fruit</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "@Sachin3214mysql";
    $dbname = "fruit";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    
    // Function to sanitize input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $name = $color = $price = "";
    $nameErr = $colorErr = $priceErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Name validation
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
    
        // Color validation
        if (empty($_POST["color"])) {
            $colorErr = "Color is required";
        } else {
            $color = test_input($_POST["color"]);
        }
    
        // Price validation
        if (empty($_POST["price"]) || !is_numeric($_POST["price"])) {
            $priceErr = "Price is required and must be numeric";
        } else {
            $price = test_input($_POST["price"]);
        }
    
        // Insert data if no errors
        if (empty($nameErr) && empty($colorErr) && empty($priceErr)) {
            $sql = "INSERT INTO fruits (name, color, price) VALUES ('$name', '$color', '$price')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    
    $conn->close();
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Fruit Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span>
        <br><br>

        <label for="color">Fruit Color:</label>
        <input type="text" id="color" name="color" value="<?php echo $color; ?>">
        <span style="color:red;"><?php echo $colorErr; ?></span>
        <br><br>

        <label for="price">Fruit Price:</label>
        <input type="text" id="price" name="price" value="<?php echo $price; ?>">
        <span style="color:red;"><?php echo $priceErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

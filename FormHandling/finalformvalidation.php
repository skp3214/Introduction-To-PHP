<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $email = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
    <h2>Simple PHP Form Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="name" /> <br>
        <input type="text" name="email" /> <br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "Your Input:  <br>";
        echo "Name: $name  <br>";
        echo "Email: $email";
    }
    ?>
</body>

</html>
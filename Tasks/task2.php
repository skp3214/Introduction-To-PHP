<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $security_answer = $_POST['security_answer'];

    $errors = [];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    if (strlen($password) < 8 || !preg_match('/[^a-zA-Z\d]/', $password)) {
        $errors[] = "Password must be at least 8 characters long and include at least one special character.";
    }

    if (empty($errors)) {
        echo "Form submitted successfully!";
        // Process the form data (e.g., save to database)
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="security_answer">Security Question Answer:</label>
        <input type="text" id="security_answer" name="security_answer" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
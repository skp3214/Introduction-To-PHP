<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="name" placeholder="Enter Name"/> <br>
        <input type="text" name="address" placeholder="Enter Address"/> <br>
        <input type="text" name="regno" placeholder="Enter Reg No"/> <br>
        <input type="text" name="specialization" placeholder="Enter Specialization"/> <br>
        <input type="text" name="dob" placeholder="Enter dob"/> <br>
        <input type="submit" />
    </form>

    <?php
    if(isset($_POST["name"])){
        echo $_POST["name"];
    }
    echo "<br>";
    if(isset($_POST["address"])){
        echo $_POST["address"];
    }
    echo "<br>";
    if(isset($_POST["regno"])){
        echo $_POST["regno"];
    }
    echo "<br>";
    if(isset($_POST["specialization"])){
        echo $_POST["specialization"];
    }
    echo "<br>";
    if(isset($_POST["dob"])){
        echo $_POST["dob"];
    }
    echo "<br>";
     ?>

</body>
</html>
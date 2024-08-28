<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

        <input type="text" name="mark" placeholder="Enter Your Marks" /> <br>
        <input type="text" name="name" placeholder="Enter Your Name" />
        <input type="submit" />
    </form>
    <?php
    if(isset($_POST['mark'])){
        if($_POST["mark"]>34){
            echo "You are passed";
        }
        else{
            echo "You are failed";
        }
    }
    else{
        echo "Please Enter the marks";
    }
    echo "<br>";

    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $allChar=preg_replace('/\s+/','',$name);
        echo "You have ".strlen($allChar)." character";
    }
    else{
        echo "Please Enter your name also";
    }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .req{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $name=$email= $website=$age=$comment="";
    $errorName=$errorEmail=$errorWeb=$errorAge=$errorComment="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            $errorName="Name is required";
        }
        else{
            $name=test_input($_POST['name']);
        }
        if(empty($_POST['email'])){
            $errorEmail="Email is required";
        }
        else{
            $email=test_input($_POST['email']);
        }
        if(empty($_POST['web'])){
            $errorWeb="Website is required";
        }
        else{
            $website=test_input($_POST['web']);
        }
        if(empty($_POST['age'])){
            $errorAge="Age is required";
        }
        else{
            $age=test_input($_POST['age']);
        }
        if(empty($_POST['comment'])){
            $errorComment="Comment is required";
        }
        else{
            $comment=test_input($_POST['comment']);
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        Name: <input type="text" name="name" id="name"> 
        <span class="req" >* <?php echo $errorName ?> </span>
        <br>
        Email: <input type="text" name="email" id="email"> 
        <span class="req" >* <?php echo $errorEmail ?> </span>
        <br>
        Website: <input type="text" name="web" id="web"> 
        <br>
        Age: <input type="text" name="age" id="age"> 
        <span class="req" >* <?php echo $errorAge ?> </span>
        <br>
        Comment: <textarea name="comment" id="comment" cols="30" rows="5"></textarea><br>
        <input type="submit">
    </form>
    <?php
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Age: $age <br>";
    echo "Comment: $comment <br>";
    ?>
</body>
</html>
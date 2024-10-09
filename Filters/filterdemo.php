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
    $nameError=$emailError=$titleError=$quantError=$addressError=$deliveryError=$paymentError="";
    $name=$email=$title=$quant=$address=$deliveryDate=$payment="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            $nameError="Name is required";
        }
        else{
            $name=test_input($_POST['name']);
        }
        if(empty($_POST['email'])){
            $emailError="Email is required";
        }
        else{
            $email=test_input($_POST['email']);
        }
        if(empty($_POST['title'])){
            $titleError="Title is required";
        }
        else{
            $title=test_input($_POST['title']);
        }
        if(empty($_POST['quant'])){
            $quantError="Quantity is required";
        }
        else{
            $quant=test_input($_POST['quant']);
        }
        if(empty($_POST['address'])){
            $addressError="Address is required";
        }
        else{
            $address=test_input($_POST['address']);
        }
        if(empty($_POST['pdate'])){
            $deliveryError="Date is required";
        }
        else{
            $deliveryDate=test_input($_POST['pdate']);
        }
        if(empty($_POST['payment'])){
            $paymentError="Payment is required";
        }
        else{
            $payment=test_input($_POST['payment']);
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Online BookStore Order Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Customer Name: <input type="text" name="name" id=""> 
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        Email: <input type="email" name="email" id=""> 
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        Book Title: <input type="text" name="title" id=""> 
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        Quantity: <input type="text" name="quant" id=""> 
        <span class="req" class="req">* <?php echo $nameError ?></span>
        <br>
        Shipping Address: <textarea name="address" id="" cols="30" rows="5"></textarea> 
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        PrefferredDate: <input type="date" name="pdate" id=""> 
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        Payment Method: <select name="payment" id="">
            <option value="upi">upi</option>
            <option value="cash">cash</option>
            <option value="creditcard">credit card</option>
        </select>
        <span class="req">* <?php echo $nameError ?></span>
        <br>
        <input type="submit">
    </form>
    <?php
    
    ?>
</body>
</html>
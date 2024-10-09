<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        Customer Name: <input type="text" name="customer_name" id="customer_name" required> <br>
        Date Of Purchase: <input type="date" name="dop" id="dop" required> <br><br>

        Sugar: <input type="checkbox" name="sugar" id="sugar">
        Quantity: <input type="number" max="10" min="0" name="sugar_quant" id="sugar_quant"><br><br>

        Tea: <input type="checkbox" name="tea" id="tea">
        Quantity: <input type="number" max="10" min="0" name="tea_quant" id="tea_quant"><br><br>

        Milk: <input type="checkbox" name="milk" id="milk">
        Quantity: <input type="number" max="10" min="0" name="milk_quant" id="milk_quant"><br><br>

        Wheatflour: <input type="checkbox" name="wheatflour" id="wheatflour">
        Quantity: <input type="number" max="10" min="0" name="wheat_quant" id="wheat_quant"><br><br>

        Biscuit: <input type="checkbox" name="biscuit" id="biscuit">
        Quantity: <input type="number" max="10" min="0" name="biscuit_quant" id="biscuit_quant"><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Set expiration time for cookies to 7 days
        $expiry = time() + (7 * 24 * 60 * 60);

        // Variables for customer details
        $customer_name = trim($_POST['customer_name']);
        $dop = $_POST['dop'];

        // Validation check if no field is empty
        if (empty($customer_name) || empty($dop)) {
            echo "Please fill out all the required fields.";
            exit;
        }

        // Variables to calculate total price
        $total_price = 0;

        // Function to calculate item total if checkbox is checked
        function calculatePrice($item_name, $item_quant)
        {
            if (isset($_POST[$item_name])) {
                $quantity = $_POST[$item_quant];
                $price_per_unit = $_POST[$item_price];

                // Calculate total price for the item
                return $quantity * $price_per_unit;
            }
            return 0;
        }

        // Calculate total prices
        $total_price += calculatePrice("sugar", "sugar_quant");
        $total_price += calculatePrice("tea", "tea_quant");
        $total_price += calculatePrice("milk", "milk_quant");
        $total_price += calculatePrice("wheatflour", "wheat_quant");
        $total_price += calculatePrice("biscuit", "biscuit_quant");

        // Set the cookie for total price
        setcookie("total_price", $total_price, $expiry);

        // Display total price to the customer
        echo "Customer Name: $customer_name <br>";
        echo "Date of Purchase: $dop <br>";
        echo "Total Price: $" . number_format($total_price, 2) . "<br>";
    }
    ?>

</body>

</html>
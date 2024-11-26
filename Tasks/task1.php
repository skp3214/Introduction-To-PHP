<?php
if (isset($_POST['submit'])) {
    $productList = $_POST['products'];
    $productsArray = explode(',', $productList);
    $productsArray = array_map('trim', $productsArray); // Trim whitespace
    sort($productsArray);

    // Read existing products from the file
    $filename = 'products.txt';
    $existingProducts = [];
    if (file_exists($filename)) {
        $existingProducts = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    // Merge and remove duplicates
    $allProducts = array_unique(array_merge($existingProducts, $productsArray));
    sort($allProducts);

    // Write the merged list back to the file
    file_put_contents($filename, implode(PHP_EOL, $allProducts) . PHP_EOL);

    // Display the sorted product list
    echo "<h2>Product List in Alphabetical Order:</h2>";
    echo "<ul>";
    foreach ($productsArray as $product) {
        echo "<li>" . htmlspecialchars($product) . "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <form method="post" action="">
        <label for="products">Enter a comma-separated list of product names:</label><br>
        <input type="text" id="products" name="products" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
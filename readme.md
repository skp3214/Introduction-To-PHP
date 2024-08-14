# Introduction to PHP
[1. Introduction to PHP](#what-is-php)<br>
[2. PHP Data Types](#php-data-types)<br>
[3. Arrays](#arrays)<br>

## What is PHP?

PHP (Hypertext Preprocessor) is a widely-used open-source scripting language primarily designed for web development. It can be embedded into HTML and is often used to create dynamic and interactive web pages. PHP scripts are executed on the server, and the result is returned to the client’s web browser as plain HTML.

## Key Features of PHP

- **Server-Side Scripting:** PHP runs on the server, generating HTML content that is sent to the client’s browser.
- **Database Integration:** PHP can connect to various databases, including MySQL, PostgreSQL, and SQLite, allowing for data storage and retrieval.
- **Cross-Platform:** PHP is compatible with various operating systems, including Windows, macOS, and Linux.
- **Flexibility:** PHP supports a wide range of programming paradigms, including procedural, object-oriented, and functional programming.
- **Easy Integration:** PHP integrates seamlessly with HTML and other web technologies, such as CSS and JavaScript.

## Basic Syntax

PHP scripts are embedded within HTML using `<?php ... ?>` tags. Here’s a simple example of PHP embedded in HTML:

```html
<!DOCTYPE html>
<html>
<head>
    <title>PHP Introduction</title>
</head>
<body>
    <h1>Welcome to PHP!</h1>
    <?php
        // Display a message
        echo "Hello, World!";
    ?>
</body>
</html>
```
## PHP Data Types

In PHP, data types determine the type of data that a variable can hold. PHP is a loosely-typed language, which means variables do not need explicit type declarations. PHP automatically converts data types as needed. However, understanding the available data types is important for writing effective and bug-free code.

### Scalar Data Types

1. **Integer**
   - Represents whole numbers.
   - Example: `42`, `-7`, `0`

   ```php
   <?php
       $age = 25;
       $negativeNumber = -10;
   ?>
   ```

2. **Float (Double)**
   - Represents numbers with decimal points.
   - Example: `3.14`, `-0.001`, `2.71828`

   ```php
   <?php
       $price = 19.99;
       $pi = 3.14159;
   ?>
   ```

3. **String**
   - Represents a sequence of characters enclosed in quotes.
   - Example: `"Hello, World!"`, `'PHP is fun!'`

   ```php
   <?php
       $greeting = "Hello, World!";
       $language = 'PHP';
   ?>
   ```

4. **Boolean**
   - Represents a truth value: `true` or `false`.

   ```php
   <?php
       $isActive = true;
       $isLoggedIn = false;
   ?>
   ```

### Compound Data Types

1. **Array**
   - Represents a collection of values. Arrays can be indexed (numerical) or associative (key-value pairs).

   ```php
   <?php
       // Indexed array
       $colors = array("Red", "Green", "Blue");

       // Associative array
       $person = array(
           "first_name" => "John",
           "last_name" => "Doe",
           "age" => 30
       );
   ?>
   ```

2. **Object**
   - Represents an instance of a class. Objects encapsulate data (properties) and behavior (methods).

   ```php
   <?php
       class Person {
           public $firstName;
           public $lastName;

           public function __construct($firstName, $lastName) {
               $this->firstName = $firstName;
               $this->lastName = $lastName;
           }

           public function getFullName() {
               return $this->firstName . ' ' . $this->lastName;
           }
       }

       $person = new Person("John", "Doe");
       echo $person->getFullName();
   ?>
   ```

### Special Data Types

1. **NULL**
   - Represents a variable with no value or an undefined variable. 

   ```php
   <?php
       $var = NULL;
       $undefinedVar;
   ?>
   ```

2. **Resource**
   - Represents a reference to an external resource, such as a file or database connection. Resources are used for specific operations and are not directly manipulated by PHP code.

   ```php
   <?php
       $file = fopen("example.txt", "r");
       // $file is a resource representing the open file
   ?>
   ```

### Type Casting

You can explicitly convert a variable from one data type to another using type casting.

```php
<?php
    $stringNumber = "123";
    $integerNumber = (int)$stringNumber; // Cast to integer

    $floatNumber = 1.234;
    $integerFromFloat = (int)$floatNumber; // Cast to integer
?>
```

[Back To Top](#introduction-to-php)

## Arrays
### Arrays in PHP

Arrays in PHP are a fundamental data structure used to store multiple values in a single variable. PHP arrays can be indexed (numerical) or associative (key-value pairs). Here’s an overview of arrays and common built-in functions used with them:

#### 1. **Types of Arrays**

- **Indexed Arrays**: Arrays with numeric indices, starting from 0.
  
  ```php
  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  echo $fruits[0]; // Outputs: Apple
  ?>
  ```

- **Associative Arrays**: Arrays with named keys instead of numeric indices.
  
  ```php
  <?php
  $person = array(
      "first_name" => "John",
      "last_name" => "Doe",
      "age" => 30
  );
  echo $person["first_name"]; // Outputs: John
  ?>
  ```

- **Multidimensional Arrays**: Arrays containing other arrays.

  ```php
  <?php
  $matrix = array(
      array(1, 2, 3),
      array(4, 5, 6),
      array(7, 8, 9)
  );
  echo $matrix[1][2]; // Outputs: 6
  ?>
  ```

#### 2. **Common Array Functions**

- **`array()`**: Creates an array.

  ```php
  <?php
  $colors = array("red", "green", "blue");
  ?>
  ```

- **`array_push()`**: Adds one or more elements to the end of an array.

  ```php
  <?php
  $fruits = array("Apple", "Banana");
  array_push($fruits, "Cherry", "Date");
  print_r($fruits); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Date )
  ?>
  ```

- **`array_pop()`**: Removes the last element from an array and returns it.

  ```php
  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  $last = array_pop($fruits);
  echo $last; // Outputs: Cherry
  print_r($fruits); // Outputs: Array ( [0] => Apple [1] => Banana )
  ?>
  ```

- **`array_shift()`**: Removes the first element from an array and returns it.

  ```php
  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  $first = array_shift($fruits);
  echo $first; // Outputs: Apple
  print_r($fruits); // Outputs: Array ( [0] => Banana [1] => Cherry )
  ?>
  ```

- **`array_unshift()`**: Adds one or more elements to the beginning of an array.

  ```php
  <?php
  $fruits = array("Banana", "Cherry");
  array_unshift($fruits, "Apple");
  print_r($fruits); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry )
  ?>
  ```

- **`array_keys()`**: Returns all the keys or a subset of the keys of an array.

  ```php
  <?php
  $person = array("first_name" => "John", "last_name" => "Doe");
  $keys = array_keys($person);
  print_r($keys); // Outputs: Array ( [0] => first_name [1] => last_name )
  ?>
  ```

- **`array_values()`**: Returns all the values of an array.

  ```php
  <?php
  $person = array("first_name" => "John", "last_name" => "Doe");
  $values = array_values($person);
  print_r($values); // Outputs: Array ( [0] => John [1] => Doe )
  ?>
  ```

- **`array_merge()`**: Merges one or more arrays into one.

  ```php
  <?php
  $array1 = array("a" => "red", "b" => "green");
  $array2 = array("c" => "blue", "d" => "yellow");
  $merged = array_merge($array1, $array2);
  print_r($merged); // Outputs: Array ( [a] => red [b] => green [c] => blue [d] => yellow )
  ?>
  ```

- **`array_diff()`**: Compares values of two or more arrays and returns the differences.

  ```php
  <?php
  $array1 = array("a" => "red", "b" => "green", "c" => "blue");
  $array2 = array("a" => "red", "b" => "yellow");
  $diff = array_diff($array1, $array2);
  print_r($diff); // Outputs: Array ( [c] => blue )
  ?>
  ```

- **`array_intersect()`**: Computes the intersection of arrays.

  ```php
  <?php
  $array1 = array("a" => "red", "b" => "green", "c" => "blue");
  $array2 = array("a" => "red", "b" => "yellow");
  $intersect = array_intersect($array1, $array2);
  print_r($intersect); // Outputs: Array ( [a] => red )
  ?>
  ```

- **`sort()`**: Sorts an array in ascending order.

  ```php
  <?php
  $numbers = array(4, 2, 8, 6);
  sort($numbers);
  print_r($numbers); // Outputs: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )
  ?>
  ```

- **`rsort()`**: Sorts an array in descending order.

  ```php
  <?php
  $numbers = array(4, 2, 8, 6);
  rsort($numbers);
  print_r($numbers); // Outputs: Array ( [0] => 8 [1] => 6 [2] => 4 [3] => 2 )
  ?>
  ```

- **`array_reverse()`**: Returns an array with elements in reverse order.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4);
  $reversed = array_reverse($numbers);
  print_r($reversed); // Outputs: Array ( [0] => 4 [1] => 3 [2] => 2 [3] => 1 )
  ?>
  ```

- **`array_slice()`**: Extracts a portion of an array.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4, 5);
  $slice = array_slice($numbers, 2, 2);
  print_r($slice); // Outputs: Array ( [0] => 3 [1] => 4 )
  ?>
  ```

- **`array_splice()`**: Removes and/or replaces elements of an array.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4, 5);
  array_splice($numbers, 2, 2, array(6, 7));
  print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 6 [3] => 7 [4] => 5 )
  ?>
  ```

- **`in_array()`**: Checks if a value exists in an array.

  ```php
  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  if (in_array("Banana", $fruits)) {
      echo "Banana is in the array.";
  }
  ?>
  ```

- **`array_key_exists()`**: Checks if a specific key exists in an array.

  ```php
  <?php
  $person = array("first_name" => "John", "last_name" => "Doe");
  if (array_key_exists("first_name", $person)) {
      echo "First name key exists.";
  }
  ?>
  ```

- **`count()`**: Counts all elements in an array.

  ```php
  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  echo count($fruits); // Outputs: 3
  ?>
  ```

- **`array_sum()`**: Calculates the sum of values in an array.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4);
  echo array_sum($numbers); // Outputs: 10
  ?>
  ```

- **`array_product()`**: Calculates the product of values in an array.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4);
  echo array_product($numbers); // Outputs: 24
  ?>
  ```

- **`array_filter()`**: Filters elements of an array using a callback function.

  ```php
  <?php
  $numbers = array(1, 2, 3, 4, 5);
  $evens = array_filter($numbers, function);


## Classes And  Objects
In PHP, classes and objects are fundamental concepts in object-oriented programming (OOP). They allow you to create reusable, modular code by encapsulating data and behavior into manageable units. Here's an overview of classes and objects in PHP:

### 1. **Classes**

A class is a blueprint for creating objects. It defines properties (attributes) and methods (functions) that the objects created from the class can use.

#### Defining a Class

```php
<?php
class Car {
    // Properties
    public $color;
    public $model;

    // Constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    // Method
    public function displayInfo() {
        return "This car is a " . $this->color . " " . $this->model;
    }
}
?>
```

- **Properties**: Variables defined within a class that represent the state of the object.
- **Methods**: Functions defined within a class that represent the behavior of the object.
- **Constructor**: A special method `__construct()` that is automatically called when an object is created.

### 2. **Objects**

An object is an instance of a class. It represents a specific realization of the class blueprint.

#### Creating and Using Objects

```php
<?php
// Create an instance of the Car class
$myCar = new Car("red", "Toyota");

// Accessing properties
echo $myCar->color; // Outputs: red

// Calling methods
echo $myCar->displayInfo(); // Outputs: This car is a red Toyota
?>
```

### 3. **Visibility**

- **`public`**: Properties and methods can be accessed from anywhere.
- **`private`**: Properties and methods can only be accessed from within the class.
- **`protected`**: Properties and methods can be accessed within the class and by classes derived from it (subclasses).

```php
<?php
class Person {
    public $name;
    private $ssn;

    public function __construct($name, $ssn) {
        $this->name = $name;
        $this->ssn = $ssn;
    }

    public function getSsn() {
        return $this->ssn;
    }
}

$person = new Person("John Doe", "123-45-6789");
echo $person->name; // Outputs: John Doe
echo $person->getSsn(); // Outputs: 123-45-6789
// echo $person->ssn; // Error: Cannot access private property Person::$ssn
?>
```

### 4. **Inheritance**

Inheritance allows a class to use properties and methods of another class. The new class is called the derived (or child) class, and the class it extends is called the base (or parent) class.

```php
<?php
class Vehicle {
    public $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function start() {
        return $this->brand . " vehicle started.";
    }
}

class Car extends Vehicle {
    public $model;

    public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function displayInfo() {
        return "This car is a " . $this->brand . " " . $this->model;
    }
}

$myCar = new Car("Toyota", "Corolla");
echo $myCar->displayInfo(); // Outputs: This car is a Toyota Corolla
echo $myCar->start(); // Outputs: Toyota vehicle started.
?>
```

### 5. **Encapsulation**

Encapsulation is the practice of hiding the internal state and requiring all interaction to be performed through an object's methods. This allows for better control and maintenance of the object's data.

```php
<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
echo $account->getBalance(); // Outputs: 1500
?>
```

### 6. **Static Properties and Methods**

Static properties and methods belong to the class rather than any specific object. They can be accessed without creating an instance of the class.

```php
<?php
class Math {
    public static $pi = 3.14;

    public static function getPi() {
        return self::$pi;
    }
}

echo Math::$pi; // Outputs: 3.14
echo Math::getPi(); // Outputs: 3.14
?>
```

### 7. **Abstract Classes**

An abstract class cannot be instantiated directly and is meant to be extended by other classes. It can contain abstract methods (methods without a body) that must be implemented in the child classes.

```php
<?php
abstract class Shape {
    abstract protected function getArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(5, 10);
echo $rectangle->getArea(); // Outputs: 50
?>
```

### 8. **Interfaces**

Interfaces define a contract that implementing classes must follow. They cannot contain implementation details, only method signatures.

```php
<?php
interface ShapeInterface {
    public function getArea();
}

class Circle implements ShapeInterface {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->getArea(); // Outputs: 78.539816339745
?>
```

### Summary

- **Classes** define the blueprint for objects, encapsulating data and behavior.
- **Objects** are instances of classes, representing specific entities.
- **Visibility** controls access to class properties and methods.
- **Inheritance** allows for creating subclasses that extend the functionality of parent classes.
- **Encapsulation** hides internal state and enforces controlled access through methods.
- **Static properties/methods** belong to the class itself, not instances.
- **Abstract classes** cannot be instantiated and may contain abstract methods.
- **Interfaces** define a contract that implementing classes must adhere to.

Understanding these concepts helps in designing and implementing robust and maintainable PHP applications using object-oriented programming principles.

## Functions
In PHP, functions are essential building blocks of code that allow you to encapsulate logic, reuse code, and improve the readability and maintainability of your programs. Here’s an overview of functions in PHP, including their definitions, types, and common uses:

### **1. Defining Functions**

A function in PHP is defined using the `function` keyword, followed by the function name, parentheses for parameters, and a block of code enclosed in curly braces.

```php
function sayHello() {
    echo "Hello, World!";
}
```

### **2. Calling Functions**

You call a function by using its name followed by parentheses.

```php
sayHello(); // Output: Hello, World!
```

### **3. Function Parameters**

Functions can accept parameters, which are values passed to the function when it is called. Parameters are defined within the parentheses.

```php
function greet($name) {
    echo "Hello, " . $name;
}

greet("Alice"); // Output: Hello, Alice
```

### **4. Returning Values**

Functions can return values using the `return` keyword. This allows you to output a result from the function.

```php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo $result; // Output: 8
```

### **5. Default Parameters**

You can set default values for function parameters. These values are used if no argument is provided for that parameter.

```php
function multiply($a, $b = 1) {
    return $a * $b;
}

echo multiply(5);    // Output: 5 (using default value 1 for $b)
echo multiply(5, 2); // Output: 10
```

### **6. Variable-Length Argument Lists**

PHP functions can accept a variable number of arguments using `...` (variadic) syntax.

```php
function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4); // Output: 10
```

### **7. Anonymous Functions**

Also known as closures or lambda functions, these are functions without a name and are often used for short-term tasks or as arguments to other functions.

```php
$square = function($n) {
    return $n * $n;
};

echo $square(4); // Output: 16
```

### **8. Function Scope**

PHP functions have their own local scope. Variables defined inside a function are not accessible outside the function.

```php
function testScope() {
    $localVar = "I'm local";
    echo $localVar;
}

testScope(); // Output: I'm local
// echo $localVar; // This would cause an error
```

### **9. Global Variables**

To access global variables inside a function, you need to use the `global` keyword.

```php
$globalVar = "I'm global";

function showGlobal() {
    global $globalVar;
    echo $globalVar;
}

showGlobal(); // Output: I'm global
```

### **10. Static Variables**

Static variables retain their value between function calls.

```php
function counter() {
    static $count = 0;
    $count++;
    echo $count;
}

counter(); // Output: 1
counter(); // Output: 2
```

### **11. Function Overloading**

PHP does not support function overloading in the same way as some other languages. Instead, you can use default arguments and variable-length argument lists to achieve similar functionality.

### **12. Recursive Functions**

A recursive function is one that calls itself. This is useful for problems that can be broken down into smaller, similar problems.

```php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5); // Output: 120
```

### **13. Function References**

Functions in PHP are first-class citizens, meaning they can be passed as arguments and returned from other functions.

```php
function operate($a, $b, $operation) {
    return $operation($a, $b);
}

$addition = function($x, $y) {
    return $x + $y;
};

echo operate(5, 3, $addition); // Output: 8
```

### **14. Built-in Functions**

PHP comes with a vast number of built-in functions for various tasks, such as string manipulation, array handling, and file operations.

```php
$length = strlen("Hello, World!"); // Output: 13
```


Functions in PHP are versatile and essential for creating modular, reusable code. They help in breaking down complex problems into smaller, manageable parts.
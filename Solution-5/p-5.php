<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 90%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Simple Calculator</h1>

    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1"><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2"><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = ($num2 != 0) ? $num1 / $num2 : "Division by zero is not allowed.";

            echo "<h2>Results:</h2>";
            echo "Sum: $sum <br>";
            echo "Difference: $difference <br>";
            echo "Product: $product <br>";
            echo "Quotient: $quotient <br>";
        } else {
            echo "Please enter valid numeric values for both numbers.";
        }
    }
    ?>
</body>

</html>
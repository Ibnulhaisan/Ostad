<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h2>Number Comparison Tool</h2>

    <?php

    $number1 = $number2 = $result = '';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        
        $result = ($number1 > $number2) ? "The larger number is $number1." : (($number2 > $number1) ? "The larger number is $number2." : "Both numbers are equal.");
    }
    ?>

    <form method="POST" action="comparison_tool.php">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required><br><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    if (!empty($result)) {
        echo "<p>$result</p>";
    }
    ?>

</body>
</html>

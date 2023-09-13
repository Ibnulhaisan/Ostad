<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>

    <?php

    $temperature = 20; 


    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } elseif ($temperature > 15) {
        $message = "It's warm.";
    }
    ?>

    <p>The current temperature is <?php echo $temperature; ?> degrees Celsius.</p>
    <p><?php echo $message; ?></p>
</body>
</html>

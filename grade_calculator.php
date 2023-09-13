<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>

    <?php
   
    function calculateGrade($average) {
        if ($average >= 80) {
            return 'A+';
        } elseif ($average >= 70) {
            return 'A';
        } elseif ($average >= 60) {
            return 'B';
        } elseif ($average >= 50) {
            return 'C';
        } else {
            return 'F';
        }
    }

   
    $score1 = $score2 = $score3 = $average = $grade = '';

  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

      
        $average = ($score1 + $score2 + $score3) / 3;

      
        $grade = calculateGrade($average);
    }
    ?>

    <form method="POST" action="grade_calculator.php">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" value="<?php echo $score1; ?>" required><br><br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" value="<?php echo $score2; ?>" required><br><br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" value="<?php echo $score3; ?>" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
   
    if (!empty($grade)) {
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>

</body>
</html>

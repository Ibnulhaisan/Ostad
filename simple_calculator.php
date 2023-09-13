<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <form action="simple_calculator.php" method="post">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
      <option>None</option>
      <option>Add</option>
      <option>Subtract</option>
      <option>Multiply</option>
      <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
  </form>
  <p>The answer is:</p>
  <?php
    if (isset($_POST['submit'])) {
      $result1 = $_POST['num1'];
      $result2 = $_POST['num2'];
      $operator = $_POST['operator'];
      switch ($operator) {
        case "None":
          echo "You need to select a method!";
          break;
        case "Add":
          echo $result1 + $result2;
          break;
        case "Subtract":
          echo $result1 - $result2;
          break;
        case "Multiply":
          echo $result1 * $result2;
          break;
        case "Divide":
          echo $result1 / $result2;
          break;
      }
    }
  ?>
</body>
</html>
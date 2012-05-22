<?php

$num1 = 0;
$num2 = 0;
$func = '+';
$answer = 0;

if (isset($_POST['num1'])) {
  $num1 = $_POST['num1'];
}

if (isset($_POST['num2'])) {
  $num2 = $_POST['num2'];
}

if (isset($_POST['func'])) {
  $func = $_POST['func'];
}


switch ($func) {
  case '-':
    $answer = $num1 - $num2;
    break;
  case '*':
    $answer = $num1 * $num2;
    break;
  case '/':
    $answer = $num1 / $num2;
    break;
  case '+':
  default:
    $answer = $num1 + $num2;
    break;
}

$total = $answer * 1.13;
?>



<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title> Money Calculator Form </title>
	<link href="css/general.css" rel="stylesheet">
</head>
 <h1>Money Calculator Form </h1>

		 <h2>Calculative Operations</h2>

<body>



<form action="index.php" method="post">
	
  <label for="num1">Number First</label>
  <input type="numbessr" id="num1" name="num1">
	

  <label for="num2">Number Second</label>
  <input type="number" id="num2" name="num2">
	
	
	

  <label for="func" class="function">Function</label>
  <select id="func" name="func">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>

  <button type="submit" class="button">Calculate Value</button>



</form>

  <strong>$<?php echo number_format($total, 2); ?></strong>



</body>
</html>

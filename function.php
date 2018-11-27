<?php 
$n1 = 20;
$n2 = 30;
function add($n1, $n2)
{
	$sum = $n1 +$n2;
	echo "Addition of two numbers $n1 and $n2 is $sum";
}
function sub($n1, $n2)
{
	$sub = $n1 - $n2;
	echo "Subtraction of two numbers $n1 and $n2 is $sub";
} 
function multiply($n1, $n2)
{
	$product = $n1*$n2;
	echo "Product of two numbers $n1 and $n2 is $product";
}
function division($n1, $n2)
{
	$divide = $n1/$n2;
	echo "Division of two numbers $n1 and $n2 is $divide";
}
if (isset($_POST['result'])) 
{
	$n1 = $_POST['first'];
	$n2 = $_POST['second'];
	if (empty($n1) && empty($n2)) {
		echo "Please enter 1st and 2nd number";				
	}
	elseif (empty($n1)) {
		echo "Please enter 1st number";
	}
	elseif (empty($n2)) {
		echo "Please enter 2nd number";
	}
	else{
		$ch = $_POST['choice'];
		if ($ch == 'add') {
			add($n1, $n2);
		}
		elseif ($ch=='subtract') {
			sub($n1, $n2);
		}
		elseif ($ch == 'multiply') {
			multiply($n1, $n2);
		}
		elseif ($ch == 'divide') {
			division($n1, $n2);
		}
		else{
			echo "value not passed";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Operations using function</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Choose the operation to perform</legend>
			First number: <input type="number" name="first" placeholder="First number"><br/>
			Second number: <input type="number" name="second" placeholder="Second number"><br/>
			<input type="radio" name="choice" value="add">Add
			<input type="radio" name="choice" value="subtract">Subtract
			<input type="radio" name="choice" value="multiply">Multiply
			<input type="radio" name="choice" value="divide">Divide<br/>
			<input type="submit" name="result"><br/>
		</fieldset>
	</form>
</body>
</html>
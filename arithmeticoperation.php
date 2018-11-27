<?php

if(isset($_POST['submit']))
{
	$input1=$_POST['number1'];
	$input2=$_POST['number2'];
	if(empty($input1)&&empty($input2))
	{
		echo "<div class='error'>";
		echo "Please enter both the numbers </br>";
		echo "</div>";

	}
	elseif(empty($input1))
	{
		echo "<div class='error'>";
		echo "Please enter the first number </br>";
		echo "</div>";
	}
	elseif(empty($input2))
	{
		echo "<div class='error'>";
		echo "Please enter the second number </br>";
		echo "</div>";
	}
	else
	{
	$sum=$input1+$input2;
	$multiplication=$input1*$input2;
	$division=$input1/$input2;
	$difference=$input1-$input2;

	echo "The sum of $input1 and $input2 is $sum";
	echo "<br/>";
	echo "The multiplication of $input1 and $input2 is $multiplication";
	echo "<br/>";
	echo "The division of $input1 by $input2 is $division";
	echo "<br/>";
	echo "The subtraction of $input1 and $input2 is $difference";
	echo "<br/>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Form </title>
</head>
<body>
	<form method="POST" action="" name="userInput">
	<fieldset>
	<legend>Arithmetic Operation</legend>
	<input type="text" name="number1">
	<br>
	<br>
	<input type="text" name="number2">
	<input type="submit" name="submit" value="SUBMIT">
	</fieldset>
	</form>


</body>
</html>


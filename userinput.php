<?php

//taking user input

if(isset($_POST['submit']))
{
	$input=$_POST['number'];
	if($input%2==0)
	{
		echo "The number $input is EVEN";

	}
	else
	{
		echo "The number $input is ODD";
	}
	echo "<br/>";
	echo "Submit Pressed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Input | Odd Even Number </title>
</head>
<body>
	<form method="POST" action="" name="userInput">
	<fieldset>
	<legend>FIND ODD EVEN</legend>
	<input type="text" name="number">
	<input type="submit" name="submit" value="result">
	</fieldset>
	</form>


</body>
</html>


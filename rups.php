<?php
$sport1='volley';
$name='Rupesh';
$name.='Bhasima';
echo "I am {$name} and I play {$sport1}ball";
?>

<?php
echo "<br>";
$short_string="this string has 29 character";
print("It does have" .strlen($short_string)."character");
?>

<?php
echo "<br>";
$twister="Peter price Piper picked a peck of pickled peppers";
print("Location of 'p' is ".strpos($twister,'p').'<br>');
?>

<!--strrev : reverse the string -->

<?php
$string1="Hello World";
$string2="hello world";
$result=strcmp($string1,$string2);
if($result!=0)
{
	echo "the strings do not match";
}
else
{
	echo "the strings match";
}
?>

<?php
echo "<br>";
$string1="Hello World";
$string2="hello world,thimi";
$result=strcasecmp($string1,$string2);
if($result!=0)
{
	echo "the strings do not match";
}
else
{
	echo "the strings match";
}


/*str to lower
//str to upper
//ucfirst : uppercase first
//lcfirst : lowercase first
//uc words : every letter ko first word lai capital garxa
//wordwrap*/
?>

<?php
echo "<br>";
$myString="Develop PHP is the best place for beginners to learn PHP.";
$myString=wordwrap($myString,24,"<br/>");
echo $myString;
echo "<hr/>";
$myString="Wrap long words hahahahahahahahahaha";
$myString=wordwrap($myString,24,"<br/>",true);
echo $myString; 
?>

<?php
echo "<br>";
$myString="only going to the zoo";
$myString=trim($myString,"o");
echo $myString;
echo "</hr>";
echo "<br>";
$myString=trim($myString,"noz e");
echo $myString;
?>

<?php
echo "<br>";
$string1="In the world";
$string2="the world will end.";
$myFile=fopen("myfile.txt","w");
$formatted=fprintf($myFile,"%s%04d%s",$string1,date("Y"),$string2);
echo $formatted;
?>

<?php
echo "<br>";
$myString="This will\n add break tags where\n new lines char are.";
$newString=nl2br($myString);
echo $newString;
?>

<?php
echo "<br>";
$myString="Joe's BBQ Shack";
$newString=addslashes($myString);
echo "$newString";
?>

<?php
echo "<br>";
$myString="Joe's BBQ Shack";
$newString=addslashes($myString);
$myString=stripslashes($myString);
echo $myString;
?>

<?php
echo "<br>";
$myString="rupesh57323";
$hashedString=md5($myString);
echo $hashedString;
?>

<?php
echo "<br>";
?>
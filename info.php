<?php
/*$name = "Pragyaa";
$name = "Sapkota";
 echo $name;
 //pinfo

 echo"<br>";
 $num1 = 20;
 $num2 = 40;
 $sum= $num1+$num2;
 echo "The sum of $num1 and $num2 is $sum";
*/


 /*
 $qty=5;
 $price=10000;
 $amt=$qty*$price;
 echo "Rs".number_format($amt,2)
*/
 
//single quote le number value parse gardaina(jasto xa testai display hunxa)
 $num=5;
 /*echo 'I got'.$num.'in Physics';
 echo Hello;
 */

 /*to bold any particular word
echo "I got $num on <b>\"PHYSICS\"</b>";
echo "<br>";
*/

/*clearing the variable
unset($num);
echo "I got $num on <b>\"PHYSICS\"</b>";
*/

/*odd or even

if($num%2==0){
	echo "Even";

}
else{
	echo "Odd";
}
*/

/*multiplication table

for($i=1;$i<=10;$i++){
	echo $num."*".$i."=".$num*$i."<br>";
}
*/

/*printing with table
echo "<table border=1 cellpadding=4 cellspacing=4 width=300px";
$i=1;
while($i<=10)
{
	$result=$num*$i;
	echo "<tr><td>$num x $i = $result";
	$i++;

}
echo "</table>";
*/


//using date function

//setting the time zone

date_default_timezone_set('Asia/Kathmandu');
$today= date('Y/m/d, h:i:s a');

echo $today;

echo "<br/>";
echo "Australia time is ";
date_default_timezone_set('Australia/Melbourne');
echo date('Y/m/d, h:i:s a');
echo "<br/>";
date_default_timezone_set('Asia/Kathmandu');
echo date('l, dS F Y, h:i:s a');


?>



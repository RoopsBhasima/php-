<?php
//simple array

$cart_array=array("Wonder Bread","Pickles","Moyannaise","Lettuce");

echo $cart_array[0];
echo "<br/>";
echo $cart_array[1];
echo "<br/>";
echo $cart_array[2];
echo "<br/>";
echo $cart_array[3];
echo "<br/><hr/>";
echo serialize($cart_array);
echo "<br/>";
print_r($cart_array);
echo gettype($cart_array);
?>

<?php
echo "<br/>";
//create an associative array that is a cart holding items and prices
$cart_array = array('Cereals' =>"5.00" , 'Bananas' =>"3.50" , "Lettuce" =>"2.40" , "Coffee Beans" => "5.67" , "Onion" => "6.97" , "Tomato" => "4.59");
//and here is how you can input any key's value you choose
echo "Bananas cost$".$cart_array["Bananas"] . "at this store";
echo "<hr/>";
foreach($cart_array as $i=>$v)
	echo "$i cost $v at this store <br>" ;
?>

<?php
echo "<br/>";
//create multidimensional array that holds memeber details from our site
$members=array("member1"=>array("name"=>"Uttam","zodiac"=>"Libra","country"=>"China"),"member2"=>array("name"=>"Salim","zodiac"=>"Pisces","country"=>"Germany"),"member3"=>array("name"=>"Sanam","zodiac"=>"Capricorn","country"=>"Myanmar"));
//echo $members["member2"]["name"];
echo "<hr/>";
foreach ($members as $m => $v)
{
	echo "$m info is given below<br/>";
    foreach ($v as $i => $va)
    {
    echo "$i=$va<br/>";
    }
    echo "<hr/>";
}
?>

<?php
$myarray=array("Europe","Asia","Africa","Australia");
next($myarray);//advance internal pointer
$current=current($myarray);//get current element
echo $current;
echo "<hr/>";
?>

<?php
$myarray=array("Joe","Edward","Bella","Thomas","Minions");
list($u1,$u2,$u3,$u4,$u5)=$myarray;
echo "$u3 and $u5 went to the Cameroon.";
echo "<hr/>";
?>
<?php
echo "Hello World";
echo "<br>";
//1
function sum ($n1, $n2){
	return $n1  + $n2;
}
echo sum(3, 6);
echo "<br>";

//2
function num ($n){
	if ($n % 2 == 0){
		return "$n is even number";
	}
	else{
		return "$n is odd number";
	}
}
echo num(3);
echo "<br>";
echo num(6);
echo "<br>";

//3
$nums= array(1, 4, 5, 9, 8, 7);
foreach ($nums as $num){
	echo $num . " ";
}
echo "<br>";

//4
function average ($array){
	return "Average = ". array_sum($array)/count($array);
}
echo average([1, 4, 5, 10]);
echo "<br>";

//5
function max_num ($array){
	return "Max Number in Array = ". max($array);
}
echo max_num([1, 4, 5, 10]);
echo "<br>";

//6
function celsiusToFahrenheit($celsius){
	return($celsius * 9/5) + 32;
}
echo celsiusToFahrenheit(25);
echo "<br>";

//7
function numEven($n){
	$result = 0;
	for($i=1; $i < $n; $i++){
		$result +=2;
	}
	return $result;
}
echo numEven(3);
echo "<br>";

//8
function oppesiteNum($n){
	return -1 * $n;
}
echo oppesiteNum(9);
echo "<br>";
echo oppesiteNum(-9);
echo "<br>";

//9
function smallestNumInArray($arr){
	for ($i=0; $i < count($arr) ; $i++) { 
		sort($arr);
	}
	return $arr[0];
}
echo smallestNumInArray([3, 7, 5, 1, 9]);
echo "<br>";


//10
function alph($string){
	if (ctype_alpha($string)){
		return "all types is string";
	}
	else{
		return "all types is not string";
	} ;
}
echo alph("Hello");
echo "<br>";

//11 
function sumTo($n){
	return array_sum(range(1, $n));
}
echo sumTo(10);
echo "<br>";

//12
function arr_reverse($string){
	return strrev($string);
}
echo arr_reverse("Safa");
echo "<br>";

//13
/*function duplicates($array){
	$duplicate = $array;
	$counts = array_count_values($array);
	foreach ($counts as $value => $count){
		if($count > 1){
			$duplicate[] = $value;
		}
	}
	return $duplicate;
}
print_r duplicates([1, 2, 4, 6, 3, 2, 9, 1]);
echo "<br>";

//14
function unique($array){
	return array_unique($array);
}
print_r unique([1, 4, 3, 8, 2, 4, 6, 1, 6]);
echo "<br>";*/

//15
/*function stringToArray($string){
	return explode(",", $string);
}
echo stringToArray("Khalid");
echo "<br>";*/

//16
function arrayToString($array){
	return implode(",", $array);
}
echo arrayToString(["Khalid", "Safa", "Muna", "Noor"]);
echo "<br>";

//17
function count_words($string){
	str_word_count($string);
}
echo count_words("Hello Safa, How are you?");
echo "<br>";

//18
function strTolower1($string){
	strtolower($string);
}
echo strTolower1("Hello Safa, How are you?");
echo "<br>";

//19
function first_capital($string){
	ucwords($string);
}
echo first_capital("hello safa");
echo "<br>";

//20
function contain ($array, $n){
	if (in_array($n, $array)){
		return "$n is in array";
	}
	else{
		return "$n is not in array";
	}
}
echo contain([1, 3, 2, 7, 0], 3);
echo "<br>";

//21
/*function array_sqr($array){
	$sqr = [];
	foreach ($array as $num){
		$num *= $num;
		$sqr[] = $num;
	}
	return $sqr;
}
print_r array_sqr([3, 2, 5, 6]);
echo "<br>";*/

//22
function century($year){
	if ($year % 100 == 0){
		return intdiv($year, 100);
	}
	else{
		return intdiv($year, 100) + 1;
	}
}
echo century(1919);
echo "<br>";

//23
function division_by_x_and_y($n, $x, $y){
	if($n % $x == 0 && $n % $y == 0){
		return "$n divison by $x  and divison by $y";
	}
	else if($n % $x == 0 && $n % $y != 0){
		return "$n divison by $x  but not divison by $y";
	}
	else if($n % $x != 0 && $n % $y == 0){
		return "$n not divison by $x  but divison by $y";
	}
	else{
		return "$n not divison by $x  and not divison by $y";
	}
}
echo division_by_x_and_y(20,4 ,3);
echo "<br>";

//24
function remove_first_last_char($str){
	$result = "";
	for($i= 1; $i < strlen($str)-1; $i++){
		$result .= $str[$i];
	}
	return $result;
}
echo remove_first_last_char("Safa");
echo "<br>";

//25
function repeat_string($n, $str){
	$result = "";
	for($i= 0; $i < $n; $i++){
		$result .= $str;
	}
	return $result;
}
echo repeat_string(3, "Safa");
echo "<br>";

//26
function remove_space($str){
	$result = "";
	for($i= 0; $i < strlen($str); $i++){
		if ($str[$i] != " "){
			$result .= $str[$i];
		}
		
	}
	return $result;
}
echo remove_space(" S af a  ");
echo "<br>";

//27
function char_count($char, $str){
	$result = 0;
	for($i= 0; $i < strlen($str); $i++){
		if ($str[$i] == $char){
			$result += 1;
		}
		
	}
	return $result;
}
echo char_count("a", "safa");
echo "<br>";

//28
function timeInMlliSecond($h, $m, $s){
	$second = 1000;
	$minute = 60 * $second;
	$hour = 60 * $minute;
	return ($h * $hour) + ($m * $minute) + ($s * $second);
}
echo timeInMlliSecond(1, 30, 8);
echo "<br>";

//29
function negative_num($n){
	if($n > 0){
		return -$n;
	}
	else{
		return $n;
	}
}
echo negative_num(5);
echo "<br>";

//30
function swap_nums($n1, $n2){
	$temp = $n1;
	$n1 = $n2;
	$n2 = $temp;
	return "$n1  $n2";
}
echo swap_nums(5, 9);
echo "<br>";
?>




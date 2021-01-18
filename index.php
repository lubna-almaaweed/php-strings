<?php

// Q1 
//a
$q = 'QUESTION 1 (A) ';
$str = 'Welcome To Backend Group1';
$str = strtoupper($str);
echo "$q.<br>.$str.<br>.<br>";
// b
$q = 'QUESTION 1 (B)';
$str = strtolower($str);
echo "$q.<br>.$str.<br>.<br>";
//c
$q = 'QUESTION 1 (C)';
$str= ucfirst($str);
echo "$q.<br>.$str.<br>.<br>";
//d
$q = 'QUESTION 1 (D)';
$str= ucwords($str);
echo "$q.<br>.$str.<br>.<br>";

//Q2
$q = 'QUESTION 2';
$str1= '082307'; 
echo $q."<br>";
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n"."<br>.<br>";

//Q3
$q = 'QUESTION 3';
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo $q."<br>".'The specific word is present.'."<br>.<br>";
 }
else
 {
    echo $q."<br>".'The specific word is not present.'."<br>.<br>";
 }

//Q4
$q = 'QUESTION 4';
$path = 'www.example.com/public_html/index.php';
$name = substr(strrchr($path, "/"), 1);
echo $q."<br>".$name."\n"."<br>.<br>";

//Q5
$q = 'QUESTION 5';
$mailid  = 'Orange@example.com';
$user = strstr($mailid, '@', true);
echo $q."<br>".$user."\n"."<br>.<br>";

//Q6
$q = 'QUESTION 6';
$str = 'Orange@example.com';
echo $q."<br>".substr($str, -3)."\n"."<br>.<br>";

//Q7
$q = 'QUESTION 7';
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo $q."<br>".password_generate(7)."\n"."<br>.<br>";

//Q8
$q = 'QUESTION 8';
$str = 'the quick brown fox jumps over the lazy dog.';
echo $q."<br>".preg_replace('/the/', 'That', $str, 1)."\n"."<br>.<br>";

//Q9
$q = 'QUESTION 9';
$str1 = 'football';
$str2 = 'footboll';
$place = strspn($str1 ^ $str2, "\0");
printf ($q."<br>".'First difference between two strings at position %d: "%s" vs "%s"',
$place, $str1[$place], $str2[$place]);
printf("\n");
echo "<br>.<br>";

//Q10
$q = 'QUESTION 10';
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
echo $q."<br>";
var_dump($arra1);
echo "<br>.<br>";

//Q11
$q = 'QUESTION 11';
$cha = 'a';
$cha2 = ++$cha; 
if (strlen($cha2) > 1) 
{
 $cha2 = $cha2[0];
 }
echo $q."<br>".$cha2."\n"."<br>.<br>";

//Q12
$q = 'QUESTION 12';
$sub_string = 'orange@';
$str = 'orange@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $q."<br>".$str."\n"."<br>.<br>";

//Q13
$q = 'QUESTION 13';
$string = 'The brown fox';
$insert ='quick';
$place = 4;
$statement = substr_replace($string, $insert.' ', $place, 0);
echo $q."<br>".$statement."\n"."<br>.<br>";

//Q14
$q = 'QUESTION 14 ';
$str ="The quick brown fox";
$result =explode(" ", $str);;
echo $q."<br>".$result[0]."<br>.<br>";

//Q15
$q = 'QUESTION 15';
$x = '000547023.24';
$str = ltrim($x, '0');
echo $q."<br>".$str."\n"."<br>.<br>";

//Q16
$q = 'QUESTION 16';
$str = 'The quick brown fox jumps over the lazy dog';
echo $q."<br>".str_replace("fox", " ", $str)."\n"."<br>.<br>";

//Q17
$q = 'QUESTION 17';
$str = 'The quick brown fox jumps over the lazy dog///';
echo $q."<br>".rtrim($str, '/')."\n"."<br>.<br>";

//Q18
$q = 'QUESTION 18';
$url = 'http://www.example.com/5478631';
echo $q."<br>".substr($url, strrpos($url, '/' )+1)."\n"."<br>.<br>";

//Q19
$q = 'QUESTION 19';
$str = '\"\1+2/3*2:2-3/4*3';
echo $q."<br>".str_replace(str_split('\\/:*?"<>|+-'), ' ', $str)."\n","<br>.<br>";

//Q20
$q = 'QUESTION 20';
$string = 'The quick brown fox jumps over the lazy dog';
echo $q."<br>".implode(' ', array_slice(explode(' ', $string), 0, 5))."\n"."<br>.<br>";

//Q21
$q = 'QUESTION 21';
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $q."<br>".$x."\n"."<br>.<br>";
  }

//Q22
$q = 'QUESTION 22';
echo $q."<br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x)."<br>";


?>
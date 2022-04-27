<?php

// 1.	Write a PHP script to check if the inserted number is a prime number 

// Sample Input:  3
// Expected Output: 3 is a prime number 


function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n % $x == 0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";


// 2.	Write a PHP script to reverse a string 

// Sample Input:  remove
// Expected Output: evomer
echo "<br>" . "<br>";

function Reverse($str){
    return strrev($str);
}
  
$str = "Sujoud Mohammad";
echo Reverse($str);

// 3.	 Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 
echo "<br>" . "<br>";

function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z'))
           {
      return false;
           }
         }
      return true;
       }
var_dump(is_str_lowercase('Sujoud'));

###########  another solution EX 3 :   ##########
echo "<br>";

function is_lower($str){

    if (ctype_lower($str)) { 
        echo "Yes" . "<br>"; 
    } else { 
        echo "No" . "<br>"; 
    } 
}

is_lower('sujoud');
is_lower('suJoud');


#### EX-4 same EX-5 ########
// 4.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 
echo "<br>" . "<br>";

function swap_num ($a , $b){

echo "The number before swapping is :";
echo "Number a =".$a." and b=".$b . "<br>";

$temp = $a;
$a = $b;
$b = $temp;
 
echo "The number after swapping is :";
echo "Number a =".$a." and b=".$b." ";

}
swap_num (100,250);


// 6.	Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.

// Sample Input:  407
// Expected Output: 407 is Armstrong Number 
echo "<br>" . "<br>";


function armstrong_number($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
      $sum = $sum + pow((string)$num{$i},$sl);
    }
    if ((string)$sum == (string)$num) {
      return "True";
    } else {
      return "False";
    }
  }
  echo "Is 21 Armstrong number? ".armstrong_number(407)."<br>";
  echo "Is 4587 Armstrong number? ".armstrong_number(4587);"";


//   7.	Write a PHP function that checks whether a passed string is a palindrome or not?
//   Sample Input:  Eva, can I see bees in a cave?
//   Expected Output: Yes it is a palindrome 
echo "<br>" . "<br>";

function check_palindrome($string) 
{
    $string = str_replace(' ', '', $string);
    $string = str_replace(',', '', $string);
    $string = str_replace('?', '', $string);
    $string = strtolower($string);

  if ($string == strrev($string))
     echo "Yes it is a palindrome ";
  else
     echo "No it is not a palindrome ";
}

check_palindrome('Sujoud'); 
echo "<br>";
check_palindrome('Eva, can I see bees in a cave?');


  
// 8.	Write a PHP function to remove duplicates from an array ?

// Sample Input:  
// $array1 = array(2, 4, 7, 4, 8, 4);
// Expected Output:
// $array1 = array(2, 4, 7, 8);

echo "<br>" . "<br>";

$arr=['sujoud','sara','ahmad','sara','mohammad','sujoud'];
echo "Array befor remove duplicates";
print_r( $arr );

echo "<br>" . "<br>";

echo "Array after remove duplicates";
print_r( array_unique($arr));




echo "<h1>THE END TASK :) </h1>";
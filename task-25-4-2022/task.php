<!-- 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->

<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2013;
   year_check($my_year);
   echo "<br>";


//  2.	Write a PHP script to check the season depending on the inserted 
// temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’ 
$temp = 27;
    if ($temp <= 20)
       echo "It is a winter".'<br>' ;
    else if ($temp > 20 )
    echo "It is a summer".'<br>';

// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same,
// then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’
    
$x = 2;
$y = 2;
if ($x == $y){
    echo ($x + $y) *3 .'<br>';
} else {
    echo $x + $y .'<br>';
}


// 4.   Write PHP to check if the sum of the two given numbers equals 30, if the condition is true
//  the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

$num1 = 10;
$num2 = 10;
if (($num1+$num2) == 30) {
    echo $num1 + $num2 .'<br>';
}
else{
    echo 'false'.'<br>';
}

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

$num = 20;
if ( $num % 3 == 0 &&  $num > 0)
   echo  $num . " " . "is a multiple of 3" .'<br>';
else 
echo 'false'.'<br>';

// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’
$num = 25;
if ( $num >= 20  &&  $num <= 50)
   echo  'True' .'<br>';
else 
echo 'false'.'<br>';

// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

$x = 1;
$y = 5;
$z = 9;
if ($x > $y && $x > $z)
    echo  $x .'<br>';
    else if ( $y > $x && $y > $z )
    echo  $y  .'<br>';
    else if ( $z > $x && $z > $y )
    echo  $z  .'<br>';
    else 
    echo 'numbers is equal '  .'<br>';
 

// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
#######################
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit


$units=100;

if($units>250) {
    echo $units*7.5;
}

if($units>200) {
 echo $units*6.2;
 }

 if($units>100) {
     echo $units*5;
 }

 if($units>0) {
 echo $units*2.5; 
 }

 else {
     echo 'Wrong Entry!';
 }

echo "<br>";

    
    

// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

$age = 15;
if ( $age >=18 )
   echo  'is  eligible to vote' .'<br>';
else if  ( $age < 18 )
echo 'is no eligible to vote'.'<br>';


// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

$num = -60;
if ( $num < 0)
   echo  $num .' is negative' .'<br>';
else if ( $num > 0)
echo $num .'is positive'.'<br>';
else if ( $num = 0)
echo $num. 'is zero'.'<br>';



// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

$num1 =10;
$num2 = 50;
$operator  = '+' ;
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case '+' :
           $result = $num1 + $num2;
            break;
        case '-' :
           $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
    }
    echo $result .'<br>' ;
}


// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

$grade1 = 97;
$grade2 = 85;
$grade3 = 97;
$grade4 = 99;
$avg = ($grade1 + $grade2+ $grade3 +$grade4)/4 ;
if ( $avg <= 60)
echo  'Grade :  F' .'<br>';
else if ( $avg<=70 && $avg >=60 )
echo 'Grade :  D'.'<br>';
else if ( $avg<=80 && $avg >=70 )
echo 'Grade : C'.'<br>';
else if ( $avg<=90 && $avg >=80 )
echo 'Grade : B'.'<br>';
else if ( $avg<=100 && $avg >=90 )
echo 'Grade : A'.'<br>';

<?php


// 1.	**  Required ** $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// •	green
// •	red
// •	white

$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";


// 2.	**  Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
//  "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
//   "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}

echo "<br>";

// 3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";


// 4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange
echo "<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val" . "<br>";
}


// 8.	**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
echo "<br>";


$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) . ". The longest array length is " . max($new_array).'.';




 

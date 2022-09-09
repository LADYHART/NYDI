<?php 
/*
 *  PHP function 
 *  how to define it 
 *  how to call a function
 *  call by value & call by reference
 * 
 */


$a = 16;
$b = 2;

/*
 *  find a value of 16^2  (^ power sup-script)
 */
/*
 * defination of function
 * 
 *  function function_user_define_name ( function_parameter ){
 *  
 *  
 *  	// function_body
 *  
 *    // return (optional)
 *  }
 * 
 */
/*
 * defination a 'Power' function  
 */
function Power($a, $b){
	$s = 1;
	for($i=1; $i <= $b; $i++) { $s = $s * $a;}
	return $s;
}


/*
*  call a function
*/

$a = 99;
$b = 4;

$c = power($a, $b);
echo $c;

/*
 * defination a function with 3 argument
 */
function addition($a, $b, $c){
	return $a + b + $c;
}

/*
 * defination a function for concat a string with prefix, surfix
 */
function my_concat($str1, $str2){
	$prefix = '<code style="font-size: 86.66%; border: 1px solid black;     padding: 15px;">';
	$surfix = '</code>';
	return $prefix . $str1 . ' ' . $str2 . $surfix; 
}

/*
 *  call the function
 */
echo my_concat("int main(void) {", " // your code here }");




?>
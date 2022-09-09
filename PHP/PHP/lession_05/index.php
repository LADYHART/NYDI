<?php 
/*
 * count() generic
 * 
 * strlen() // find a length string
 * */
$f = "Hello world!. How are you?";
//echo $f;
//echo  strlen($f);

/*
 * strrev()
 * str_word_count()
 * str_replace()
 */

/*
 *  strrev() // to Reverse a along side
 */

//echo $f, '&nbsp;&nbsp;&nbsp;&nbsp;', strrev($f);
/*
 *  str_word_count() // to count a all word
 */
//echo str_word_count($f);

/*
 *  str_replace() //  to replace a string inside a string buffer
 */
//echo str_replace('Hello world!', 'Hi Akanksha', $f);


/*
 *  substr() // to split a string buffer through length
 */
$f = "Hello world! How are you?";
$pos = strpos($f, 'How');
//var_dump($pos);

$s1 = substr($f, 0, $pos - 1);
//echo strlen($f);
$s2 = substr($f, $pos, strlen($f));

//echo 'S1 => ', $s1;
//echo '<br/>';
//echo 'S2 => ', $s2;

/*
 *   PHP define constant value 
 *   
 */

define('URL','www.ladyahrt.in' );
define('SECRET_KEY', 2.7834879420984);
echo SECRET_KEY;

/*
 *  loop iteration  while, for
 *  
 *  while( condition )
 *  for(start; condition; increament)
 *    
 */
// inital value
 $a = 1;
 while( $a <= 10 ){
 	
 	echo $a, '<br/>';
 	
 	// terminate condition/line
 	$a = $a + 1;
 }
 
 $a = 10;
 var_dump( $a );
 $a = $a + 1;
 var_dump( $a );
 
 $a++; // post increament op.
 
 // $b temp value
 $b = $a;
 $a = $a + 1;
 
 var_dump( $a );
 ++$a; // pre increament op.
 
 // $b temp value
 $a = $a + 1;
 $b = $a;
 var_dump( $a );
 
 for($a=1; $a <= 10; $a++){
 
 	echo $a, '<br/>';
 }
?>







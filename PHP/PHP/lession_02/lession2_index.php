<?php 
/*
 * Trick for easy debugging
 * */
//header('Content-Type: text; charset=UTF-8');

/*
 * Primitive
 * */
$arr = array(1,2,3);
$arr = array('abc', 'def', 'ghi');
$arr = [1,2,3];
/*
 * assositve
 * */
$arr = array('name' => 1, 'x' => '5_man', '1' => 0.0);

/*
 *  Friends list
 */
$f = array('Rahul', 'Avi', 'Anna', 'Vikram', '', null); 
/*
 *  Empty String means "\0" == '' //  $a = 0
 */
echo $f[0];
echo "\n";
echo $f[3];
echo "\n";

echo count($f);
echo "\n";
// affafafafa
echo "isset\n";
echo isset($f[5]);
echo "\n";
// 
echo "empty\n";
echo empty($f[5]);
// concat
echo "\n";
$s1 = "This is my dog.";
$s2 = ' His name is Kalu.';
$s3 = $s1 . $s2;
//echo $s1;
//echo $s2;
//$s1 = $s1 . $s2;
//echo $s1;
echo $s3;
echo "\n";
echo 'string position';
$s4 = strpos($s3, 'is');
echo $s4; 
//echo $s3[28], $s3[28];
echo "\n";
/*
 * Convert entire string to lower case
 */
echo strtolower($s3);
/*
 * Convert entire string to upper case
 */
echo strtoupper($s3);


/*
 *  Important
 *  string compare
 * */

$email = 'rishab223@gmail.com';
$password = '123';

/**
 * 
 * */
$db_name = ['rishab223@gmail.com', 'xyz@gmail.com'];
$db_name2 = ['RishaB203@gmail.com', 'xYz@gmail.com'];
$db_pass = ['123', 123];
echo $db_name[0] == $email;
echo $db_name[1] == $email;

echo "\npassword\n";
echo $db_pass[0] === $password;
echo $db_pass[1] === $password;

echo "\nstrcmp\n";
$a = strcmp($password, $db_pass[0]);

echo strcmp($password, $db_pass[0]);
echo strcmp($db_pass[1], $password);

//var_dump($password);
//
echo "Exp. 2";
var_dump($db_name2[0] == $email);

var_dump(strcmp($email,$db_name2[0]));
var_dump(strcmp($db_name2[0], $email));
var_dump(strcasecmp($db_name2[0], $email));
?>

















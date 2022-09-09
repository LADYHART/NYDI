<?php
/**
 *  Take Form input & echo 
 *
 *  Description: This file show example of Form input text and echo the same text with 'hello' 
 *  Author: Akanksha Adhikary (LADYHART)
 *  Web: https://www.ladyhart.in/t/php/
 *  Date: Sept 03, 2022
 *  Created: Sept 02, 2022
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Akanksha Adhikary. (https://www.ladyhart.in/)
 * @link          https://www.ladyhart.in/
 * @since         CakePHP(tm) v 0.1.6
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$ans = '';
$a = '';
$b = '';
/*
 * capturing a HTTP post request
 * check HTML form value sets or not
 */
if (! isset ( $_POST ['vala'] ) or ! isset ( $_POST ['valb'] ) or ! isset ( $_POST ['mode'] )) {
	$ans = 'invalid intput.';
} else {
	
	/*
	 * assign HTTP post value to local varible
	 *
	 */
	$a = $_POST ['vala'];
	$b = $_POST ['valb'];
	$mode = $_POST ['mode'];
	/*
	 * taking fuction into array
	 */
	$calculations = array (
			'add',
			'mul',
			'div' 
	);
	
	/*
	 * tradition way
	 *
	 * if ($mode == $calculations [0]) {
	 * $ans = $a + $b;
	 * } else if ($mode == $calculations [1]) {
	 * $ans = $a * $b;
	 * } else if ($mode == $calculations [2]) {
	 * $ans = $a / $b;
	 * } else {
	 * $ans = "Invalid mode";
	 * }
	 */
	/*
	 *  alternative to if-else when lot of decise need be take; 
	 *  also it is faster then conventational if-else stat; 
	 */
	switch ($mode) {
		case 'add' :
			$ans = $a + $b;
			break;
		case 'mul' :
			$ans = $a * $b;
			break;
		
		case $calculations [2] :
			$ans = $a / $b;
			break;
		
		default :
			$ans = "Invalid mode";
	}
}
?>
<!-- the calculator form -->
<!doctype html>
<html>
<head>
<title>Take Form input & echo</title>
</head>
<body>
	<form method="post">
		<label>A:</label> <input type="text" name="vala" value="<?=$a;?>" />
		&nbsp;&nbsp;&nbsp;&nbsp; <label>B:</label> <input type="text"
			name="valb" value="<?=$b;?>" /><br /> <br /> <label
			style="font-size: 86.777%;">Chose a calculation mode</label> <select
			name="mode">
			<option value="add">Add</option>
			<option value="mul">Multiply</option>
			<option value="div">Division</option>
		</select> <br />
		<button type="submit"
			style="padding: 5px 8px; background: #0e71c2; color: white; border: 1px solid;">Calculate</button>
	</form>
	<p><?php echo $ans;?></p>
</body>
</html>
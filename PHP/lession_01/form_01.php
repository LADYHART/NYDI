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
 
?>
<html>
<head>
  <title>Take Form input & echo</title>
</head>

<body>
  <form method="get">
  <label>Your name:</label>
  <input type="text" name="xvar"/>
  <button>Submit</button>
  </form>
<h2>
<?php
/*
* Var name 
* val empty string
*/
$name = '';
/*
* check where 'xvar' exit or not
*/
if( isset($_GET['xvar']) ){
	$name = $_GET['xvar'];
/*
* echo the value
*/
echo 'Hello ';
echo $name;
}
?>
</h2>

</body>
</html>
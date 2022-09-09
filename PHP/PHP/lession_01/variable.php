<<<<<<< HEAD
<?php
/**
 * Introduction to variable
 *
 *  Description: 
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
 
 
 /*
 To turn a variable into a variable variable, you put an extra $ put in front of your variable.
*/
$variableName = 'foo';
$foo = 'bar';

// The following are all equivalent, and all output "bar":
echo $foo;
echo '<br/>';
echo ${$variableName};
/*
* Integer
* An integer is a whole number positive or negative
*/
$foo = -3; // negative
$foo = 0; // zero (can also be null or false (as boolean)
$foo = 123; // positive decimal
$bar = 0123; // octal = 83 decimal
$bar = 0xAB; // hexadecimal = 171 decimal
$bar = 0b1010; // binary = 10 decimal

/*
Float
Floating point numbers, "doubles" or simply called "floats" are decimal numbers.
*/
$foo = 1.23;
$foo = 10.0;
$bar = -INF;
$bar = NAN;

/*
String
A string is like an array of characters.
*/
=======
<?php
/**
 * Introduction to variable
 *
 *  Description: 
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
 
 
 /*
 To turn a variable into a variable variable, you put an extra $ put in front of your variable.
*/
$variableName = 'foo';
$foo = 'bar';

// The following are all equivalent, and all output "bar":
echo $foo;
echo '<br/>';
echo ${$variableName};
/*
* Integer
* An integer is a whole number positive or negative
*/
$foo = -3; // negative
$foo = 0; // zero (can also be null or false (as boolean)
$foo = 123; // positive decimal
$bar = 0123; // octal = 83 decimal
$bar = 0xAB; // hexadecimal = 171 decimal
$bar = 0b1010; // binary = 10 decimal

/*
Float
Floating point numbers, "doubles" or simply called "floats" are decimal numbers.
*/
$foo = 1.23;
$foo = 10.0;
$bar = -INF;
$bar = NAN;

/*
String
A string is like an array of characters.
*/
>>>>>>> 33557bc94fdac29536c251c21e1f8b2085e1bc42
$foo = "bar";
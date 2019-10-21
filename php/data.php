<?php
/*
 * ========================================================================
 * File 	: data.php
 * Purpose	: string variables, data arrays to populate website 
 *			  with dynamic content
 *						
 * Author	: Mark Fletcher
 * Date		: 30.06.2019
 *  
 * Notes	: 
 *
 * Revision	:
 *		01.07.2019	1st issue.
 * 
 * ========================================================================
*/
//temporary text
$temp_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

// data array for header navigation bar
$navbar_hdr = [
'HOME' => 'blank_link.php',
'BLOG' => 'blank_link.php',
'PORTFOLIO' => 'blank_link.php',
'TEMPLATES' => 'blank_link.php'
];

//data array for footer navigation bar
$navbar_ftr = [
'HOME' => 'blank_link.php',
'BLOG' => 'blank_link.php',
'PORTFOLIO' => 'blank_link.php',
'ABOUT' => 'blank_link.php'
];

// data for main-sub areas
$subData = [
	'1' => ['hilton6.jpg', 'the dining experience'], 
	'2' => ['hilton7.jpg', 'city breaks']
];
?>

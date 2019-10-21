<?php
/*
 * ===================================================================
 * Function	: create_navbar()
 * Purpose	: function to create navbars
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * $navbarData	- a selected data array
 * $separator	- e.g. '|', ' ', ':'
 * 
 * Output :		
 * 	Returns $newNavbar - a fully constructed navigation bar string
 * 
 * Notes :
 *
 * ==================================================================
*/
function create_navbar($navbarData, $separator) {
	// dispaly navbar
    $counter = 1;
    $newNavbar ='';
    foreach($navbarData as $link => $url) {
        if ($counter != count($navbarData)) {
    			$newNavbar .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a>&nbsp;&nbsp;'.$separator.'&nbsp;'.PHP_EOL;
    			$counter++;
        } else {
    			$newNavbar .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a>'.PHP_EOL;
        }
    }
	return $newNavbar; 
}

/*
 * ===================================================================
 * Function	: create_popupMenu()
 * Purpose	: function to create popup menu
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * $navbarData	- a selected data array
 * 
 * Output :		
 * 	Returns $newMenu - a fully constructed navigation menu string
 * 
 * Notes :
 *
 * ==================================================================
*/
function create_popupMenu($navbarData) {
	// dispaly menu
    $counter = 1;
    $newMenu = '';
    foreach($navbarData as $link => $url) {
        if ($counter != count($navbarData)) {
    			$newMenu .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a><br />'.PHP_EOL;
    			$counter++;
        } else {
    			$newMenu .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a>'.PHP_EOL;
        }
    }
	return $newMenu;
}

/*
 * ===================================================================
 * Function	: redButton()
 * Purpose	: function to create red link buttons
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * $text
 * 
 * Output :		
 * 
 * 
 * Notes :
 *
 * ==================================================================
*/
// 
function redButton($text) {
	echo '<div class="redButton" onclick="location.href=\'blank_link.php\'">'.strtoupper($text) .'</div>';
}
 ?>
 

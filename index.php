<?php
/*
 * ========================================================================
 * File 	: index.php
 * Purpose	: landing page for website
 *						
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 *  
 * Notes	: includes header and footer php files
 *
 * Revision	:
 *		22.04.2019	1st issue.
 *
 * ========================================================================
*/
// include header
require_once('header.php');
?>

<body onload="image_carousel(slide_index, carousel_data)">
<div id="wrapper" class="clearfix">
<div id="main">
<div id="header">
<div id="hdrLogo">
    <img src="images/svgs/hilton-logo.svg" alt="Hilton Logo" onclick="location.href='https://www.hilton.com/en/'" />
</div><!-- end #hdrLogo -->

<div id="hdrNavbar">
<?php echo create_navbar($navbar_hdr, ' '); ?>
</div><!-- end #hdrNavbar -->

<div id="hdrNavbar2"> 
<div id="menu" onmouseover="showPopup()">
	<img src="images/svgs/more.svg" alt="Navigation Menu Icon" />
    MENU
	<div id="popup" onclick="hidePopup()">
	<?php echo create_popupMenu($navbar_hdr); ?>
	</div><!-- end #popup -->
</div><!-- end #menu -->
<div id="gallery">
    <a href="blank_link.php">
    <img src="images/svgs/camera.svg" alt="Camera graphic" />
    GALLERY
    </a>
</div><!-- end #gallery -->
<div id="contact">
    <a href="blank_link.php">
    <img src="images/svgs/speech-bubble.svg" alt="Speech bubble graphic" />
    CONTACT
    </a>
</div><!-- end #contact -->

<div id="bookHere"><?php redButton('book now'); ?></div>
</div><!-- end #hdrNavbar2 -->
</div><!-- end #header -->

<div id="content">
<div id="cText">
	<h1 class="glry"><?php echo strtoupper(substr($temp_text, 0, 11)); ?></h1>
    <p><?php echo strtoupper(substr($temp_text, 12, 27)); ?></p>
</div><!-- end #cText -->
</div><!-- end #content -->

<div id="carNav">
	<div id="ltScroll" onclick="plus_divs(-1)">&lt;</div>
    <div id="rtScroll" onclick="plus_divs(+1)">&gt;</div>
    <div id="carCount">1 to 5</div>
</div><!-- end #carNav -->
</div><!-- end #main -->
<div id="sub-main" class="clearfix">
<div id="bookHere2" onclick="location.href='https://www.hilton.com/en/'">BOOK HERE ^</div>
<div id="sub1-1">
<div id="sub1-1Text">
    <h1 class="news">THE DINING EXPERIENCE</h1>
    <p><?php echo substr($temp_text, 0, 123).' ...'; ?></p>
    <?php redButton('read more');?>
</div><!-- end #sub1-1Text -->
</div><!-- end #sub1-1 -->
    
<a href="blank_link.php">
<div id="sub1-2">
<div id="sub1-2Text">
	<h1 class="city">CITY BREAKS</h1>
</div><!-- end #sub1-2Text -->
</div><!-- end #sub1-2 -->
</a>

<?php foreach ($subData as $key => $value) : ?>

<div id="sub2-<?php echo $key; ?>">
</div><!-- end #sub2-<?php echo $key; ?> -->

<div id="sub2-<?php echo $key; ?>Text">
	<h1 class="news"><?php echo strtoupper($value[1]); ?></h1>
	<p><?php echo substr($temp_text, 0, 123).' ...'; ?></p>
	<?php redButton('read more'); ?>
</div><!-- end #sub2-<?php echo $key; ?>Text -->

<?php endforeach; ?>

</div><!-- end #sub-main -->

<?php require_once('footer.php'); ?>
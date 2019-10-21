/*
 * ===================================================================
 * Script	: image_carousel()
 * Purpose	: function to display images ina carousel
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * slideindex	- between 1 and length of carousel data array
 *				- default = 1
 * carousel_data- data array
 * 
 * Output :		
 * 	Dynamically changes background image in main content <div>
 *  and updates slide counter
 * 
 * Notes :
 *
 * ==================================================================
*/
// data array for revolving photos
var carousel_data = [
    'hilton1.jpg',
    'hilton2.jpg',
    'hilton3.jpg',
    'hilton4.jpg',
    'hilton5.jpg'
];

// initialize slide_index variable
var slide_index = 1;

function plus_divs(num) {
  image_carousel((slide_index += num), carousel_data);
}

function image_carousel(num, data) {
  var image = document.getElementById("main");
  var count = document.getElementById("carCount");
  if (num > data.length) {
  	slide_index = 1;
  } 
  if (num < 1) {
  	slide_index = data.length;
  }
  var display = slide_index - 1;
  image.style.backgroundImage = "url('images/"+data[display]+"')"; 
  carCount.innerHTML = slide_index+' of '+data.length;
}

/*
 * ===================================================================
 * Script	: showPopup() & hidePopup()
 * Purpose	: function to display and hide popup navigation menu
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * 
 * Output :		
 * 	Dynamically changes the display style
 *	show = block, hide = none
 * 
 * Notes :
 *
 * ==================================================================
*/
//showPopup function
function  show_popup() {
	document.getElementById("popup").style.display="block";
}
	
//hidePopup function
function hide_popup() {
	document.getElementById("popup").style.display="none";
}

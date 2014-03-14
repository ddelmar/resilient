/*
JavaScript for the demo: Recreating the Nikebetterworld.com Parallax Demo
Demo: Recreating the Nikebetterworld.com Parallax Demo
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/recreate-nikebetterworld-parallax/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/recreate-nikebetterworld-parallax/

License: http://creativecommons.org/licenses/by-sa/3.0/ (Attribution Share Alike). Please attribute work to Ian Lunn simply by leaving these comments in the source code or if you'd prefer, place a link on your website to http://www.ianlunn.co.uk/.

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

$(document).ready(function() { //when the document is ready...

if (($(document).width()) < 768){
} else {
	
	//save selectors as variables to increase performance
	var $window = $(window);
	var $firstBG = $('#intro');
	var $overlaidBG = $('#overlaid');
	var $tagline = $('#tagline');
	var $tier2 = $('#tier2 *');
	var $tier3 = $('#tier3 *');
	
	var windowHeight = $window.height(); //get the height of the window
	
	
	//apply the class "inview" to a section that is in the viewport
	$('#intro, #overlaid, #tier2, #tier3').bind('inview', function (event, visible) {
			if (visible == true) {
			$(this).addClass("inview");
			} else {
			$(this).removeClass("inview");
			}
		});
	
			
	//function that places the navigation in the center of the window
	function RepositionNav(){
		var windowHeight = $window.height(); //get the height of the window
		var navHeight = $('#nav').height() / 2;
		var windowCenter = (windowHeight / 2); 
		var newtop = windowCenter - navHeight;
		$('#nav').css({"top": newtop}); //set the new top position of the navigation list
	}
	
	//function that is called for every pixel the user scrolls. Determines the position of the background
	/*arguments: 
		x = horizontal position of background
		windowHeight = height of the viewport
		pos = position of the scrollbar
		adjuster = adjust the position of the background
		inertia = how fast the background moves in relation to scrolling
	*/
	function newPos(x, windowHeight, pos, adjuster, inertia){
		return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
	}
	
	
	//function to be called whenever the window is scrolled or resized
	function Move(){ 
		var pos = $window.scrollTop(); //position of the scrollbar

		//if the first section is in view...
		if($firstBG.hasClass("inview")){
			//call the newPos function and change the background position
			// $firstBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 900, 0.1)}); 
		}
		
		
		
		//if the second section is in view...
		if($('#tier2').hasClass("inview")){
			$tier2.css({"opacity": ((pos - 420) * 0.004)});
		}
		if($('#tier3').hasClass("inview")){
			$tier3.css({"opacity": ((pos - 1260) * 0.004)});
		}
		
		$("#pos").html(pos);
		$overlaidBG.css({"opacity": (pos * 0.005)});
		$tagline.css({"opacity": (pos * 0.002)});
	}
		
	RepositionNav(); //Reposition the Navigation to center it in the window when the script loads
	
	$window.resize(function(){ //if the user resizes the window...
		Move(); //move the background images in relation to the movement of the scrollbar
		RepositionNav(); //reposition the navigation list so it remains vertically central
	});		
	
	$window.bind('scroll', function(){ //when the user is scrolling...
		Move(); //move the background images in relation to the movement of the scrollbar
	});

} // end of conditional	
});
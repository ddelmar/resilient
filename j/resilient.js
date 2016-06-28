$(document).ready(function(){
	$("ul#nav li").hover(function(){
		$(this).addClass("hover");
	}, function(){
		$(this).removeClass("hover");
	});

	$(".nav_button").click(function(){
		$(".nav_x, #nav").show();
		$(".nav_button").hide();
	});
	$(".nav_x").click(function(){
		$(".nav_x, #nav").hide();
		$(".nav_button").show();
	});

	$("#micahvideo #x").click(function(){
		$("#micahvideo").remove();

	


// Twitter
	var rssUrl = "http://twitrss.me/twitter_user_to_rss/?user=resilientcoders";
	// if you want "replies" add to the URL &replies=on
	function parseRSS(url, callback) {
	  $.ajax({
	    url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
	    dataType: 'json',
	    success: function(data) {
	      callback(data.responseData.feed.entries);
	    }
	  });
	}
	html = "";
	parseRSS(rssUrl, function(rss) {
	    for(i = 0; i >=0; i--) {
	          html += "<p><a href='" + rss[i].link + "'>" + rss[i].title + "</a></p>";
	    }
		$(".product.twitter p").html(html);
	});


//----------- if Program pg ----------//
	if(window.location.pathname == '/program/'){
		//

		$(".program_nav li a, #tier3 a:not('.external')").click(function(){
			var btnClass = $(this).attr("class");
			var btnSibs = $(".program_nav li a:not(." + btnClass + ")");
			var content = $("#tier3 ." + btnClass + "_content");
			var contentSiblings = $("#tier3 > * > div:not(." + btnClass + "_content)");

			$(btnSibs).attr("id","");
			$(".program_nav li ." + btnClass).attr("id","selected");
			$("." + btnClass + "_content").addClass("visible").removeClass("hidden");
			$(contentSiblings).addClass("hidden").removeClass("visible");
		});
	}

//----------- Form: Bootcamp and Program pages ----------//
		$("li#instructor *").click(function(){
			$("#instructorlist").toggle();
		});


//----------- if Team pg ----------//
	if(window.location.pathname == '/team/' || '/alumni/' || '/lab/'){


	// Wait until images are loaded before displaying them
		var TeamImgTotal = $(".team img").size(); 	// get the number of images
		var PartnersImgTotal = $(".partners img").size();
		var imgCount = 0;
		$(".team img").load(function(){
			if(++imgCount == TeamImgTotal){
				$(".team img, .partners img").animate({
				"opacity":1
			});
				}
		});
	setTimeout(function(){
		// Force the load if it doesn't happen after 3 seconds
		$(".team img, .partners img").css("opacity","1");
		casestudy(); // on Lab pg, set the casestudy_img to be the same height as parent
	}, 2000);

			$(".team_photos a").click(function(){

			var thisclass = $(this).parent().attr("class");
			var thiscontent = $(".team_hiddenCopy ." + thisclass).html();
			var thisSiblings = $(this).parent().siblings();
			$(thisSiblings).children().removeClass("selected").addClass("unselected");
			$(".team_photos ." + thisclass + " a").removeClass("unselected").addClass("selected");
			$(".team_writeup").html(thiscontent);
			$(".casestudy_img").attr("id",thisclass);
		});
	}
function casestudy(){
	var casestudyImg = $(".team").height();
	$(".casestudy_img").height(casestudyImg);
}

	deviceDetect();
}); // END DOC.READY



window.onresize = deviceDetect;

// DETERMINE DEVICE
	function deviceDetect(){
	var viewportwidth = window.innerWidth;
	var viewportheight = window.innerHeight;
	if ((viewportwidth) < 768) { mobileJS();}
	else { desktopTabletJS(); }
	}

// :::::::::::::::::::::::::::::::::::::
// :: DESKTOP ::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::

function mobileJS(){
	$(".nav_x, #nav").hide();
	$(".nav_button").show();
}

function desktopTabletJS(){
	$(".nav_x, .nav_button").hide();
	$("#nav").show();

	// If desktop, remove anchor tag functionality
	$(".team_photos a, .partners_photos a").click(function(){
	 return false;
	});
}

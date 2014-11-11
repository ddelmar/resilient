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
		$(".program_nav li a").click(function(){
			var thisClass = $(this).attr("class");
			var thisSibs = $(".program_nav li a:not(." + thisClass + ")");
			var contentSiblings = $("#tier3 > * > div:not(." + thisClass + "_content)");
			
			$(thisSibs).attr("id","");
			$(this).attr("id","selected");
			$("." + thisClass + "_content").addClass("visible").removeClass("hidden");
			$(contentSiblings).addClass("hidden").removeClass("visible");
		});
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
}
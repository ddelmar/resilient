<?php include_once("../includes/head.php") ?>
<?php include_once("../includes/logo_nav.php") ?>
https://docs.google.com/spreadsheets/d/1zEJ_0-nYK3AEx9Por6qub9eHMF6NtHZbi1uKO50a-rg/pubhtml
<!--<div class="hero"></div>-->
<div id="donate-modal" class="modal">
	<div class="overlay"> </div>
	<form id="shirts-form">
		<h2>Details</h2>
		<p>Thanks for supporting Resilient Coders! We need a few details to make sure you get the gift you want.</p>
		<ul id="clothing">
			<li class="list-title">Item:</li>
			<li id="tshirt" class="selected">T-shirt</li>
			<li id="hoodie">Hoodie</li>
		</ul>
		<ul id="size">
			<li class="list-title">Size:</li>
			<li>S</li>
			<li>M</li>
			<li>L</li>
			<li>XL</li>
			<li>XXL</li>
		</ul>
		<ul id="color">
			<li class="list-title">Color:</li>
			<li>white</li>
			<li>red</li>
		</ul>
		<div id="address">
			<input type="text" id="name" placeholder="NAME" />
			<input type="text" id="street" placeholder="STREET ADDRESS" />
			<input type="text" id="city" placeholder="CITY" />
			<input type="text" id="state" placeholder="STATE" />
			<input type="text" id="zip" placeholder="ZIP" />
			<input type="text" id="email" placeholder="EMAIL" />
		</div>
		<ul id="newsletter">
			<li class="list-title">Join Our Newsletter?</li>
			<li class="selected">Yes</li>
			<li>No</li>
		</ul>
		<div class="donate-button">Donate $20 via PayPal</div>
	
	</form>
</div>
<div id="container">
	<div id="tier2">
	
			<h2>Donate</h2>
			<p>We work with Third Sector New England for our fiscal sponsorship, and as such are able to accept donations. Your donations will help us get in front of more kids and create more student mentors.</p>
			<p>By using the donate buttons below, You'll receive a Resilient Coders t-shirt or hoodie as a thank you for your gift!</p>
			<section id="shirts-container">
				<div id="shirts">
					<div class="merch" id="shirt-w"></div>
					<div class="merch" id="shirt-r"></div>
				</div>
				<div class="donate-button">DONATE $20</div>
			</section>
	
	</div>
</div><!-- /container-->
	
	<?php include_once("../includes/footer.php") ?>
<script>
//	$.getJSON("http://cors.io/spreadsheets.google.com/feeds/list/1zEJ_0-nYK3AEx9Por6qub9eHMF6NtHZbi1uKO50a-rg/od6/public/values?alt=json",
$(function() {
	//google spreadsheets json
	$('.donate-button').click(function () {
//		alert("clicked");
		$('#donate-modal').addClass('open');
	});
	$('.overlay').click(function(e) {
			$('#donate-modal').removeClass('open');
//			alert('Nailed it');
	});
	$('#shirts-form ul li').click(function () {
		if (!$(this).hasClass('selected') && !$(this).hasClass('list-title')) {
			$(this).siblings().removeClass('selected');
			$(this).addClass('selected');
//			CHANGE BUTTON TEXT FOR SHIRT OR SWEATSHIRT
			if($(this).parent().attr('id') == 'clothing'){
				if ($('#clothing #tshirt').hasClass('selected')) {
					$('#shirts-form .donate-button').text("Donate $20 via PayPal");
					
				}
				else if ($('#shirts-form #hoodie').hasClass('selected')) {
					$('#shirts-form .donate-button').text("Donate $35 via PayPal");
				}
			}
		}
	});
	//ALERT THE ORDER DETAILS JUST FOR KICKS
	$('#shirts-form .donate-button').click(function (){
		var $form_details = "",
			$counter = 0;
		
		$('#shirts-form ul li').each(function () {
			if ($(this).hasClass('selected')) {
				$form_details +=$(this).text() + ", ";
				$counter++;
			}
		});
		
		$('#address input').each(function () {
			$form_details +=$(this).val() + ", ";
		});
//		if ($counter < 4) {
//			alert("Whoops, it looks like you forgot something. Please make sure you've completed each section.");
//		}
		
		$.post(
			"https://spreadsheets.google.com/feeds/list/1zEJ_0-nYK3AEx9Por6qub9eHMF6NtHZbi1uKO50a-rg/od6/public/basic?hl=en_US&alt=json", 
			{"name":"tyler", "item":"tyler","size":"tyler", "color":"tyler", "address":"tyler", "newsletter":"tyler"}, 
			function (results) {alert("Apparently it worked");}
			);
//		alert($form_details);
	});

});
</script>		
</body>
</html>

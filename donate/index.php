<?php include_once("../includes/head.php") ?>
<?php include_once("../includes/logo_nav.php") ?>

<!--<div class="hero"></div>-->
<div id="donate-modal" class="modal">
	<div class="overlay"> </div>
	<form class="class" id="shirts-form">
		<h2>Details</h2>
		<p>Thanks for supporting Resilient Coders! We need a few details to make sure you get the gift you want.</p>
		<ul id="clothing">
			<li>T-shirt</li>
			<li>Hoodie</li>
		</ul>
		<ul id="size">
			<li>Size:</li>
			<li>S</li>
			<li>L</li>
			<li>XL</li>
		</ul>
		<ul id="color">
			<li>white</li>
			<li>red</li>
		</ul>
		<div id="address">
			<input type="text" id="street" placeholder="STREET ADDRESS" />
			<input type="text" id="city" placeholder="CITY" />
			<input type="text" id="state" placeholder="STATE" />
			<input type="text" id="zip" placeholder="ZIP" />
		</div>
		<ul id="newsletter">
			<li>Join Our Newsletter?</li>
			<li>Yes</li>
			<li>No</li>
		</ul>
	
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
$(function() {
	$('.donate-button').click(function () {
//		alert("clicked");
		$('#donate-modal').addClass('open');
	});
	$('.overlay').click(function(e) {
			$('#donate-modal').removeClass('open');
//			alert('Nailed it');
	});

})
</script>		
</body>
</html>

<?php include_once("../includes/head.php") ?>
<?php include_once("../includes/logo_nav.php") ?>

<!--<div class="hero"></div>-->
<meta itemprop="url" content="https://docs.google.com/forms/d/1Kv6aEhZp55Gcdr4inVs6xVwlLZE3G7TA8Jj8hq5ob7I/viewform">
<meta itemprop="embedUrl" content="https://docs.google.com/forms/d/1Kv6aEhZp55Gcdr4inVs6xVwlLZE3G7TA8Jj8hq5ob7I/viewform?embedded=true">

<div id="donate-modal" class="modal">
	<div class="overlay"> </div>

	<script type="text/javascript">var submitted=false;</script>
	    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none"
	onload="if(submitted) {
		RC_redirect();
		}">
	<!-- PayPal "button" -->

	</iframe>
	<form id="PP_form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="display:none">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input id="donation_amount" type="hidden" name="hosted_button_id" value="2D4YQBAPSW9DC">

		<?php /* third sector was 66U8WYDLT7C5J */ ?>
		<!-- <input type="hidden" name="amount" value="$69"> -->
	</form>
<!-- MAIN FORM FOR SHIRTS -->
<form id="shirts_form" action="https://docs.google.com/forms/d/1Kv6aEhZp55Gcdr4inVs6xVwlLZE3G7TA8Jj8hq5ob7I/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;">
		<h2>Details</h2>
		<p>Thanks for supporting Resilient Coders! We'll accept any amount at all, and for <b>$75 or more</b> we'll say thanks with a pretty slick hoodie.</p>

		<div class="ss-form-question errorbox-good" role="listitem" style="width:100%;">
			<div dir="ltr" class="ss-item ss-text">
				<div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1446090153">
						<div class="form-title ">Committing Amount: $
						</div>
						<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
					</label>
					<input type="text" name="entry.1446090153" value="75" class="ss-q-short" id="entry_1446090153" dir="auto" aria-label="Donation Amount  " aria-required="true" required="" title="" style="width:50px">
					<div class="error-message" id="121361927_errorMessage"></div>
					<p class="small">You'll enter this again on PayPal</p>
				</div>
			</div>
		</div>
<?php
/*
Commenting out the selection of shirts vs. hoodies



		<div class="ss-form-question errorbox-good" role="listitem">
			<div dir="ltr" class="ss-item ss-item-required ss-radio">
				<div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_477687963">
						<div class="form-title">Send me a:
							<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						</div>
						<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

						<!-- <ul class="ss-choices" id="shirts-form" role="radiogroup" aria-label="Item:  "><li class="ss-choice-item"><label><input type="radio" name="entry.368731271" value="T-shirt" id="group_368731271_1" role="radio" class="ss-q-radio" aria-label="T-shirt" required="" aria-required="true">
							<span class="ss-choice-label tshirt">T-shirt</span>
						</label></li> <li class="ss-choice-item"><label><input type="radio" name="entry.368731271" value="Hoodie" id="group_368731271_2" role="radio" class="ss-q-radio" aria-label="Hoodie" required="" aria-required="true">
						<span class="ss-choice-label hoodie">Hoodie</span>
					</label></li></ul> -->
						<ul class="ss-choices" role="radiogroup" aria-label="Item:  ">
							<li class="ss-choice-item">
								<label>

								<input type="radio" name="entry.368731271" value="White Shirt" id="group_368731271_1" role="radio" class="ss-q-radio" aria-label="White Shirt" required="" aria-required="true">
								<span class="ss-choice-label">White Shirt</span>
								</label>
							</li>
							<li class="ss-choice-item">
								<label>

								<input type="radio" name="entry.368731271" value="Red Shirt" id="group_368731271_2" role="radio" class="ss-q-radio" aria-label="Red Shirt" required="" aria-required="true">
								<span class="ss-choice-label">Red Shirt</span>
								</label>
							</li>
							<li class="ss-choice-item">
								<label>

								<input type="radio" name="entry.368731271" value="Black Hoodie" id="group_368731271_3" role="radio" class="ss-q-radio" aria-label="Black Hoodie" required="" aria-required="true">
								<span class="ss-choice-label">Black Hoodie</span>
								</label>
							</li>
						</ul>
						<p>
							<a href="#" class="shirts-modal-link small">Wait, what do they look like?</a>
								</p>
					<div class="error-message" id="477687963_errorMessage"></div>
				</div></div></div>



				<div class="ss-form-question errorbox-good" role="listitem"  style="width:100%;">
				<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_2128526830"><div class="form-title">Size:
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					</div>
					<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

					<ul class="ss-choices" role="radiogroup" aria-label="Size:  "><li class="ss-choice-item"><label><input type="radio" name="entry.1510066314" value="S" id="group_1510066314_1" role="radio" class="ss-q-radio" aria-label="S" required="" aria-required="true">
						<span class="ss-choice-label">S</span>
					</label></li> <li class="ss-choice-item"><label><input type="radio" name="entry.1510066314" value="M" id="group_1510066314_2" role="radio" class="ss-q-radio" aria-label="M" required="" aria-required="true">
					<span class="ss-choice-label">M</span>
				</label></li> <li class="ss-choice-item"><label><input type="radio" name="entry.1510066314" value="L" id="group_1510066314_3" role="radio" class="ss-q-radio" aria-label="L" required="" aria-required="true">
				<span class="ss-choice-label">L</span>
			</label></li>

			<li class="ss-choice-item">
				<label>
					<input type="radio" name="entry.1510066314" value="XL" id="group_1510066314_4" role="radio" class="ss-q-radio" aria-label="XL" required="" aria-required="true">
						<span class="ss-choice-label">XL</span>
				</label>
			</li>

			<li class="ss-choice-item">
				<label>
					<input type="radio" name="entry.1510066314" value="2X" id="group_1510066314_5" role="radio" class="ss-q-radio" aria-label="2X" required="" aria-required="true">
					<span class="ss-choice-label">2X</span>
				</label>
			</li>

			<li class="ss-choice-item">
				<label>
					<input type="radio" name="entry.1510066314" value="3X" id="group_1510066314_5" role="radio" class="ss-q-radio" aria-label="3X" required="" aria-required="true">
					<span class="ss-choice-label">3X</span>
				</label>
			</li>

		</ul>
	<div class="error-message" id="2128526830_errorMessage"></div>
	</div></div></div>

	*/?>

	<div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_1270275619"><!--<div class="form-title">Name:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="NAME" name="entry.1270275619" value="" class="ss-q-short full-text-input" id="entry_1270275619" dir="auto" aria-label="Name:  " aria-required="true" required="" title="">
	<div class="error-message" id="524213110_errorMessage"></div>

	</div></div></div>

	<div class="ss-form-question errorbox-good" role="listitem" style="margin-left: 10px;">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_1697486718"><!--<div class="form-title">Email:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="EMAIL" name="entry.1697486718" value="" class="ss-q-short full-text-input" id="entry_1697486718" dir="auto" aria-label="Email:  " aria-required="true" required="" title="">
	<div class="error-message" id="1558084290_errorMessage"></div>

	</div></div></div>



	<div class="ss-form-question errorbox-good" role="listitem"  style="width:100%;">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_657943473"><!--<div class="form-title">Address:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="STREET ADDRESS" name="entry.657943473" value="" class="ss-q-short full-text-input" id="entry_657943473" dir="auto" aria-label="Address:  " aria-required="true" required="" title=""  style="width:94.7%;">
	<div class="error-message" id="508549276_errorMessage"></div>

	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_1615279903"><!--<div class="form-title">City:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="CITY" name="entry.1615279903" value="" class="ss-q-short half-text-input" id="entry_1615279903" dir="auto" aria-label="City:  " aria-required="true" required="" title="">
	<div class="error-message" id="1179178650_errorMessage"></div>

	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_257860730"><!--<div class="form-title">State:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="STATE" name="entry.257860730" value="" class="ss-q-short quarter-text-input" id="entry_257860730" dir="auto" aria-label="State:  " aria-required="true" required="" title="">
	<div class="error-message" id="291800819_errorMessage"></div>

	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_1349546871"><!--<div class="form-title">Zip:
		<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	</div>-->
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" placeholder="ZIP" name="entry.1349546871" value="" class="ss-q-short quarter-text-input" id="entry_1349546871" dir="auto" aria-label="Zip:  " aria-required="true" required="" title="">
	<div class="error-message" id="1664423486_errorMessage"></div>

	</div>
	</div>
	</div>



	<div class="ss-form-question errorbox-good" role="listitem" style="width:100%;">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
		<label class="ss-q-item-label" for="entry_2008566408"><div class="form-title">Join Our Newsletter?
			<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
		</div>
		<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

		<ul class="ss-choices" role="radiogroup" aria-label="Join Our Newsletter?  "><li class="ss-choice-item"><label><input type="radio" name="entry.1884029523" value="Yes" id="group_1884029523_1" role="radio" class="ss-q-radio" aria-label="Yes" required="" aria-required="true">
			<span class="ss-choice-label">Yes</span>
		</label></li> <li class="ss-choice-item"><label><input type="radio" name="entry.1884029523" value="No" id="group_1884029523_2" role="radio" class="ss-q-radio" aria-label="No" required="" aria-required="true">
		<span class="ss-choice-label">No</span>

	</label></li></ul>
	<div class="error-message" id="2008566408_errorMessage"></div>
	<p class="small">We won't share your info. And we don't email often. </p>

	</div></div></div>
	<input type="hidden" name="draftResponse" value="[,,&quot;-3790939465112778216&quot;]">
	<input type="hidden" name="pageHistory" value="0">


	<input type="hidden" name="fbzx" value="-3790939465112778216">

	<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
		<input type="submit" name="submit" value="Donate via PayPal" id="ss-submit" class="jfk-button jfk-button-action donate-button" >
	</td>
	</tr></tbody></table></div></ol>

</form>

<div id="confirmation">
	<h2>Thanks, <span id="donor-name"></span></h2>
	<p><br />Now directing you to PayPal.com to complete your donation.</p>
</div>
</div>

<?php /*

::::::::::::::::::::::
::: BEGIN CONTAINER ::
::::::::::::::::::::::

*/?>
	<div class="container">
		<div id="tier2">

		<h2>Donate</h2>

		<p class="intro" style="margin-bottom:1em;">
		There's a lot going on, and many opportunities for you to get involved. For any donation of $75 or more, we'll send you a Resilient Coders hoodie.
		They're printed here in Massachusetts by <a href="http://www.commcorp.org/sites/home.cfm?ID=25" target="_blank" title="Exclusive Tees">court-involved youth.</a>
		</p>

		<ul>
			<li class="donate-button for-shirts">
				<p>Donate $75 or More</p>
			</li>
			<li class="donate-button" onclick="RC_PayPal()">
				<p>Donate Any Amount</p>
			</li>
		</ul>
		<p style="float: left; padding:4em 0;">Resilient Coders is a 501(c)(3) organization.</p>



	</div><!-- /tier2 -->
</div><!-- /container -->
</div><!-- /spacer -->



<div class="image-container">
<div class="main-header fullheightwidth hero"></div>
</div>





		<p class="clr"></p>
		<div id="shirts-modal" class="modal">

			<div class="overlay"> </div>
			<section id="shirts-container">
				<h2>Shirts and Hoodies</h2>
				<p>A donation of $75 or more will give you a slick Resilient Coders hoodie. They're printed here in Massachusetts by court-involved youth. Learn more about <a href="http://www.commcorp.org/sites/home.cfm?ID=25" target="_blank" alt="Exclusive Tees">Exclusive Tees.</a></p>

			</section>
		</div>

	</div>


<?php include_once("../includes/footer.php") ?>
<script>

function RC_redirect() {
	var $donor_name = $('#entry_1270275619').val(),
		//GRAB FIRST NAME FROM GIVEN NAME
		$first_name = $donor_name.slice(0, $donor_name.indexOf(" "));

	$('#donor-name').html($first_name);
	RC_PayPal();
}
function RC_PayPal(){
	if (!($('#donate-modal').hasClass('open'))) {
		$('#donate-modal').addClass('open');
	}
	$('form').hide();
	$('#confirmation').fadeIn();
	$('#PP_form').delay(1000).submit();
}



$('.donate-button').click(function () {
	//CHECK IF THE BUTTON WAS IN THE SHIRTS MODAL
	if ($(this).parent().attr('id')==('shirts-container')) {
		$('#shirts-modal').removeClass('open');
	};
//	if ($(this).hasClass('for-shirts')) {
	$('#donate-modal').addClass('open');
		$('html, body').animate({
			scrollTop: $('#donate-modal').offset().top
		}, 500);
//	};
});
$('.shirts-modal-link').click(function () {
	$('#shirts-modal').addClass('open');
	$('html, body').animate({
		scrollTop: $('#shirts-modal').offset().top
	}, 500);
	return false;
});
$('.overlay').click(function() {
	$('.modal').removeClass('open');
});

//	CHANGE BUTTON TEXT FOR SHIRT OR SWEATSHIRT
// $('#shirts_form li').click(function () {
// 	if ($("#shirts_form input[type='radio']:checked + .ss-choice-label").hasClass('hoodie')) {
// 		$('#shirts_form .donate-button').val("DONATE $35 VIA PAYPAL");
// 		// PAYPAL DONATION ID RS_H
// 		$('#donation_amount').val("P36J6LYWCATDN");
// 	}else {
// 		$('#shirts_form .donate-button').val("DONATE $20 VIA PAYPAL");
// 		//PAYPAL DONATION ID RS_S
// 		$('#donation_amount').val("WR4A74CG9RC2U");
// 	}
// });
</script>
</body>
</html>

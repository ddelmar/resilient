<?php include_once("../includes/head.php") ?>
<?php include_once("../includes/logo_nav.php") ?>

<?php /*

::::::::::::::::::::::
::: BEGIN CONTAINER ::
::::::::::::::::::::::

*/?>

<div id="donate-modal" class="modal">
	<div class="overlay"> </div>
	<div class="detail funnel1">
		<h2>Coding Camps and Partnerships</h2>
		<iframe src="https://www.youtube.com/embed/ASKzlgmopyo" frameborder="0" allowfullscreen style="width:100%; height:200px"></iframe>

		<p style="margin-top:20px;">We source our students from our partnerships with organizations such as Youth Options Unlimited,
			the Department of Youth Services, and the Boston Private Industry Council. We also run Coding Camps
			to expose new students to coding. <a href="/camp">Learn more about Coding Camp.</a>
		</p>
		<p>
		Our objective at the top of the funnel is for students to progress to the next step along the process.
		</p>

	</div>
	<div class="detail funnel2">
		<h2>Coworking and Satellites</h2>
		<p>
			<strong>Coworking</strong><br />
		On Tuesdays and Thursdays, our dedicated group of young people join us at CIC Boston's coworking space,
		in which they are surrounded by tech entrepreneurs. Most of these youth have joined us through referrals
		from a variety of different programs, including Youth Options Unlimited, the Boston Private Industry Council,
		and the Department of Youth Services.
	</p>
	<p>We believe that the best learning happens when you have hands-on experience,
		as well as room for exploration, thinking and reflection, rather than transmission of knowledge from teacher to student.
		Coworking presents our students with an opportunity to hang out in a safe space together, meet other young coders,
		and interact with tech professionals as they further explore web development at their pace.
		<br /><br />
		<strong>Satellites</strong><br />
 		Satellites are Coworking Cohorts held "away," at offices including the Microsoft NERD Center,
		giving our more experienced youth a deeper level of exposure into careers in technology.
</p>
	</div>
	<div class="detail funnel3">
		<h2>Bootcamp</h2>
		<p>
We are designing a new, full-day "bootcamp" model, for higher-risk young people who are not in school. A cohort of 5 - 8
students meets for five hours a day, five days a week, for 8 weeks. During this time, they are working out of a coworking space,
alongside tech entrepreneurs, in order to create a fully immersive learning environment. The program is built around key
"milestones," identified in our curriculum and informed by the needs of the market. The cohorts will run quarterly.
</p>

	</div>
	<div class="detail funnel4">
		<h2>Resilient Lab</h2>
		<p>We run a web development shop that provides meaningful employment opportunities for our highest-performing youth.
			Client projects include design and development of <a href="http://cityawake.is" target="_blank">City Awake,</a> and designing the interface for the iPhone app released by Wanderu, a local tech startup.
		</p>
		<p>
			<a href="http://time.com/3714747/iphone-apps-snl/" target="_blank">Wanderu iPhone app mentioned in TIME.</a>
		</p>
		<p>
			<a href="/lab" target="_blank">More about Resilient Lab</a>
		</p>
	</div>
</div>



<div class="spacer"  style="padding: 0;">
	<div class="container">
		<div id="tier2">

		<h2>The Tiered Program</h2>

		<p class="intro">
		In order to effectively source, educate, and employ our students,
		we've developed a funnel with "overlapping" means of engagement, which you can explore below.


		</p>

		<div id="funnel">
			<div id="funnel1"><p>Coding Camps, Partnerships</p></div>
			<div id="funnel2"><p>Coworking, <br />Satellites</p></div>
			<div id="funnel3"><p>Bootcamp</p></div>
			<div id="funnel4"><p>Resilient Lab</p></div>

		</div><!-- /funnel -->




	</div><!-- /tier2 -->
</div><!-- /container -->
</div><!-- /spacer -->

<script>
$(document).ready(function(){

$('#funnel div').click(function () {
	var thisID = $(this).attr("id");
	$('#donate-modal').addClass('open');
	$(".detail." + thisID).show();
	$(".detail:not(." + thisID + ")").hide();
		$('html, body').animate({
			scrollTop: $('#donate-modal').offset().top
		}, 500);
});

$('.overlay').click(function() {
	$('.modal').removeClass('open');
});
});
</script>

<?php include_once("../includes/footer.php") ?>

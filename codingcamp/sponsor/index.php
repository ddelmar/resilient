<?php require_once("../../includes/password_protect_deck.php")  ?>


<!DOCTYPE html>
<!--
  Google HTML5 slide template
  Authors:
  Luke Mahé (code)
  Marcin Wichary (code and design)
  Dominic Mazzoni (browser compatibility)
  Charles Chen (ChromeVox support)
  URL: http://code.google.com/p/html5slides/
-->
<html>
  <head>
    <title>Resilient Coders</title>
    <meta charset='utf-8' />
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="http://delmarsenties.s3.amazonaws.com/resilient/favicon.gif" />
    <script src='slides_orig.js' type='text/javascript'></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script>
	$(document).ready(function(){
	
	/*
	I've added an iframe.remove in slides.js
	in the handleBodyKeyDown event
	*/
	
		$(".distribution div.ebay").click(function(){
			$(".distribution div.under1 div, .distribution div.under2 div").addClass("splay");
			
				setTimeout(function(){
				$(".distribution div.under1 div").css({
				"top":"340px"
				}).removeClass("splay").addClass("endframe");
				},950);
				
				setTimeout(function(){
				$(".distribution div.under2 div").css({
				"top":"440px"
				}).removeClass("splay").addClass("endframe");
				},950);
			});

	$(".moredebbie img.earl").click(function(){
		$(this).attr("src","i/earlx.jpg");
		});

		
		
	});
	
	
	
	
	</script>
  </head>
  <body style='display: none'>
  
  <!-- <div class="roadblock"><p>This works best in Firefox!</p></div> -->
    <section class='slides layout-regular template-default'>
      <!-- Your slides (<article>s) go here. Delete or comment out the slides below. -->
      <article>
		<h2>April 20-24, 2015</h2>
       <h1>Boston.Coding.Camp.</h1>
		<h2>Microsoft N.E.R.D. Center</h2>
      </article>
	  
      <article>
        <h1>
          This is what we do.
        </h1>
		<p class="intro">
       	<a  href="http://resilientcoders.org" title="Resilient Coders" target="_blank">Resilient Coders</a> and <a href="http://typp.org" title="The Young People's Project" target="_blank">the Young People's Project</a> are teaming up to spread tech literacy among urban youth during their spring break.
   		</p>
		<div class="left45">
			<h2>Resilient Coders</h2>
			<p>
				<a href="http://resilientcoders.org" title="Resilient Coders Program" target="_blank">Resilient Coders</a> is focused on making web technology more available to urban youth. It's a <a href="http://resilientcoders.org/program" title="Resilient Coders Program" target="_blank">three-part program</a> that funnels students from learning HTML after school, through our downtown "Coworking" sessions, and ultimately, hourly employment. Our higher performers participate in <a href="http://resilientcoders.org/lab" title="Resilient Lab" target="_blank">Resilient Lab,</a> a web design and development shop with real clients.
			</p>
		</div>
		<div class="right45">
			<h2>Young People's Project</h2>
			<p><a href="http://typp.org" target="_blank" title="Young People's Project">YPP</a> uses Math Literacy Work to develop the abilities of elementary through high school students to succeed in school and in life, and in doing so involves them in efforts to eliminate institutional obstacles to their success. 
			</p>
		</div>
      </article>


	<article>
        <h1>
          The Program
        </h1>
		<p class="intro">
       	Our youth will build product from Monday through Thursday, and then present on Friday.
   		</p>
		<div class="left45">
			<h2>The Sprint</h2>
			<p>
				Here's some text. Mention speakers
			</p>
		</div>
		<div class="right45">
			<h2>Demo Day</h2>
			<p>
				On Friday, April 24th, our young people will present to a room full of tech professionals. 
			</p>
		</div>
      </article>


	<article>
        <h1>
          The Speakers
        </h1>
		<p class="intro">
       	Here's some text about the speakers
   		</p>
		<div class="left45">
			<h2>Doug Turner</h2>
			<p>
				Here's some text. Mention speakers
			</p>
		</div>
		<div class="right45">
			<h2>Chris Swenor</h2>
			<p>
				VSnap, etc 
			</p>
		</div>
      </article>
	  
	
	<article>
        <h1>
          Sponsorship Opportunities
        </h1>
		
		<div class="left28">
			<h2>Gold - $5,000</h2>
			<p>
				Allows x number of students to do x
			</p>
			<ul>
				<li>Full page color ad in program</li>
				<li>Prominent mention in press release</li>
				<li>Prominent logo placement on event website</li>
			</ul>
		</div>
		<div class="left28">
			<h2>Gold - $5,000</h2>
			<p>
				Allows x number of students to do x
			</p>
		</div>
		<div class="right28">
			<h2>Chris Swenor</h2>
			<p>
				VSnap, etc 
			</p>
		</div>
      </article>
  
	
	<?php 
	/*
	SUMMER BOOTCAMP
	***************
	My time
	40hrs * $75/hr * 4wks = $12,000
	Interns
	40hrs * $20/hr * 4wks = $3,200
	Student mentors
	40hrs * $12/hr * 4wks * 2 students = $3,840
	Total === $19,040	
	
	POPUP
	******
	My time
	8hrs * $75 = $600
	
	SCHOOL YEAR
	************
	1st employee = $40,000
	
	FULL YEAR
	*********
	Me = $70,000
	One employee = $60,000
	Student mentors = $3,840
			
	*/
	?>
	
	
	
		
    </section>
  </body>
</html>

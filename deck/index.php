<?php require_once("../includes/password_protect_deck.php")  ?>


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
        <h1>
          Resilient Coders
        </h1>
		<p>
       Hacking the opportunity gap</p>
      </article>
	  
      <article>
        <h1>
          I'm the Silver Line Guy.
        </h1>
		<p>
       I ride the entire Silver Line, from Dudley Square to MassChallenge.</p>
	   <p>I have two friend groups. They don't know each other well.</p>
   </p>
      </article>
	  
      <article class="bg_blue">
        <h1>
          In the Innovation District, I'm...
        </h1>
		<ul>
			<li>Former Design Lead of the PayPal Media Network</li>
			<li>Instructor, speaker at Startup Institute</li>
			<li>Speaker at New England School of Art and Design</li>
			<li>Mentor at MassChallenge</li>
			<li>Co-founder of Start Tank</li>
			<li>Design consultant to startups</li>

		</ul>
      </article>
	  
      <article class="bg_red">
        <h1>
          In Roxbury, I've...
        </h1>
		<ul>
			<li>Founded Resilient Coders</li>
			<li>Run with underserved young people (Sole Train)</li>
			<li>Volunteered with BUILD Boston</li>
			<li>Trained 1-on-1 for the marathon with a young court-involved athlete</li>

		</ul>
      </article>
	  <article>
		  <h1>And here's what I've seen.</h1>
	  </article>
	  <article>
		  <h1></h1>
	  	<p class="grey">When I teach at paid institutions, almost everyone is white.</p> 
		<p class="red">When I teach behind bars, every single student is black or Hispanic. </p>

	  </article>
	  
	  <article>
		  <h1></h1>
	  	<p class="grey">My paying students are there to make a career jump into tech. 
</p> 
		<p class="red">I had a Hispanic student ask me if anyone ever gets paid to code.
</p>

	  </article>
	
		  <article>
			  <h1></h1>
		  	<p class="grey">One morning, I advised a pair of young entrepreneurs, whose parents supported their startup.
	</p> 
			<p class="red">That afternoon I met with a student whose mother had kicked him out of his house, leaving him without clothes, and without the portfolio with which he intended to apply to art school. 
(He's starting over.)
	</p>

		  </article>
		  
		  <article>
			  <h1></h1>
		  	<p>When Google was asked about their <a href="http://www.npr.org/blogs/alltechconsidered/2014/05/29/317024113/googles-white-male-heavy-staff-underlines-techs-diversity-problem" target="_blank">famous diversity problem,</a> they pointed out that Blacks and Hispanics make up under 10 percent of U.S. college grads and collect fewer than 5 percent of degrees in CS majors, respectively.</p> 

		  </article>
		  <article class="bg_red">
			  <h1></h1>
		  	<p>
		  		This is a social justice crisis.
		  	</p> 
			<p>
				But some people would also call this is a national security crisis.
			</p>

		  </article>
	
		  <article>
			<ul>
				
				<li><a href="http://www2.ed.gov/pubs/NatAtRisk/index.html" target="_blank">A Nation At Risk.</a> National Commission on Excellence in Education</li>
				<li><a href="http://www.whitehouse.gov/sites/default/files/microsites/ostp/workforcerpt.pdf" target="_blank">Ensuring a Strong US Scientific, Technical, and Engineering Workforce in the 21st Century.</a> National Science and Technology Council</li>
				<li><a href="http://www.ipadvocate.org/mission/pdfs/Knowledge%20Economy.pdf" target="_blank">The Knowledge Economy: Is the United States Losing its Competitive Edge?</a> Task Force on the Future of American Innovation</li>
				<li><a href="http://www.utsystem.edu/competitive/files/rags-fullreport.pdf" target="_blank">Rising Above the Gathering Storm.</a> National Academy of Sciences</li>
				<li><a href="http://www.urban.org/UploadedPDF/411562_salzman_Science.pdf" target="_blank">Into the Eye of the Storm: Assessing the Evidence on Science and Engineering 
Education, Quality, and Workforce Demand.</a> The Urban Institute</li>
				<li><a href="http://silvergiving.org/system/files/achievement_gap_report.pdf" target="_blank">The Economic Impact of the Achievement Gap in America's Schools.</a> McKinsey and Co.</li>
				<li><a href="http://www.hks.harvard.edu/pepg/PDF/Papers/PEPG11-03_GloballyChallenged.pdf" target="_blank">Globally Challenged: Are US Students Ready to Compete?</a> Harvard Kennedy School</li>
				<li><a href="http://www.militarychild.org/public/upload/images/TFR68_Education_National_Security.pdf" target="_blank">US Education Reform and National Security.</a> Council on Foreign Relations</li>
				<li><a href="http://www.amazon.com/The-U-S-Technology-Skills-Website/dp/1118477995" target="_blank">US Technology Skills Gap.</a> Gary Beach</li>
</ul>

		  </article>
		  
		  <article>
		  	<h1>The Big Picture</h1>
		  	<p>We're losing our edge in tech innovation. <b>We need all hands on deck. </b>
		  </p>
		  <p>(And that means raising more hands.)

		  </article>

		<article>
			<h1>Taking it Personally</h1>
			<p>Resilient Coders is a lecture-free model, during which students are expected to teach themselves to code. They have help from working professionals, but the onus to create is on the student. We make technology relevant to them, by presenting it as (1) a  medium for self-expression, and (2) an opportunity of gainful employment.</p>
		</article>
     
	 <article>
		 <h1>The Three-Tiered Model</h1>
		 <p>Partnership&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Bootcamp&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Employment</p>
		 
		</article>
		
		<article>
			<h1>1. Partnership</h1>
			<p>A collaboration with an existing community-based organization, usually 8 weeks long. Students are expected to finish a cohort with a simple website, and a basic understanding of HTML and CSS. The objective for this class is to spark interest among the youth, and hopefully hook the students.</p>
		</article>
		<article>
			<h1>2. Bootcamp</h1>
			<p>Four-week summer program, during which students hone their skills. Students are sourced from earlier partnership programs. Key learning principles run the gamut from technical and business skills, to professional development. They will learn how to collaborate with each other, how to interface with a client, and how to run a business. Second- and third-year students will be employed as mentors to the younger students, thus helping us scale.</p>
				
		</article>
		<article>
			<h1>3. Employment</h1>
			<p>We aim to help Boston reach <a href="http://www.bostonglobe.com/business/2014/08/17/walsh-falling-short-ambitious-goal-for-teen-jobs/WDbVb6QtsmLJ5zAzHf6C3I/story.html" target="_blank">its goals for youth employment.</a> When our students are ready, we will launch "Resilient Lab," an actual web design and development studio, run by Resilient staff. We will have real clients. And the students, under staff guidance and supervision, will work on these projects. They will be paid for their work, on a skill-based scale.</p>
				
		</article>	
		
		<article>
			<h1>Three-Tiered Objectives</h1>
			<p>We want to pull kids off the street. We want to give them the skills necessary to compete in the tech economy. And we want to give them real, professional experience.</p>
				
		</article>	
		<article>
			<h1>We've made some friends</h1>
			<p>
				<b>In government:</b> The Boston Police Department, The Mayor's Office of New Urban Mechanics, and the Department of Youth Services. <b>In Youth Development:</b>Trinity Boston Foundation, Girls Who Code, Possible Project, Press Pass TV, and the Justice Resource Institute. <b>In Tech Education:</b> The Startup Institute and Launch Academy. 
			</p>
				
		</article>
		
		<article>
			<h1>Early Successes, 5 months in</h1>
			<p>
				We've been selected to join the new cohort of <a href="http://tugg.org" target="_blank">TUGG,</a> and we won their "Tech Gives Back" event, bringing home <b>$50,000 in funding.</b> 
			</p>
			<p>
				We were selected for <a href="http://bostinno.streetwise.co/2014/06/26/startup-institutes-24-hour-ideahack-to-bolster-the-next-generation-of-resilient-coders/" target="_blank">the Startup Institute's IdeaHack.</a>
			</p>
			<p>
				And we've been awarded two grants from the Boston Police Department.</p>
				
		</article>
		
		
		<article>
			<h1>But what do the students think?</h1>
			<p>We polled our students anonymously. Students who <i>did not choose</i> to take this class.</p>
		</article>
		<article>
			<h1></h1>
			<p>
				<span class="red">61%</span> of students want to keep coding.<br/>
				<span class="red">85%</span> are more interested in technology now than they were before Resilient.
			</p>
			<p>
				And what was their favorite thing about Resilient Coders?</p>
		</article>

		<article>
			<h1></h1>
			<p>
				"The feeling you get after doing something on your own!!! Success!!!"
				
			</p>
			<p>
				"There's a lot of hands on experience with coding and that was really cool and fun. Resilient Coders is amazing and funnest thing I've ever done."
			</p>
			<p>
				"My favorite thing about this class is the meaning behind Resilient Coders."
			</p>
		</article>
		<article>
			<h1></h1>
			<p>
				"Learning that coding is something I can do."
			</p>
		</article>
		<article>
			<h1>Sustainability</h1>
			<p>Once our students have the aptitude necessary to begin charging for their work, we intend to unlock real-world employment opportunities for them by launching Resilient Lab, a web design/development studio. We expect Resilient Lab to be largely self-sufficient.</p>
			<p>But we need to get there first.</p>
		</article>
		<article>
			<h1>Maximizing our Impact</h1>
			
			<p>
We've received a grant from the Police Department for $24,500, to be used to teach behind bars. We've also won TUGG's Tech Gives Back event, and took home a $50,000 donation, which will help us start teaching at Boston Public Schools. We're off to a good start, but we have plans to do more. </p>
</article>
<article>
	
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
	
	
	<p>
		<h1>Maximizing our Impact</h1>
			<b>With every donation of $600, we can run a Popup cohort.</p> This means a class of students will build their own simple websites. With a gift of $20,000 we will be able to run our summer program, in which students will gain valuable real-world professional skills, and hone their technical aptitude.</b>
			</p>
		</article>
		
		<article>
			<h1>Thank You</h1>
			<p>
Resilient Coders is part of a movement. And a movement takes an engaged community. So thank you for your time and interest. 
			</p>
			<p>
				David Delmar&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;
				<a href="mailto:david@resilientcoders.org" target="_blank">david@resilientcoders.org</a>
				&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;
				617.850.2186&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;
				<a href="http://twitter.com/resilientcoders" target="_blank">@resilientcoders</a>
				
				
			</p>
		</article>	
		
    </section>
  </body>
</html>

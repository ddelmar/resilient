<?php include_once("../includes/head.php") ?>
<?php include_once("../includes/logo_nav.php") ?>

<div class="hero"></div>
<div id="container">
	<div class="team">
		<ul class="team_photos">
			
			<li class="David"><a href="#s_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
			<li class="Tyler"><a href="" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
			<li class="Mentor"><a href="#s_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
		</ul>

		<div class="team_hiddenCopy">
				<article>
						<div class="David">
							<h2>
								David Delmar
							</h2>
							<h3>CEO, Founder</h3>
							<div class="clr"></div>						
							<p>
	<a href="http://daviddelmarsenties.com">David</a> is building tomorrow's messenger.
							</p>
						</div><!-- /firehose -->
				</article>
			<article>
					<div class="Tyler">
						<h2>
							Tyler Mitchell
						</h2>
						<h3>Fall Program Director</h3>
						<div class="clr"></div>						
						<p>
<a href="http://tylerlmitchell.com">Tyler</a> is a virtual service that trains the next generation of web developers and technical talent.
						</p>
					</div><!-- /firehose -->
			</article>
			<article>
					<div class="Mentor">
						<h2>
							Mentor
						</h2>
						
						<div class="clr"></div>						
						<p>
<a href="http://tylerlmitchell.com">The Firehose Project</a> is a virtual service that trains the next generation of web developers and technical talent.
						</p>
					</div><!-- /firehose -->
			</article>
			
		</div><!--/team_copy-->
		<div id="s_detail"></div>
		
		<div class="team_writeup">
			<h2>The team</h2><div class="clr"></div>
			<p>
				The Resilient Coders team</a>
			</p>
			
		</div><!-- /team_writeup -->
	</div><!-- /team -->
<div class="partners" id="tier3">
		<ul class="partners_photos">
			
			<li class="BPD"><a href="#m_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
			<li class="TUGG"><a href="#m_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
			<li class="Goulston-Storrs"><a href="#m_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
			<li class="Allies"><a href="#m_detail" >
				<img src="i/partners/logo_skull.png" />
			</a></li>
		</ul>

		<div class="partners_hiddenCopy">
				<article>
						<div class="BPD">
							<h2>Boston Police Department</h2>
							<div class="clr"></div>						
							<p>We're indebted to the BPD Grants office; particularly to Cheryl Joyce, Laura Gross, Jason Whyte, and Demon Bills. They have been early and steadfast believers in Resilient Coders, and have provided us with the funding necessary to begin teaching behind bars. 
							</p>
						</div><!-- /BPD -->
				</article>
			<article>
					<div class="TUGG">
						<h2>
							Tyler Mitchell
						</h2>
						<div class="clr"></div>						
						<p>Resilient Coders is one of the new members of the TUGG portfolio, and the winner of<a href="http://tugg.org/techgivesback" target="_blank">Link TextTech Gives Back 2014. </a> We're enormously grateful to TUGG, and to its supporters. 
						</p>
					</div><!-- /TUGG -->
			</article>
			<article>
					<div class="Goulston-Storrs">
						<h2>Goulston & Storrs</h2>
						<div class="clr"></div>						
						<p>Resilient Coders is one of the new members of the TUGG portfolio, and the winner of<a href="http://tugg.org/techgivesback" target="_blank">Link TextTech Gives Back 2014. </a> We're enormously grateful to TUGG, and to its supporters. 
						</p>
					</div><!-- /TUGG -->
			</article>
			<article>
					<div class="Allies">
						<h2>Allies</h2>
						<div class="clr"></div>						
						<p>We've been lucky enough to work with some great change-makers in the space, including the Trinity Boston Foundation, Press Pass TV, the Mayor's Office of New Urban Mechanics, the Startup Institute, the Boston Center for Youth and Families, and of course the Department of Youth Services.</p>
					</div><!-- /TUGG -->
			</article>
			
			
			
		</div><!-- /partners_copy -->
		<div id="m_detail"></div>
		
		<div class="partners_writeup">
			<h2>Our Partners</h2><div class="clr"></div>
			<p>
				Resilient Coders' Partners
			</p>
			
		</div><!-- /partners_writeup -->
	</div><!-- /partners -->
	</div><!-- /container-->
	
	<?php include_once("../includes/footer.php") ?>
	
	<script type="text/javascript">
	$(document).ready(function() {
			$(".team_photos a").click(function(){
			var thisclass = $(this).parent().attr("class");
			var thiscontent = $(".team_hiddenCopy ." + thisclass).html();
			var thisSiblings = $(this).parent().siblings();
	//		alert(thisSiblings);
			$(thisSiblings).children().removeClass("selected").addClass("unselected");
			$(".team_photos ." + thisclass + " a").addClass("selected");
			$(".team_writeup").html(thiscontent);
		});
		$(".partners_photos a").click(function(){
				var thisclass = $(this).parent().attr("class");
				var thiscontent = $(".partners_hiddenCopy ." + thisclass).html();
				var thisSiblings = $(this).parent().siblings();
		//		alert(thisSiblings);
				$(thisSiblings).children().removeClass("selected").addClass("unselected");
				$(".partners_photos ." + thisclass + " a").addClass("selected");
				$(".partners_writeup").html(thiscontent);
			});
		
	});
	
	</script>
	
</body>
</html>

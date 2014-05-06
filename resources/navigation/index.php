<?php include('../_assets/includes/head.php'); ?>


<?php require_once("../_assets/includes/nav.php"); ?>


<div class="content_right">	
<h1 class="orange_copy"><span class="cat">The Nav</span></h1>

	<div class="margin4pc">
			<section>
			<h3>What this looks like in a browser</h3>

			<style>

			ul.navigation {
				float: left;
				width: 100%;
			}

			ul.navigation li {

			}

			ul.navigation li a {
				float: left;
				display: block;
				width: 20%;
				padding: 2%;
				text-align: center;
				text-decoration: none;
				display: block;
				color: #82d8eb;
				background: #ffffff;
			}

			ul.navigation li a:hover {
				color: #ffffff;
				background: #82d8eb;
				text-decoration: none;
			}

			</style>
			<ul class="navigation">
				<li>
					<a href="/" title="Home">Home</a>
				</li>
				<li>
					<a href="/about" title="Home">About</a>
				</li>
				<li>
					<a href="http://google.com" title="Link to Google">Google</a>
				</li>
				<li>
					<a href="http://ebay.com" title="Link to eBay">eBay</a>
				</li>
			</ul>
			</section>
			
			
		<section>
		<h3>HTML</h3>
			
		<pre>
&lt;ul class="navigation"&gt;
	&lt;li&gt;
		&lt;a href="/" title="Home"&gt;Home&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="/about" title="About"&gt;About&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="http://google.com" title="Link to Google"&gt;Google&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="http://ebay.com" title="Link to eBay"&gt;eBay&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
		</pre>
		</section>
		
		<section>
			<h3>CSS</h3>
			<pre>
ul.navigation {
	float: left;
	width: 100%;
}

ul.navigation li a {
	float: left;
	display: block;
	width: 20%;
	padding: 2%;
	text-align: center;
	text-decoration: none;
	display: block;
	color: #82d8eb;
	background: #ffffff;
}

ul.navigation li a:hover {
	color: #ffffff;
	background: #82d8eb;
	text-decoration: none;
}

</pre>
		</section>
		
	
		
		
</div><!-- /margin4pc -->
</div><!-- /content_log -->

<?php include('../_assets/includes/footer.php'); ?>

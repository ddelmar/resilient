<?php include('../_assets/includes/head.php'); ?>


<?php require_once("../_assets/includes/nav.php"); ?>


<div class="content_right">	
<h1 class="orange_copy"><span class="cat">Standard two-column layout example</span></h1>

	<div class="margin4pc">
		<section>
			<h3>What this looks like in a browser</h3>
<style>
.container {
	width: 100%;
	margin: 0px auto;
	text-align: left;
}

.container * {
	margin: 6px 0;
	color: #ffffff;
}

.container p {
	padding: 12px;
}

.header {
	width: 100%;
	height: 200px;
	background: #d24836;
}

.navig, .footer {
	width: 100%;
	background: #4e4e4e;
	display: block;float: left;
}

.content {
	width: 100%;
	float: left;
	display: block;
	padding: 0;
}

.content_main, .content_sidebar {
	float: left;
	display: block;
}

.content_main {
	width:69%;
	height: 300px;
	margin: 0 1% 0 0;
	background: #82d8eb;
}

.content_sidebar {
	width: 30%;
	height: 300px;
	margin: 0;
	background: #b2f1ff;
}


</style>
<div class="container">
	<div class="header"><p>Header</p></div>
	<div class="navig"><p>Nav</p></div>
	<div class="content">
		<div class="content_main"><p>Content</p></div>
		<div class="content_sidebar"><p>Sidebar</p></div>
	</div>
	<div class="footer"><p>Footer</p></div>
</div>
			
</section>
		
		
<section>
<h3>HTML and CSS</h3>
<pre>
&lt;style&gt;
	.container {
		width: 100%;
		margin: 0px auto;
		text-align: left;
	}

	.container * {
		margin: 6px 0;
		color: #ffffff;
	}

	.container p {
		padding: 12px;
	}

	.header {
		width: 100%;
		height: 200px;
		background: #d24836;
	}

	.navig, .footer {
		width: 100%;
		background: #4e4e4e;
		display: block;float: left;
	}

	.content {
		width: 100%;
		float: left;
		display: block;
		padding: 0;
	}

	.content_main, .content_sidebar {
		float: left;
		display: block;
	}

	.content_main {
		width:69%;
		height: 300px;
		margin: 0 1% 0 0;
		background: #82d8eb;
	}

	.content_sidebar {
		width: 30%;
		height: 300px;
		margin: 0;
		background: #b2f1ff;
	}
&lt;/style&gt;

&lt;div class="container"&gt;
	&lt;div class="header"&gt;&lt;p&gt;Header&lt;/p&gt;&lt;/div&gt;
	&lt;div class="navig"&gt;&lt;p&gt;Nav&lt;/p&gt;&lt;/div&gt;
	&lt;div class="content"&gt;
		&lt;div class="content_main"&gt;&lt;p&gt;Content&lt;/p&gt;&lt;/div&gt;
		&lt;div class="content_sidebar"&gt;&lt;p&gt;Sidebar&lt;/p&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="footer"&gt;&lt;p&gt;Footer&lt;/p&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
</section>	


<section>
			<h3>Tips</h3>
			<p>
_ These elements have defined heights. Once they're full of content, you'll want to take out the height.<br />
_ Make sure to "float" elements that are next to each other. And "float" their parent too.<br />
_ Floated elements must have declared widths. And those widths should add up to 100%.<br />
_ Margin and padding count towards your 100%. So if you have two elements next to each other, and they're each 50%, you'll need to make room for margin and padding.				
		</section>
		</div>
</div><!-- /margin4pc -->
</div><!-- /content_log -->

<?php include('../_assets/includes/footer.php'); ?>

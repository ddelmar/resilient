<?php include('../_assets/includes/head.php'); ?>


<?php require_once("../_assets/includes/nav.php"); ?>


<div class="content_right">	

<h1 class="orange_copy"><span class="cat">CSS Overview</span></h1>

	<div class="margin4pc">
		
		<section>
			<h3>What is CSS?</h3>
			<p>CSS (Cascading Stylesheets) add style to your website, so that it's not just boring black text against a white background. Suppose we have this snippet of markup:</p>
<p>
<pre>
&lt;div class="example"&gt;
	&lt;p&gt;Here's a paragraph.&lt;/p&gt;
&lt;/div&gt;
</pre>
</p>
<p style="width: 100%; clear:both;"><br /><br />Let's add some design elements to this, by adding a style rule to our stylesheet (CSS file). Note that our paragraph has a parent div, with a class called "example." This is important for the CSS, and helps us identify the specific element we're trying to design.</p>
		
</section>

<section>
<h3>CSS</h3>
<pre>
.example p {
	font: italic 1.4em Garamond;
	background: #333333;
	color: #ffffff;
	padding: .2em;
}
</pre>
<p><br /><br />The first part refers to the parent: <strong>.example</strong>. That period before the word "example" means "this is the class name." The second part, <strong>p</strong>, is the element that we're targeting. So <strong>.example p</strong> means "inside the element called 'example,' find the paragraph." If there's more than one paragraph, the style rule will apply to all of them.</p>
</section>	
		
			<section>
			<h3>What this looks like in a browser</h3>
			<div class="clr"></div>

<style>
.example p {
	font: italic 1.4em Garamond;
	background: #333333;
	color: #ffffff;
	padding: .2em;
}
</style>
<div class="example">
	<p>Here's a paragraph.</p>
</div>
	
		
		
</div><!-- /margin4pc -->
</div><!-- /content_log -->

<?php include('../_assets/includes/footer.php'); ?>

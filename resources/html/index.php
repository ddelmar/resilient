<?php include('../_assets/includes/head.php'); ?>


<?php require_once("../_assets/includes/nav.php"); ?>


<div class="content_right">	
<h1 class="orange_copy"><span class="cat">HTML Overview</span></h1>

	<div class="margin4pc">
		<section>
			<h3>What does HTML even look like?</h3>
			<p>It's just a series of "tags" that you'd write in order to render "elements" like paragraphs, images, links, and other stuff. For example, if you want to render a paragraph, you might write something like this in your document: </p>
			<pre>&lt;p&gt;Here's a paragraph.&lt;/p&gt;</pre><br /><br />
			<p>If you want to show a link, it looks like this:</p>
			<pre>&lt;a href="http://google.com"&gt;This will render a link to Google&lt;/a&gt;</pre><br /><br />
			<p>Any website you're on, you can "View Source," and see the HTML (or "markup") that renders all the stuff you see on the website. It will look sort of like the example below. Copy and paste that example into your text file, and then save that file with a name like "index.html." Then if you drag that file into a browser like Chrome or Firefox, you'll see a very simple website.</p>
		
		</section>
		<section>
			<h3>HTML</h3>	
		<pre>
&lt;!doctype&gt;
&lt;html&gt;

&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /&gt;
&lt;meta name="description" content="Here's a description of the site" /&gt;

&lt;link href="/c/master.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://resilientcoders.org/c/master.css" rel="stylesheet" type="text/css" /&gt;
&lt;/head&gt;

&lt;title&gt;This is the title of the page&lt;/title&gt;
&lt;body&gt;
	&lt;h1&gt;This is the main "headline" of the page. There should only be one.&lt;/h1&gt;
	&lt;h2&gt;This is also a headline, but you can have more.&lt;/h2&gt;
	&lt;h3&gt;Yup, there's even an h3&lt;/h3&gt;

	&lt;div&gt;This is a "div" element. Note that this div is a "parent" containing three "child elements."
		&lt;p&gt;This is a paragraph. And it's the div's first child element.&lt;/p&gt;
		&lt;ul&gt;This is an "unordered list." It's the div's second child. But it also has its own children.
			&lt;li&gt;List item number one&lt;/li&gt;
			&lt;li&gt;List item number two&lt;/li&gt;
		&lt;/ul&gt;
		&lt;img src="http://i.imgur.com/QFdPxZF.gif" alt="Image of a dancing baby" /&gt;
	&lt;/div&gt;&lt;!-- End of the div --&gt;

	&lt;div id="links" class="highlight"&gt;Here's another div. Remember, each ID should only appear once.
		&lt;ul&gt;
			&lt;li&gt;&lt;a href="/"&gt;This is a relative link to our website's "root."&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="http://resilientcoders.org"&gt;This is an absolute link to the homepage.&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="mailto:david@resilientcoders.org?subject=Hey"&gt;This is a link to send me an email.&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;&lt;!-- End of the div --&gt;


&lt;!-- This is a JavaScript file --&gt;
&lt;script type="text/javascript" src="/j/nbw-parallax.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
		</section>
		</div>
</div><!-- /margin4pc -->
</div><!-- /content_log -->

<?php include('../_assets/includes/footer.php'); ?>

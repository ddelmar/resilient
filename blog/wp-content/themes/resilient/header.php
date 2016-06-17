<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Resilient
 * @since Resilient
 */

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta property="og:title" content="Hacking the opportunity gap" />
	<meta property="og:site_name" content="Resilient Coders"/>
	<meta property="og:url" content="http://resilientcoders.org" />
	<meta property="og:image" content="https://resilientcoders.s3.amazonaws.com/i/logo_redBG.jpg" />

	<meta property="og:description" content="Resilient Coders is a free, volunteer-based program focused on making web technology more available to kids who might not otherwise be exposed to it. Each student builds his or her own website, coached along by a web professional." />
	<meta name="google-site-verification" content="f1yFN-l0cdp3rP6UOlZgka1_o77_-WzW-ZyGAe5KC-U" />

<link href="/c/master.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://resilientcoders.s3.amazonaws.com/i/favicon.gif" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="/j/resilient.js"></script>
<script type="text/javascript" src="/j/nbw-parallax.js"></script>

<title><?php
	$uri = "{$_SERVER['REQUEST_URI']}";
	$uri_clean = ucwords(basename($uri));
	$pagetitle = "body_" . basename($uri);
	if ($uri_clean == NULL){ echo "Resilient Coders";}
	else { echo $uri_clean . " | Resilient Coders"; }

?></title>

</head>

<body class="<?php echo $pagetitle; ?>">
<style>
#nav li a.<?php echo $uri_clean; ?> {
	/* border-bottom: 4px solid #ed1b24; */
	color: #999;
}
</style>




<div id="logo_nav">
	<div id="logo">
		<a href="/">
			<img src="https://resilientcoders.s3.amazonaws.com/i/logo_redBG.jpg">
		</a>
	</div>
	<img src="https://resilientcoders.s3.amazonaws.com/i/nav_button.png" class="mobileonly nav_button" />
	<img src="https://resilientcoders.s3.amazonaws.com/i/nav_x.png" class="mobileonly nav_x" />
	<ul id="nav">
		<li>
			<a class="Program" href="/program/">Program</a>
		</li>
		<li>
			<a class="Team" href="/team/">Team</a>
		</li>
		<li>
			<a class="Bootcamp" href="/bootcamp/">Bootcamp</a>
		</li>
		<li>
			<a class="Lab" href="/lab/">Lab</a>
		</li>
		<li>
			<a class="News" href="/news/">News</a>
		</li>
		<li>
			<a class="Donate" href="/donate/">Donate</a>
		</li>
		<?php /*
		<li>
			<a class="Job" href="/job/">We're Hiring Instructors</a>
		</li>

		<li>
			<a class="Camp" href="/camp/">Camp</a>
		</li>

		*/ ?>

	</ul>
</div>

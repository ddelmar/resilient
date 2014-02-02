<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" >
<head> 
	<meta http-equiv="cache-control" content="no-cache" /> 
	<meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml" /> 
	<meta name="HandheldFriendly" content="True" /> 
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link href="/c/master.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/i/favicon.gif" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
});
</script>
<title><?php 
	$uri = "{$_SERVER['REQUEST_URI']}";
	$uri_clean = ucwords(basename($uri));
	$pagetitle = "body_" . basename($uri);
	if ($uri_clean == NULL){ echo "Resilient Lab";}
	else { echo $uri_clean . " | Resilient Lab"; }

?></title>

</head>

<body class="<?php echo $pagetitle; ?>">
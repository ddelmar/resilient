<?php

# Load Twitter class
require_once('TwitterOAuth.php');

# Define constants
define('TWEET_LIMIT', 1);
define('TWITTER_USERNAME', 'resilientcoders');
# define('HASHTAG', 'Brandathon2014');
define('CONSUMER_KEY', 'yWCr0xcfJR3rJHh30TPir7C2k');
define('CONSUMER_SECRET', '7HXJo9fmkdqRcTjEdaLS8xbCEqyS9VNIymOQusgkE59ugnjdW7');
define('ACCESS_TOKEN', '2541873636-LoRMAAHcMnXLxDSU4Oxn1xrHwDMAzwqImuXVHbW');
define('ACCESS_TOKEN_SECRET', 'hpUEOdFRWeoOkuFIUrM7Wxk856K6eaCWvJNfpWrr3j8x5');

# Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

# Migrate over to SSL/TLS
$twitter->ssl_verifypeer = true;

# Load the Tweets

$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'true', 'count' => TWEET_LIMIT));

# Example output

if (is_array($tweets))
{
    foreach($tweets as $tweet) {
     

$tweetText = $tweet['text'];


		
        $tweetText = preg_replace("/(http:\/\/|(www\.))(([^\s<]{4,68})[^\s<]*)/", '<a href="http://$2$3" target="_blank" >$1$2$4</a >', $tweetText);
		

		echo mb_convert_encoding(
		    $tweetText, "HTML-ENTITIES", "UTF-8"
		  );

}
}

?>
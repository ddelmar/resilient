<?php
# Load Twitter class
require_once('TwitterOAuth.php');

# Define constants
define('TWEET_LIMIT', 1);
define('TWITTER_USERNAME', 'starttank');
define('HASHTAG', 'Brandathon2014');
define('CONSUMER_KEY', 'taDWEo0vTgfYx3Zg6sIveUi4x');
define('CONSUMER_SECRET', 'XhszlY8MWBxhZIWmzRrnHgJVPIYhb5XOwnEQWKBysKuAaNCEJd');
define('ACCESS_TOKEN', '1400464639-twBDRntof7DJ3BrEocuLnp6seOWatRHlRpKytVj');
define('ACCESS_TOKEN_SECRET', 'w0krVlFnKfbnHAmeYzsGPegjELqvaXHyHUtF6Ol10gHOy');

# Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

# Migrate over to SSL/TLS
$twitter->ssl_verifypeer = true;

# Load the Tweets
/*
************************************************
LOADING ONLY STARTTANK'S TWEETS LOOKS LIKE THIS:
$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'true', 'count' => TWEET_LIMIT));
************************************************
*/

$tweets = $twitter->get('search/tweets', array('q' => 'brandathon2014', 'count' => TWEET_LIMIT));


print_r($tweets);



?>
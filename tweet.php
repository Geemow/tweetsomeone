<?php

	date_default_timezone_set('GMT');

	require('TwitterBot.php');

	header('Content-Type: text/html; charset=utf-8');

	$Consumer_key = "YourConsumerKey";
	$Consumer_secret = "YourConsumerSecret";
	$Access_token = "YourAccessToken";
	$Access_token_secret = "YourAccesTokenSecret";

	$twitter = new TwitterBot($Consumer_key, $Consumer_secret);
	$twitter->setToken($Access_token, $Access_token_secret);

	$twitter->ennui();
	
?>

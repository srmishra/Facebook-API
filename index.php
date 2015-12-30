<?php
	require_once("facebook-sdk/src/facebook.php");
	$config = array();
	
	$config['appId'] = 'Your APP ID';
	$config['secret'] = 'Your APP Secret Key';
	$accessToken = "Your APP Access Token";
	
	$config['fileUpload'] = false; // optional
	$fb = new Facebook($config);

	{
		$my_profile = array(
			"access_token" => $accessToken,
			"fields" => "id,name,birthday,education,work"
		);
		
		try {
			$ret = $fb->api('/me', 'GET', $my_profile);
			echo 'Profile Information ::<br><br><pre>';
			print_r($ret);
			echo '</pre>';
		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}
	
	if(1) {
		$post_new = array(
			"access_token" => $accessToken,
			"message" => "Here is a blog post about auto posting on Facebook using PHP #php #facebook",
			"link" => "http://www.pontikis.net/blog/auto_post_on_facebook_with_php",
			"picture" => "http://i.imgur.com/lHkOsiH.png",
			"name" => "How to Auto Post on Facebook with PHP",
			"caption" => "www.pontikis.net",
			"description" => "Automatically post on Facebook with PHP using Facebook PHP SDK. How to create a Facebook app. Obtain and extend Facebook access tokens. Cron automation."
		);
		
		try {
			$ret = $fb->api('/Your User ID/feed', 'POST', $post_new);
			echo 'Successfully posted to Facebook';
		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}

?>

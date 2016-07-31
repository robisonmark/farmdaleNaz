<?php 
	require_once('./includes/functions.php');
		// require_once __DIR__ . '/includes/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php';

// 		$fb = new Facebook\FacebookApp('300796576938021', '7cb1f06939ce4978ce25a9500b39df62');
// 		$request = new Facebook\FacebookRequest($fb, 'LGf5l4ZAJ1-NMAfn_SAq-Y7WCCo', 'GET', '/me' );
// 		try {
//   $response = $fb->getClient()->sendRequest($request);
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// $graphNode = $response->getGraphNode();

// echo 'User name: ' . $graphNode['name'];

		render('/header');

		render('/hero'); 

		render('/welcome');

		render('/new');

		render('/ministries');

		render('/events');
		
		render('/about');
		
		render('/beliefs');
		
		render('/picture-bar');

		render('/staff');

		render('/map');

		// render('/baseline');

		render('/footer');	
		// require_once('./views/footer.php'); 
	?>
<?php

$fb = new \Facebook\Facebook([
  'app_id' => '899573700188778',
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.6',
  //'default_access_token' => 'EAACEdEose0cBAPe2L4FUXvzZBbRba12t5GLDFjus2xLXsFY7LAFPZAEc83UQZCqvEb58uI6cd8oOAHfkw5wt8HsZChmB2rQYvdHCxyFUpV1XZAA1GALpbBmNqhnhWX8UScA1DUBVZCvJYteKog9WN7SigdRhbO9kvobPaBwOfhOAZDZD', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me', 'EAACEdEose0cBAPe2L4FUXvzZBbRba12t5GLDFjus2xLXsFY7LAFPZAEc83UQZCqvEb58uI6cd8oOAHfkw5wt8HsZChmB2rQYvdHCxyFUpV1XZAA1GALpbBmNqhnhWX8UScA1DUBVZCvJYteKog9WN7SigdRhbO9kvobPaBwOfhOAZDZD');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();



	$request = new FacebookRequest(
  $session,
  'GET',
  '/385515538258712/feed'
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */

?>
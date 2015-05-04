<?php
	require_once ("kakao.config.php");

	$code   = $_GET["code"]; 
	$params = sprintf( 'grant_type=authorization_code&client_id=%s&redirect_uri=%s&code=%s', $kakao_app_id, $kakao_redirect, $code); 

	$options = array( 
		CURLOPT_URL => $kakao_get_token, 
		CURLOPT_SSL_VERIFYPEER => false, 
			CURLOPT_SSLVERSION => 1,
		CURLOPT_POST => true, 
		CURLOPT_POSTFIELDS => $params, 
		CURLOPT_RETURNTRANSFER => true, 
		CURLOPT_HEADER => false 
	 ); 

	 $curl = curl_init(); 
	 curl_setopt_array($curl, $options); 
	 $tokenjson = curl_exec($curl); 
	 curl_close($curl); 

	 $arr = json_decode($tokenjson,true);
	 $token = $arr['access_token'];
	 $refresh_token = $arr['refresh_token'];

	  if($token){
		 $opts = array( 
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}"
			),
			CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/isstoryuser", 
			CURLOPT_SSL_VERIFYPEER => false, 
				CURLOPT_SSLVERSION => 1,
			CURLOPT_POST => false, 
			CURLOPT_RETURNTRANSFER => 1, 
			);

			$curl = curl_init();
			curl_setopt_array($curl, $opts);
			$result = curl_exec($curl);
			curl_close($curl);
			$rsarr = json_decode($result, true);
			if($rsarr['isStoryUser']) {
				$_SESSION['token']=$token;
				$_SESSION['refresh_token']=$refresh_token;

				header('Location:./kakao.write.php');
			}
	 }

?>

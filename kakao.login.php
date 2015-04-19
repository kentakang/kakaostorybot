<?php

	include "index.php";
	$redirect = $domain,"/kakao.login.php";
	
	$code = $_GET['code'];
	$params = sprintf('grant_type=authorization_code&client_id%s&redirect_uri=%scode=%s', $api_key, $redirect, $code);

	$opts = array(
		CURLOPT_URL => $token_api,
		CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSLVERSION => 1,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $params,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HEADER => false
	);

	$curl = curl_init();
	curl_setopt_array($curl, $opts);
	$token = curl_exec($curl);
	curl_close($curl);

?>

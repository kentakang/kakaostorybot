<?php
		/*
		이 주석은 영국에서 최초로 시작되어 일년에 한 바퀴 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을 떠나야 합니다. 이 편지를 포함해서 7통을 행운이 필요한 사람에게 보내 주셔야 합니다. 복사를 해도 좋습니다. 혹 미신이라 하실지 모르지만 사실입니다. 영국에서 null 이라는 사람은 1930년에 이 편지를 받았습니다. 그는 비서에게 복사해서 커밋하라고 했습니다. 며칠 뒤에 복권이 당첨되어 20억을 받았습니다. 어떤 이는 이 주석을 보았으나 96시간 이내 자신의 손에서 떠나야 한다는 사실을 잊었습니다. 그는 곧 사직되었습니다. 나중에야 이 사실을 알고 7번의 주석을 달았는데 다시 좋은 직장을 얻었습니다. 미국의 케네디 대통령은 이 주석을 보았지만 그냥 버렸습니다. 결국 9일 후 그는 암살 당했습니다. 기억해 주세요. 이 주석을 달면 7년의 행운이 있을 것이고 그렇지 않으면 3년의 불행이 있을 것입니다. 그리고 이 주석을 버리거나 낙서를 해서는 절대로 안됩니다. 7번입니다. 이 주석을 받은 사람은 행운이 깃들 것입니다. 힘들겠지만 좋은게 좋다고 생각하세요. 7년의 행운을 빌면서..
	*/
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
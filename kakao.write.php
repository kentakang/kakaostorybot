<?php
	require_once ("kakao.config.php"); // 기본 설정 불러오기

	$token = $_SESSION['token'];
	$refresh_token = $_SESSION['refresh_token'];

	$i = 1;

	ini_set('max_execution_time', 0);

	while ($i < 2) {
		$rand_num = rand(1,10); // 1부터 10중 랜덤으로 생성
		switch($rand_num) {
			case "1" :
				$params = sprintf( 'content=첫번째 스토리&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "2" :
				$params = sprintf( 'content=2&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "3" :
				$params = sprintf( 'content=3&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "4" :
				$params = sprintf( 'content=4&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "5" :
				$params = sprintf( 'content=5&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "6" :
				$params = sprintf( 'content=6&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "7" :
				$params = sprintf( 'content=7&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "8" :
				$params = sprintf( 'content=8&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "9" :
				$params = sprintf( 'content=9&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "10" :
				$params = sprintf( 'content=10&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
		}
		sleep(600);
	}
?>

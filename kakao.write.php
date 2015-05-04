<?php
	require_once ("kakao.config.php"); // 기본 설정 불러오기

	$i = 1;

	ini_set('max_execution_time', 0);

	function kakao_posting($content, $permission, $enable_share) {
		$token = $_SESSION['token'];
		$params = sprintf('content='.$content.'&permission='.$permission.'&enable_share='.$enable_share);
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
		echo $result;
		curl_close($curl);
	}

	kakao_posting('test', 'F', 'true');
?>

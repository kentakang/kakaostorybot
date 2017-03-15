<?php
	require_once ("story.config.php");

	// 프로필 요청 api
	function kakao_getprofile() {
		$token = $_SESSION['token'];
		$opts = array(
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}"
			),
			CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/profile",
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
	
	// 포스팅 api
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

	// 단일 스토리 정보 요청 api
	function kakao_getstoryinfo($id) {
		$token = $_SESSION['token'];
		$params = sprintf('id='.$id);
		$opts = array( 
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}"
			),
			CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/mystory", 
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
	// 복수 스토리 정보 요청 api
	function kakao_getmstoryinfo($last_id) {
		$token = $_SESSION['token'];
		$params = sprintf('last_id='.$last_id);
		$opts = array( 
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}"
			),
			CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/mystories", 
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

	// 스토리 삭제 api
	function kakao_storydelete($id) {
		$token = $_SESSION['token'];
		$params = sprintf('id='.$id);
		$opts = array( 
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}"
			),
			CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/delete/mystory", 
			CURLOPT_SSL_VERIFYPEER => false, 
				CURLOPT_SSLVERSION => 1,
			CURLOPT_CUSTOMREQUEST => "DELETE",
			CURLOPT_POSTFIELDS => $params, 
			CURLOPT_RETURNTRANSFER => true, 
		);
		$curl = curl_init();
		curl_setopt_array($curl, $opts);
		$result = curl_exec($curl);
		echo $result;
		curl_close($curl);
	}
?>

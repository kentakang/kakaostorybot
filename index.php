<?php
	include "kakao.config.php";
?>
<a href="https://kauth.kakao.com/oauth/authorize?client_id=<?=$api_key?>&redirect_uri=<?=$domain?>/kakao.login.php&response_type=code">카카오 로그인</a>

<?php
	require_once ("story.config.php");
?>
<a href="https://kauth.kakao.com/oauth/authorize?client_id=<?=$kakao_app_id?>&redirect_uri=<?=$kakao_redirect?>&response_type=code"><img src="login.png" alt="로그인"></a>

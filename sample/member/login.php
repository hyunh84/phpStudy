<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<? include "../include/head02.php"; ?>


<script type="text/javascript">

</script>
</head>
<body>
<nav class="skip">
	<ul>
		<li><a href="#contents">본문바로가기</a></li>
	</ul>
</nav>

<!-- wrap -->
<div id="wrap">
	<!-- header -->
	<? include "../include/top.php"; ?>
	<!-- //header -->

	<!-- gnb -->
	<? include "../include/gnb.php"; ?>
	<!-- //gnb -->

	<!-- container -->
	<div id="container">
		<span id="jumpConts" class="blind" tabindex="0">메인 본문영역</span>
		<!-- page title &amp; location -->

		<!-- contents -->
		<div id="contents">
			<form action="" method="POST" >
				<!-- 로그인 화면 -->
				<div class="loginWrap">
					<div class="loginInner">
						<div class="tnbTit">
							<h3 class="tit">카페베네에 오신 것을 환영합니다</h3>
							<p class="copy">웹사이트 이용을 위해 로그인을 해주세요</p>
						</div>
						<ul class="loginForm">
							<li>
								<label class="inpPlacehoder">
									<span>아이디를 입력해 주세요</span>
									<input type="text" class="txtInput" style="width:100%;">
								</label>
							</li>
							<li>
								<label class="inpPlacehoder">
									<span>비밀번호를 입력해 주세요</span>
									<input type="text" class="txtInput" style="width:100%;">
								</label>
							</li>
							<li class="btnLogin">
								<label class="designCheck">
									<input type="checkbox" class="check" > 아이디 저장
								</label>
								<button type="button" class="btn02">로그인</button>
							</li>
							<li class="btnJoin">
								<span>아직 카페베네 회원이 아닌신가요?</span>
								<a href="/phpStudy/sample/member/join.php" class="btn02">회원가입</a>
							</li>
							<li class="btnFindUser">
								<p>고객님! 아이디, 비밀번호를 잊으셨나요?</p>
								<div class="btnBox">
									<a href="#" class="btn01">아이디 찾기</a>
									<a href="#" class="btn01">비밀번호 찾기</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /로그인 화면 -->
			</form>

<script type="text/javascrit">

</script>



		</div>
		<!-- //contents -->
	</div>
	<!-- //container -->

	<!-- snb -->
	<? include "../include/snb.php"; ?>
	<!-- //snb -->
	<? include "../include/footer.php"; ?>
	<!-- footer -->
</div>
<!-- //wrap -->
</body>
</html>

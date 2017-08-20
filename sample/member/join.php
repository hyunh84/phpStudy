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
			<div class="joinStep">
				<p class="stepImg"><img src="/phpStudy/sample/resources/image/common/join_step03.gif" alt="1.본인확인 &gt; 2.약관동의 &gt; 3.정보입력 &gt; 4.가입완료" /></p>
				<h3 class="blind">3. 정보입력</h3>
			</div>

			<form action="" method="POST" >
				<!-- 회원가입 정보입력 -->
				<div class="viewWrap">
					<ul>
						<li>
							<strong class="cell_th">이름</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="이름을 입력하세요." style="width:60%;">
							</div>
						</li>
						<li>
							<strong class="cell_th">아이디</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="아이디을 입력하세요." style="width:60%;">
								<a href="#" class="btn01">중복확인</a>
								<div class="txtDiv">6~12자의 영문+숫자만 가능합니다.</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">비밀번호</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="비밀번호을 입력하세요." style="width:60%;">
								<div class="txtDiv">비밀번호는 6자리 이상이며, 숫자영문 혼용은 필수입니다.</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">비밀번호 확인</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="비밀번호 확인을 위해 재입력하세요." style="width:60%;">
								<div class="txtDiv">입력하신 비밀번호를 확인합니다.</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">핸드폰</strong>
							<div class="cell_td">
								<div class="phoneForm">
									<span class="telFrontNum">
										<span class="select_custom">
											<span>010</span>
											<select class="select" title="핸드폰 앞자리를 선택하세요.">
												<option>010</option>
												<option>011</option>
												<option>016</option>
												<option>018</option>
												<option>019</option>
											</select>
										</span>
									</span>
									<span class="dash">-</span>
									<span>
										<input type="text" class="txtInput" title="핸드폰 중간번호 4자리를 입력하세요." style="width:100%;">
									</span>
									<span class="dash">-</span>
									<span>
										<input type="text" class="txtInput" title="핸드폰 마지막 번호 4자리를 입력하세요." style="width:100%;">
									</span>
								</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">이메일</strong>
							<div class="cell_td">
								<div class="emailForm">
									<span>
										<input type="text" class="txtInput" title="이메일 아이디를 입력하세요." style="width:100%;" />
									</span>
									<span class="emailAt">@</span>
									<span>
										<input type="text" class="txtInput" title="이메일 도메인을 입력하세요." style="width:100%;" />
									</span>
									<span class="domainSelect">
										<span class="select_custom">
											<span>직접선택</span>
											<select class="select" title="이메일 도메인을 선택하세요.">
												<option>직접선택</option>
												<option>naver.com</option>
												<option>hanmail.net</option>
												<option>nate.com</option>
												<option>daum.net</option>
											</select>
										</span>
									</span>
								</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">생년월일</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="생년월일을 입력하세요." style="width:50%;" />
								<div class="txtDiv">예)19840503</div>
							</div>
						</li>
						<li>
							<strong class="cell_th">멤버쉽</strong>
							<div class="cell_td">
								<input type="text" class="txtInput" title="멤버쉽을 입력하세요." style="width:60%;">
								<div class="txtDiv">회원님께서 보유하고 계신 카페베네 멤버십 카드번호를 입력해주시기 바랍니다.</div>
							</div>
						</li>
					</ul>
				</div>
				<script type="text/javascript">
					/* 디자인 라디오박스 */
					designRadio.init('nationality');
					designRadio.init('birthDay');
				</script>
				<!-- //회원가입 정보입력 -->

				<div class="btnPageWrap type02">
					<a href="/phpStudy/sample/member/login.php" class="btn01">취소</a>
					<a href="#" class="btn02">등록</a>
				</div>

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

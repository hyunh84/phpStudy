<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<? include "./include/head.php"; ?>


<script type="text/javascript">
$(document).ready(function() {
	var sect01 = new Swipe($('.sect01')[0], {
		speed: 400,
		auto: 7000,
		continuous: true,
		disableScroll: false,
		stopPropagation: true,
		callback: function(index, elem) {
			$('.sect01 .indicateWrap button').removeClass('on').eq(index).addClass('on');
		}
	});

	$('.sect01 .indicateWrap button').click(function() {
		var _this = $(this);
		var _index = _this.index();
		sect01.slide(_index);
	});
});
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
	<? include "./include/top.php"; ?>
	<!-- //header -->

	<!-- gnb -->
	<? include "./include/gnb.php"; ?>
	<!-- //gnb -->

	<!-- container -->
	<div id="container">
		<span id="jumpConts" class="blind" tabindex="0">메인 본문영역</span>
		<!-- page title &amp; location -->
		<div class="sect01">
			<ul class="swipe-wrap">
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp01.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp02.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp03.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp04.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp05.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="imgBox"><img src="/phpStudy/sample/resources/image/temp/main_temp06.jpg" alt=" Love You Berry Much ! Strawberry for Darling 상큼하고 달콤한 생딸기와 사랑에 빠지는 순간을 느껴보세요" /></span>
						<span class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></span>
					</a>
				</li>
			</ul>
			<div class="indicateWrap">
				<button type="button" class="on"><span class="blind">1번째</span></button>
				<button type="button"><span class="blind">2번째</span></button>
				<button type="button"><span class="blind">3번째</span></button>
				<button type="button"><span class="blind">4번째</span></button>
				<button type="button"><span class="blind">5번째</span></button>
				<button type="button"><span class="blind">6번째</span></button>
			</div>
		</div>
		<!-- //sect01 -->

		<!-- sect02 : Enjoy the Caffe Bene -->
		<div class="sect02">
			<div class="sectInner">
				<div class="discript">
					<div class="titWrap">
						<h2 class="tit"><span>Enjoy the</span> Caffe Bene</h2>
						<p class="titCopy">카페베네와 함께하는 또 다른 재미로 당신을 초대합니다.</p>
					</div>
					<p class="conTxt">카페베네와 함께하는 즐거운 이벤트에 당신을 초대합니다. <br />카페베네를 경험하고, 카페베네와 함께 즐기고, <br />카페베네에서 공감할수 있는 풍성한 이벤트가 <br />당신을 기다리고 있습니다. </p>
				</div>
				<a href="#" class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more02.png" alt="더보기" /></a>
			</div>
		</div>
		<!-- //sect02 : Enjoy the Caffe Bene -->

		<!-- sect03 : Farm To Table -->
		<div class="sect03">
			<div class="sectInner">
				<div class="discript">
					<h2 class="tit">Farm To Table</h2>
					<p class="titCopy">커피 원두 한 알의 신선함이 테이블에 도착하기까지 <br />특별한 커피의 이야기가 시작됩니다.</p>
					<p class="conTxt">카페베네에서는 산지별 특징을 최대한 살리고 <br />커피 원두 본연의 맛을 최적화 하는 미디엄 로스팅 기법으로 <br />언제 어디서나, 어느 온도에서나 맛있는 커피를 제공합니다</p>
				</div>
				<a href="#" class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more.png" alt="더보기" /></a>
			</div>
		</div>
		<!-- //sect03 : Farm To Table -->

		<!-- sect04 : Delicious Journey with Caffe Bene -->
		<div class="sect04">
			<div class="sectInner">
				<div class="discript">
					<h2 class="tit"><span>Delicious Journey</span> with Caffe Bene</h2>
					<p class="titCopy">커피와 함께하는 맛의 여행으로 초대합니다</p>
				</div>
				<ul class="menuList">
					<li class="m01">
						<a href="#">
							<strong>Coffee</strong>
							<p>커피와 함께하는 특별한 시간</p>
						</a>
					</li>
					<li class="m02">
						<a href="#">
							<strong>Beverage &amp; Tea</strong>
							<p>차와 음료로 함께하는 한 잔의 여유</p>
						</a>
					</li>
					<li class="m03">
						<a href="#">
							<strong>Dessert</strong>
							<p>디저트와 함께하는 달콤한 즐거움</p>
						</a>
					</li>
					<li class="m04">
						<a href="#">
							<strong>Bagle</strong>
							<p>내 입맛대로 즐기는 126가지 행복</p>
						</a>
					</li>
					<li class="m05">
						<a href="#">
							<strong>MD Product</strong>
							<p>언제어디서나 즐기는 카페베네</p>
						</a>

					</li>
				</ul>
			</div>
		</div>
		<!-- //sect04 : Delicious Journey with Caffe Bene -->

		<!-- sect05 : Experience the Caffe Bene -->
		<div class="sect05">
			<div class="sectInner">
				<div class="discript">
					<h2 class="tit">Experience the Caffe Bene</h2>
					<p class="titCopy">가장 가까운 곳에서 카페베네를 경험하세요</p>
					<p class="conTxt">나만의 라이프스타일을 자유롭게 느낄 수 있는 카페베네 <br />지금 당신 옆에 있는 카페베네에서 경험해보세요</p>
				</div>
				<a href="#" class="btnFindStore"><img src="/phpStudy/sample/resources/image/main/btn_find_store.png" alt="FIND A STORE" /></a>
			</div>
		</div>
		<!-- //sect05 : Experience the Caffe Bene -->

		<!-- sect06 : Find a Partnership -->
		<div class="sect06">
			<div class="sectInner">
				<div class="discript">
					<h2 class="tit">Find a Partnership</h2>
					<p class="conTxt">카페베네와 함께하는 또 다른 재미로 당신을 초대합니다.</p>
				</div>
				<div class="partnerHistory">
					<ul>
						<li>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_jpn.png" alt="JAPAN" /></em>
										<strong>Caffe Bene in JAPAN</strong>
									</p>
									<span>4F, MMC Second Bldg, 6-10, Kinko-cho,Kanagawaku, Yokohama, JAPAN</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_tai.png" alt="Taiwan" /></em>
										<strong>Caffe Bene in Taiwan</strong>
									</p>
									<span>Rm. A1, 7F., No.230, Sec. 4, Zhongxiao E. Rd., Da’an Dist., Taipei City 106, Taiwan (R.O.C.)</span>
								</li>
							</ul>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_vtn.png" alt="Vietnam" /></em>
										<strong>Caffe Bene in Vietnam</strong>
									</p>
									<span>67 Nguyen Thi Minh Khai St., Ben Thanh Ward, District 1, Ho Hci Minh City, Vietnam</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_usa.png" alt="USA" /></em>
										<strong>Caffe Bene in USA(East)</strong>
									</p>
									<span>1430Broadway Suite 1401,New York, NY 10018</span>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_usa.png" alt="USA" /></em>
										<strong>Caffe Bene in USA(West)</strong>
									</p>
									<span>5670, Wilshire blvd #760,Los angeles, CA90036</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_phil.png" alt="Philippines" /></em>
										<strong>Caffe Bene in Philippines</strong>
									</p>
									<span>Unit I, MOCA Commercial Square Roxas Blvd Cor Cortabitarte st., Malate, Manila 1004, Philippines</span>
								</li>
							</ul>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_ara.png" alt="Saudi Arabia" /></em>
										<strong>Caffe Bene in Saudi Arabia</strong>
									</p>
									<span>OFFICE 13, F4, A2 BUILDING, RIYADH GALLERY MALL, P.O.BOX 230850 RIYADH 11321, KINGDOM OF SAUDI ARABIA.</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_idn.png" alt="Saudi Indonesia" /></em>
										<strong>Caffe Bene in Indonesia</strong>
									</p>
									<span>Jl. Pasirkaliki no. 155 Bandung - 40172, Indonesia</span>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_mal.png" alt="Malaysia" /></em>
										<strong>Caffe Bene in Malaysia</strong>
									</p>
									<span>No 7, Lorong Teknologi 3/4a, Nouvelle Industrial Park 2, Taman Sains Selangor 1, Kota Damansara, 47810 Petaling Jaya, Selangor, Malaysia.</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_mog.png" alt="Mongolia" /></em>
										<strong>Caffe Bene in Mongolia</strong>
									</p>
									<span>Bayangol district, 15th Khoroo, Ulaanbaatar, Mongolia</span>
								</li>
							</ul>
							<ul>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_cam.png" alt="Cambodia" /></em>
										<strong>Caffe Bene in Cambodia</strong>
									</p>
									<span>No.52d, Street 57 Corner St 334 Phnom Penh</span>
								</li>
								<li>
									<p class="national">
										<em><img src="/phpStudy/sample/resources/image/main/ico_kor.png" alt="Korea" /></em>
										<strong>etc</strong>
									</p>
									<span>Contact person.Mr. Dominic Lee Phone. 82-2-3438-1499 (Korea)</span>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="#" class="btnMore"><img src="/phpStudy/sample/resources/image/main/btn_more02.png" alt="더보기" /></a>
			</div>
		</div>
		<!-- //sect06 : Find a Partnership -->
	</div>

	<!-- snb -->
	<? include "./include/snb.php"; ?>
	<!-- //snb -->
	<? include "./include/footer.php"; ?>
	<!-- footer -->
</div>
<!-- //wrap -->
</body>
</html>

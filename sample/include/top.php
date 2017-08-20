<header id="header">
	<div class="headerIn">
		<h1 class="logo"><a href="#"><img src="/phpStudy/sample/resources/image/common/logo.jpg" alt="Caffe Bene" /></a></h1>

		<div class="tnbWrap">
<?
if(!$_SESSION) {
?>
			<a href="/phpStudy/sample/login.php" class="linkLog">LOGIN</a>
<?
}else{
?>
			<a href="#" class="linkMem">MY MEMBERSHIP</a>
<?
}
?>
			<a href="tnb/Cscenter.html" class="linkCs">C/S CENTER</a>
			<button type="button" class="btnOpenGnb"><span class="blind">메뉴</span></button>
		</div>
	</div>
</header>

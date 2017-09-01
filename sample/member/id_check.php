<?php

$userId = $_POST['userID'];

$connect = mysql_connect('localhost', 'hyun', 's37540086#');
mysql_select_db('phpStudy', $connect);


$sql = 'select id from member where id=\''.$userId.'\';';
//$sql = 'select * from member;';

$result = mysql_query($sql, $connect);

$count = mysql_num_rows($result);
//$fileds = mysql_num_fields($result);


//$count = 0;

?>
    <header>
        <h1>아이디 중복체크1</h1>
    </header>



    <section>
<?
if($count < 1) {
?>
        <p>사용가능한 아이디입니다.</p>
        <input type="hidden" name="idCheck" val="true" />
<?
}else{
?>
        <p>이미 사용중인 아이디입니다.</p>
        <input type="hidden" name="idCheck" val="false" />
<?
}
?>

    <div class="popBtnBox">
        <a href="#"></a>
    </div>

    </section>

    <a href="#" class="btnClosePop">X</a>
<? mysql_close(); ?>

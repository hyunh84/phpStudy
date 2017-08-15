<meta http-equiv="content-type" content="text/html"; charset="utf-8" />
<?php

$connect = mysql_connect('localhost', 'hyun', 's37540086#');
$db_con = mysql_select_db('phpStudy', $connect);

$name = $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$avg = round($sum / 5, 1);
$intoSql = 'insert into study_score(name, sub1, sub2, sub3, sub4, sub5, sum, avg) values("'.$name.'",'. $sub1.','. $sub2.','. $sub3.','. $sub4.','. $sub5.','. $sum.','. $avg.');';
$result = mysql_query($intoSql, $connect);

mysql_close();

if($result) {
    echo '<script type="text/javascript">';
    echo 'console.log(\'success\');';
    echo 'document.location.href = "http://localhost:8080/phpStudy/score_list/list.php";';
    echo '</script>';
}else{
    echo '<script type="text/javascript">';
    echo 'console.log(\'faild\');';
    echo 'document.location.href = "http://localhost:8080/phpStudy/score_list/regist.php";';
    echo '</script>';
}
?>

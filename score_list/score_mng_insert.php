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
$avg = $sum / 5;
$intoSql = 'insert into study_score(name, sub1, sub2, sub3, sub4, sub5, sum, avg) values("'.$name.'",'. $sub1.','. $sub2.','. $sub3.','. $sub4.','. $sub5.','. $sum.','. $avg.');';
$result = mysql_query($intoSql, $connect);

mysql_close();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scale=no," />
<meta name="format-detection" content="telephone=no" />

<title>성적관리 시스템</title>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<style type="text/css">

header {padding:0 50px;}
header h1 {font-size:24px; line-height:30px;}

.listTop {width:800px; margin:0 auto; text-align:right;}
.listTop .regitBtn {display:inline-block; height:20px; padding:0 10px; line-height:19px; font-size:15px; border:1px solid #000; background:#fff;}

.listTbl {width:800px; margin:30px auto; border-top:2px solid #000; border-bottom:1px solid #ccc;}
.listTbl thead th {min-height:30px; padding:5px; background:#fafafa;}
.listTbl tbody td {min-height:30px; text-align:center; border-top:1px solid #ddd;}
.listTbl tfoot td {height:50px; text-align:center; border-top:1px solid #ddd;}

</style>
<script>
if(<?=$result?>) {
    document.location.href = "http://localhost:8080/phpStudy/score_list/list.php";
}else{
    document.location.href = "http://localhost:8080/phpStudy/score_list/regist.php";
}
</script>

</head>
<body>


</body>
</html>

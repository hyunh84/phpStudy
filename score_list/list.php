<?php

$connect = mysql_connect('localhost', 'hyun', 's37540086#');
$db_con = mysql_select_db('phpStudy', $connect);

$sql = 'select * from study_score;';
$db_tbl = mysql_query($sql, $connect);
$rows = mysql_num_rows($db_tbl);
$fields = mysql_num_fields($db_tbl);
$html = '';

if(!$rows) {
    $html .= '<tfoot>';
    $html .= '<tr>';
    $html .= '<td colspan="9">';
    $html .= '<span>NO DATA</span>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</tfoot>';
}else{
    $html .= '<tbody>';
    for($i = 0; $i < $rows; $i++) {
        $html .= '<tr>';
        for($j = 0; $j < $fields; $j++) {
            $html .= '<td>'.mysql_result($db_tbl, $i, $j).'</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</tbody>';
}

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


</head>
<body>

<div class="wrap">
    <header>
        <h1>성적관리 시스템3</h1>
    </header>

    <section class="container">

        <div class="listTop">
            <a href="regist.php" class="regitBtn">등록</a>
        </div>

        <table class="listTbl">
            <colgroup>
                <col style="width:;" />
            </colgroup>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>이름</th>
                    <th>과목1</th>
                    <th>과목2</th>
                    <th>과목3</th>
                    <th>과목4</th>
                    <th>과목5</th>
                    <th>합계</th>
                    <th>평균</th>
                </tr>
            </thead>
            <?=$html?>
        </table>

    </section>

</div>

</body>
</html>

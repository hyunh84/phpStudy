<?php

$connect = mysql_connect('localhost', 'hyun', 's37540086#');
$db_con = mysql_select_db('phpStudy', $connect);
//$sql = 'select * from membership where address like "서울%" order by age;';
$sql = 'select * from membership;';
$db_tbl = mysql_query($sql, $connect);

$rows = mysql_num_rows($db_tbl);
$fields = mysql_num_fields($db_tbl);
$html = '';

for($i = 0; $i < $rows; $i++) {
    $html .= '<tr><td>'.($i+1).'</td>';
    for($j = 0; $j < $fields; $j++) {
        $html .= '<td>'.mysql_result($db_tbl, $i, $j).'</td>';
    }
    $html .= '</tr>';
}
// $result = array();
// $num = 1;
// $num2 = 1;
// $html = '';
//
// while($data = mysql_fetch_array($db_tbl)) {
//     $html .= '<tr>';
//     $html .= '<td>'.$num++.'</td>';
//     $html .= '<td>'.$data['name'].'</td>';
//     $html .= '<td>'.$data['id'].'</td>';
//     $html .= '<td>'.$data['age'].'</td>';
//     $html .= '<td>'.$data['tel'].'</td>';
//     $html .= '<td>'.$data['post_num'].'</td>';
//     $html .= '<td>'.$data['address'].'</td>';
//     $html .= '</tr>';
//
//     $result[$num2++]= $data;
// }

//print_r($result);
mysql_close();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scale=no," />
<meta name="format-detection" content="telephone=no" />

<title>PHP 업로드</title>
<style type="text/css">

body,html {margin:0; padding:0;}

ul, li, ol {list-style:none;}

input[type=text] {width:100%; padding:0; margin:0;}
input[type=password] {width:100%; padding:0; margin:0;}

textarea {width:100%; height:100px; resize:none;}
table {border-collapse:collapse;}

.joinWrap {width:800px; margin:10px auto; font-size:13px;}
.joinTbl {width:100%; border-collapse:collapse; border-top:2px solid #000; border-bottom:1px solid #ccc;}
.joinTbl caption {overflow:hidden; width:0; height:0; line-height:0; color:transparent;}
.joinTbl th {padding:5px; text-align:left; border-bottom:1px solid #aaa; border-right:1px solid #aaa; background:#fafafa;}
.joinTbl td {padding:5px; border-bottom:1px solid #aaa;}
.joinTbl tr:last-child td {border-bottom:none;}


.joinTbl thead th {text-align:center;}

.btnBox {margin:10px 0 0; text-align:center;}
.btnBox button {width:90px; height:30px; font-size:15px; border:1px solid #000; background:#fff;}

.listTbl {width:700px; margin:50px auto; font-size:13px; text-align:center; border-top:2px solid #000; border-bottom:1px solid #ccc;}
.listTbl caption {overflow:hidden; width:0; height:0; line-height:0; }
.listTbl thead th {border-left:1px solid #aaa; backgorund:#fafafa;}
.listTbl thead th:first-child {border-left:none;}
.listTbl tbody td {border-left:1px solid #aaa; border-top:1px solid #aaa;}
.listTbl tbody td:first-child {border-left:none;}

</style>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>


</head>
<body>
    <ul>
        <li>
            $rows = <?=$rows?>
        </li>
        <li>
            $fields = <?=$fields?>
        </li>
    </ul>
    <table id="memberTbl" class="listTbl">
        <caption></caption>
        <colgroup>
            <col style="width:" />
        </colgroup>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>이름</th>
                <th>우편번호</th>
                <th>주소</th>
                <th>전화번호</th>
                <th>나이</th>
            </tr>
        </thead>
        <tbody>
            <?= $html ?>
        </tbody>
    </table>


</form>


</body>
</html>

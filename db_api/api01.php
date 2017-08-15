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

strong {display:block; font-size:16px; line-height:25px;}

a {color:#1d8dff;}


ul li {padding:10px;}
ul li a {display:block; position:relative; padding:0 0 0 7px;}
ul li a:after {dispaly:block; content:""; position:absolute; top:5px; left:0; width:3px; height:3px; background:#ff6262;}

</style>

</head>
<body>

<?php

    $connect = mysql_connect("localhost", "hyun", "s37540086#");
    // mysql에 접속하기위한 함수 - mysql_connect();
    // 인자값에 접속주소, 계정, 비밀번호
    mysql_select_db('phpStudy', $connect);
    // 데이터베이스 선택

    $sql = 'insert into biz_card(num, name, company, tel, hp, address)';
    $sql .= 'value(
        3,
        "서현호3",
        "미래전자",
        "02-245-3456",
        "010-3754-1234",
        "인천시 부평구 부개동 308-5 현대아파트 102동 1305"
        )';

    $result = mysql_query($sql);

    if($result) {
        echo "레코드 삽입 완료";
    }else{
        echo "레코드 삽입 실패! 에러 확인 요망!!";
    }

    mysql_close($connect);



?>

</body>
</html>

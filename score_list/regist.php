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

.writeTbl {width:800px; margin:30px auto; border-top:2px solid #000; border-bottom:1px solid #ccc;}
.writeTbl tbody th {min-height:30px; padding:5px; border-top:1px solid #ddd; border-right:1px solid #ddd; background:#fafafa;}
.writeTbl tbody td {min-height:30px; padding:5px; border-top:1px solid #ddd;}
.writeTbl tbody tr:first-child th,
.writeTbl tbody tr:first-child td {border-top:none;}

.btnBox {margin:30px 0 0; text-align:center;}
.btnBox button {width:50px; height:30px; font-size:15px; text-align:center; border:1px solid #000;}

</style>

</head>
<body>

<div class="wrap">
    <header>
        <h1>성적관리 시스템</h1>
    </header>

    <section class="container">

        <form method="POST" action="score_mng_insert.php">

            <table class="writeTbl">
                <colgroup>
                    <col style="width:12%;" />
                    <col style="width:88%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th>이름</th>
                        <td><input type="text" class="tInput" name="name" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <th>과목1</th>
                        <td><input type="text" class="tInput" name="sub1" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <th>과목2</th>
                        <td><input type="text" class="tInput" name="sub2" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <th>과목3</th>
                        <td><input type="text" class="tInput" name="sub3" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <th>과목4</th>
                        <td><input type="text" class="tInput" name="sub4" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <th>과목5</th>
                        <td><input type="text" class="tInput" name="sub5" style="width:150px;" /></td>
                    </tr>
                </tbody>
            </table>

            <div class="btnBox">
                <button type="submit">저장</button>
            </div>

        </form>

    </section>

</div>

</body>
</html>

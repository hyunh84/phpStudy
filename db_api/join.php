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

.joinWrap {width:800px; margin:10px auto; font-size:13px;}
.joinTbl {width:100%; border-collapse:collapse; border-top:2px solid #000; border-bottom:1px solid #ccc;}
.joinTbl caption {overflow:hidden; width:0; height:0; line-height:0; color:transparent;}
.joinTbl th {padding:5px; text-align:left; border-bottom:1px solid #aaa; border-right:1px solid #aaa; background:#fafafa;}
.joinTbl td {padding:5px; border-bottom:1px solid #aaa;}
.joinTbl tr:last-child td {border-bottom:none;}


.btnBox {margin:10px 0 0; text-align:center;}
.btnBox button {width:90px; height:30px; font-size:15px; border:1px solid #000; background:#fff;}

</style>

</head>
<body>
<form action="join02.php" method="get" >

    <div class="joinWrap">
        <table class="joinTbl">
            <caption>로그인</caption>
            <colgroup>
                <col style="width:20%" />
                <col style="width:80%" />
            </colgroup>
            <tbody>
                <tr>
                    <th>*아이디</th>
                    <td><input type="text" name="userId" /></td>
                </tr>
                <tr>
                    <th>*이름</th>
                    <td><input type="text" name="userName" /></td>
                </tr>
                <tr>
                    <th>*비밀번호</th>
                    <td><input type="password" name="userPw" /></td>
                </tr>
                <tr>
                    <th>*비밀번호 확인</th>
                    <td><input type="password" name="userPwConfirm" /></td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>
                        <label><input type="radio" name="userGender" value="M" /> 남성</label>
                        <label><input type="radio" name="userGender" value="F" /> 여성</label>
                    </td>
                </tr>
                <tr>
                    <th>휴대전화</th>
                    <td>
                        <select name="phone01">
                            <option>010</option>
                            <option>011</option>
                            <option>016</option>
                        </select>
                        <input type="text" name="phone02" />
                        <input type="text" name="phone03" />
                    </td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>
                        <input type="text" name="addr" />
                    </td>
                </tr>
                <tr>
                    <th>취미</th>
                    <td>
                        <label><input type="radio" name="hobby" value="영화감상" /> 영화감상</label>
                        <label><input type="radio" name="hobby" value="독서" /> 톡서</label>
                        <label><input type="radio" name="hobby" value="운동" /> 운동</label>
                    </td>
                </tr>
                <tr>
                    <th>자기소개</th>
                    <td><textarea name="userIntro"></textarea></td>
                </tr>
            </tbody>
        </table>


        <div class="btnBox">
            <button type="submit">확인</button>
        </div>
    </div>


</form>


</body>
</html>

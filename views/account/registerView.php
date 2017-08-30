<html>
<head>
  <title>회원가입</title>
  <meta charset="utf-8">
</meta>

</head>
<body>

</body>
</html>

<center>

  <form name = "registerForm" action="<?php print $base_url; ?>/register" method="post">
<table border=1>
	<tr>
		<td colspan="2" align=center>
			<b><font size=5>회원가입</font></b>
		</td>
	</tr>


	<tr><td>아이디 : </td><td><input type="text" name="user_name"/>
    <input type="button" value="ID중복확인" onClick="idCheck(this.form.id.value)"></td></tr>
	<tr><td>비밀번호 : </td><td><input type="password" name="user_password"/></td></tr>

		<tr>
		<td>성별 : </td>
		<td>
			<input type="radio" name="user_gender" value="a" />남자
			<input type="radio" name="user_gender" value="b"/>여자
		</td>
	</tr>
	<tr><td>주소 : </td><td><input type="text" name="user_address" size=30/></td></tr>
	<tr><td>나이 : </td><td><input type="text" name="user_age" maxlength=2 size=5/></td></tr>
	<tr>

		<td colspan="2" align=center>
			<input type="button" value="이전으로" onClick="prevPage()">
			<input type="submit" value="회원가입">
			<input type="reset" value="다시작성">
		</td>
	</tr>
</table>
</center>
</form>

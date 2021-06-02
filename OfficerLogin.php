<!DOCTYPE html>
<head>
<title></title>
<link rel="stylesheet" href="webpages2.css">
</head>
<body bgcolor=cyan>
<div class="Header">
<h1> XYZ Investigative Agency </h1>
</div>
<br>
<div class="Main">
<p>
<a href="#">Officer Login</a>
</p>
<form name="OfficerLogin" action="OfficerCaseHistory.php"" method="post">
<table width="300" border="0" cellspacing="2" cellpadding="2" align=center>
<tr>
<td align=right>Case ID: </td>
<td align=left><input type="text" id="cid" name="cid" placeholder="Case ID"></td>
</tr>
<tr>
<td align=right>Officer ID: </td>
<td align=left><input type="text" id="oid" name="oid" placeholder="Officer ID"></td>
</tr>
<tr>
<td align=right>Password: </td>
<td align=left><input type="password" id="pword" name="pword" placeholder="Password"></td>
</tr>
</table>
<input type="submit" value="Login">
</form>
</div>
</body>
</html>

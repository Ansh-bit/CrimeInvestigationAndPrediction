<!DOCTYPE html>
<head>
<title></title>
<link rel="stylesheet" href="webpages.css">
</head>
<body bgcolor=cyan>
<div class="Header">
<h1> XYZ Investigative Agency </h1>
</div>
<br>
<div class="Bar" align=center>
<ul>
<li><a href="AdminAddCase.php">Add Case</a></li>
<li><a href="AdminAddOfficer.php">Add Officer</a></li>
<li><a href="AdminAddCOfficer.php">Add Case Officer</a></li>
<li><a href="#">Predict Result</a></li>
<li><a href="AdminAddResult.php">Add Result</a></li>
<li><a href="AdminSuspects.php">View Suspects</a></li>
<li><a href="AdminEvidence.php">View Evidence</a></li>
<li><a href="AdminCaseHistory.php">View Case History</a></li>
<li><a href="FirstPage.php">Log Out</a></li>
</ul>
</div>
<br><br><br>
<div class="Main">
<p>
<a href="#">Prediction</a>
</p>
<form name="Prediction" method=post>
<table width="500" border="0" cellspacing="2" cellpadding="2" align=center>
<tr>
<td align=right>Case ID: </td>
<td align=left><input type="text" id="cid" name="cid" ></td>
</tr>
<tr>
<td align=right>Case Name: </td>
<td align=left><input type="text" id="cname" name="cname"></td>
</tr>
<tr>
<td align=right>Suspect: </td>
<td align=left><input type="text" id="sus" name="sus"></td>
</tr>
<tr>
<td align=right>Image: </td>
<td align=left></td>
</tr>
<tr>
<td align=right>Points: </td>
<td align=left><input type="text" id="pts" name="pts"></td>
</tr>
</table>
<input type="submit" value="Submit">
</form>
</div>
</body>
</html>


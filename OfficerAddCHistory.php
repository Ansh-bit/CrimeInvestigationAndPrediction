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
<div class="Bar" align=center>
<ul>
<li><a href="OfficerAddSuspect.php">Add Suspect</a></li>
<li><a href="OfficerAddEvidence.php">Add Evidence</a></li>
<li><a href="#">Add Case History</a></li>
<li><a href="OfficerSuspects.php">View Suspects</a></li>
<li><a href="OfficerEvidence.php">View Evidence</a></li>
<li><a href="OfficerCaseHistory.php">View Case History</a></li>
<li><a href="FirstPage.php">Log Out</a></li>
</ul>
</div>
<br><br><br>
<div class="Main">
<p>
<a href="#">Add Case History</a>
</p>
<form name="Case History" action="" method="post">
<table width="500" border="0" cellspacing="2" cellpadding="2" align=center>
<tr>
<td align=right>Case ID: </td>
<td align=left><input type="text" id="cid" name="cid" ></td>
</tr>
<tr>
<td align=right>Note: </td>
<td align=left><textarea name="note" cols="20" rows="5"></textarea></td>
</tr>
</table>
<input type="submit" value="Submit" name="submit">
</form>
</div>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
$case_id = $_POST['cid'];
//$officer_id = $_POST['oid'];
$date = date_default_timezone_get();
$note = $_POST['note'];

$sql_query = "INSERT INTO case_history(Case_ID, Officer_ID, Date, History)
VALUES('$case_id', '', '$date', '$note')";

$ins = mysqli_query($conn,$sql_query);

if($ins){
?>

<script>
alert("Case history added to the database successfully");
</script>
<?php
}
else{
?>
<script>
alert("Data not added");
</script>
<?php
}
}
?>

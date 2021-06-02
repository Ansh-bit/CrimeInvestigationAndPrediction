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
<li><a href="#">Add Evidence</a></li>
<li><a href="OfficerAddCHistory.php">Add Case History</a></li>
<li><a href="OfficerSuspects.php">View Suspects</a></li>
<li><a href="OfficerEvidence.php">View Evidence</a></li>
<li><a href="OfficerCaseHistory.php">View Case History</a></li>
<li><a href="FirstPage.php">Log Out</a></li>
</ul>
</div>
<br><br><br>
<div class="Main">
<p>
<a href="#">Add Evidence</a>
</p>
<form name="Evidence" action="" method="post">
<table width="500" border="0" cellspacing="2" cellpadding="2" align=center>
<tr>
<td align=right>Case ID: </td>
<td align=left><input type="text" id="cid" name="cid" ></td>
</tr>
<tr>
<td align=right>Evidence Type: </td>
<td align=left><select id="etype" name="etype">
<option value="physical">Physical</option>
<option value="logical">Logical</option>
</select></td>
</tr>
<tr>
<td align=right>Evidence: </td>
<td align=left><input type="text" id="evid" name="evid" ></td>
</tr>
<tr>
<td align=right>Suspect: </td>
<td align=left><input type="text" id="sus" name="sus" ></td>
</tr>
<tr>
<td align=right>Points: </td>
<td align=left><input type="text" id="pts" name="pts" ></td>
</tr>
<tr>
<td align=right>Note: </td>
<td align=left><textarea name="note" cols="20" rows="5"></textarea></td>
</tr>
<tr>
</table>
<input type="submit" value="Submit" name="submit">
</form>
</div>
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
$evidence = $_POST['evid'];
$case_id = $_POST['cid'];
$suspect_name = $_POST['sus'];
$officer_id = $_POST['oid'];
$evidence_type = $_POST['etype'];
$points = $_POST['pts'];
$note = $_POST['note'];

$sql_query = "INSERT INTO evidence(Evidence, Case_ID, Suspect_Name, Officer_ID, Evidence_Type, Points, Note)
VALUES('$evidence', '$case_id', 'suspect_name', '$officer_id', '$evidence_type', '$points','$note')";

$ins = mysqli_query($conn,$sql_query);

if($ins){
?>

<script>
alert("Evidence added to the database successfully");
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

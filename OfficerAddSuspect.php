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
<li><a href="#">Add Suspect</a></li>
<li><a href="OfficerAddEvidence.php">Add Evidence</a></li>
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
<a href="#">Add Suspect</a>
</p>
<form name="Suspect" action="" method="post">
<table width="500" border="0" cellspacing="2" cellpadding="2" align=center>
<tr>
<td align=right>Case ID: </td>
<td align=left><input type="text" id="cid" name="cid" ></td>
</tr>
<tr>
<td align=right>Suspect Name: </td>
<td align=left><input type="text" id="sus" name="sus" ></td>
</tr>
<tr>
<td align=right>Gender: </td>
<td align=left><select id="gen" name="gen">
<option value="m">Male</option>
<option value="f">Female</option>
</select></td>
</tr>
<tr>
<td align=right>Birth Date: </td>
<td align=left><input type="date" id="bdate" name="bdate"
       min="1900-01-01" max="2020-12-31"></td>
</tr>
<tr>
<td align=right>Contact Number: </td>
<td align=left><input type="text" id="cnum" name="cnum" ></td>
</tr>
<tr>
<td align=right>Profession: </td>
<td align=left><input type="text" id="prof" name="prof" ></td>
</tr>
<tr>
<td align=right>Address: </td>
<td align=left><textarea name="address" cols="20" rows="5"></textarea></td>
</tr>
<tr>
<td align=right>Note: </td>
<td align=left><textarea name="note" cols="20" rows="5"></textarea></td>
</tr>
<tr>
<td align=right>Image: </td>
<td align=left><input type="file" id="img" name="img"></td>
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
$suspect_name = $_POST['sus'];
$gender = $_POST['gen'];
$birth_date = $_POST['bdate'];
$contact_number = $_POST['cnum'];
$profession = $_POST['prof'];
$address = $_POST['address'];
$note = $_POST['note'];
$image = $_POST['img'];

$sql_query = "INSERT INTO suspect(Suspect_Name, Case_ID, Profession, Contact_No, Birth_Date, Gender, Address, Image_Link, Note)
VALUES('$suspect_name', '$case_id', '$profession', '$contact_number', '$birth_date', '$gender', '$address', '$image','$note')";

$ins = mysqli_query($conn,$sql_query);

if($ins){
?>

<script>
alert("Suspect added to the database successfully");
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
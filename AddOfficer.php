<?php
$conn=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
{
die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$officer_id = $_POST['oid'];
$officer_name = $_POST['oname'];
$contact_number = $_POST['cnum'];
$email_id = $_POST['eid'];
$area = $_POST['oarea'];
$address = $_POST['address'];
$image = $_POST['img'];

$sql_query = "INSERT_INTO officer (Officer_ID, Officer_Name, Contact_No, Email_ID, Area, Address, Image_Link)
VALUES ('$officer_id', $officer_name, $contact_number, $email_id, $area, $address, $image)";

if(mysqli_query($conn, $sql_query))
{
  echo "Officer Added to the Database successfully !";
}
else
{
  echo "Error: " . $sql . "  . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

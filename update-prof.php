<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'wbd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    $db = mysqli_select_db($link, DB_NAME);
    $sql = "SELECT * FROM pengguna WHERE id = 1";
    $result = mysqli_query($link, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

function updateName($con) {
	$nama = $_POST['name'];
	$sql = "UPDATE `pengguna` SET `nama` = '$nama' WHERE `pengguna`.`id` = 1";
	$data = mysqli_query($con, $sql) or die(mysql_error());
}
function updateTelp($con) {
	$telp = $_POST['phone'];
	$sql = "UPDATE `pengguna` SET `telefon` = '$telp' WHERE `pengguna`.`id` = 1";
	$data = mysqli_query($con, $sql) or die(mysql_error());
}

function setFalse($con) {
	$sql = "UPDATE pengguna SET is_driver = 0 WHERE pengguna.id = 1";
	$data = mysqli_query($con, $sql) or die(mysql_error());	
}

function setTrue($con) {
	$sql = "UPDATE pengguna SET is_driver = 1 WHERE pengguna.id = 1";
	$data = mysqli_query($con, $sql) or die(mysql_error());	
}

if($_POST['name'] != $user["nama"]) 
{
  	updateName($link);
} 
if($_POST['phone']!= $user["telefon"])
{
    updateTelp($link);
} 

if (isset($_POST['check'])) {
	setTrue($link);	
} else {
	setFalse($link);
}

if (isset($_POST['fileToUpload'])) {
	echo $_POST['fileToUpload'];
}

mysqli_close($link);
header("location:myprofile.php");

?>
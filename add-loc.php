<?php 

define('DB_HOST', 'localhost');
define('DB_NAME', 'wbd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    $db = mysqli_select_db($link, DB_NAME);
    $sql = "SELECT location FROM prefloc WHERE id_driver=1";
    $result = mysqli_query($link, $sql);

function addLocation($link) {
    $new_loc = $_POST['add-new-loc'];
    $sql_add = "INSERT INTO `prefloc` (`id_prefloc`, `id_driver`, `location`) VALUES (NULL, '1', '$new_loc')";
    mysqli_query($link,$sql_add); 
}
	addLocation($link);
	mysqli_close($link);
    header("Location: edit-pref-loc.php");

?>
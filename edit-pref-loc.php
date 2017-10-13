<!DOCTYPE html>

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'wbd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    $db = mysqli_select_db($link, DB_NAME);
    $sql = "SELECT location FROM prefloc WHERE id_driver=1";
    $result = mysqli_query($link, $sql);


?>

<script type="text/javascript">
    function showConfirmation() {
        if (confirm("Are You Sure to Delete this?") == true) {
            //delete_row();
        }
    }
    function showEdit() {
        alert("hehe");
        if (confirm("Are You Sure to Delete this?") == true) {
            //delete_row();
        }
    }
</script>


<html>
<head>
	<title>Edit Preffered Location</title>
	<link rel="stylesheet" type="text/css" href="profile.css"></li>
</head>
<body>
	<h1>EDIT PREFERRED LOCATION</h1>
        <table class="tabel-loc">
            <tr>
                <th>No</th>
                <th id="h-loc">Location</th>
                <th id="h-act">Actions</th>
            </tr>
            <?php 
                $x = 1;
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr >";
                    echo "<td >".$x."</td>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td><img id='img-edit' onclick='showEdit()' class='icon-ed' src='edit.png' >
                           <img class='icon-del' onclick='showConfirmation()' src='delete.png'></td>"; 
                    echo "</tr>";
                    $x = $x+1;
                }
            ?>
        </table> 
    

    <div class="add-loc"> 
        <form action="add-loc.php" method="POST">
            ADD NEW LOCATION: <br>
            <input id="form-add-loc" type="text" name="add-new-loc"/>
            <button type="submit" class="button-save" id="add-button">ADD</button><br>
        </form>

    </div>
    <a href="myprofile.php" class="button-back">BACK</a>

</body>
</html>
<?php mysqli_close($link);?>
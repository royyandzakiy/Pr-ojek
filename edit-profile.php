<!DOCTYPE html>

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

?>

<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<h1>EDIT PROFILE INFORMATION</h1>
    <img class="edit-pic" src="profile.jpg" alt="Your Pic">
    <div class="update-profile-picture">
        <h3>Update Profile Picture</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		    <input type="submit" name="nama-file">
		    <input type="file" name="fileToUpload" id="fileToUpload">
		</form>
    </div>
    
    <div class="form-edit-profile">
	    <form name="form-update-prof" action="update-prof.php" method="POST">
	        Your name 
	       	<?php 
	       		echo "<input class='form-profile' type='text' value=".$user["nama"]." name='name'><br>";
	       	?>
	        Phone  
	        <?php 
	       		echo "<input class='form-profile' type='text' value=".$user['telefon']." name='phone'><br>";
	       	?>         
	        Status Driver 
	        <div class="dri-button">
	        	<label class="switch">
	        		<?php if ($user['is_driver']==0) {
	        			echo "<input type='checkbox' name='check' notchecked>";
	        		} else {
	        			echo "<input type='checkbox' name='check' checked>";
	        		}
	        		?>
					<span class="slider round"></span>
				</label>
	        </div> <br>
	        <div class="button">
	        	<a href="myprofile.php" class="button-back">BACK</a> <input type="submit" class="button-save" name="button-save" value="SAVE"><br>
	        </div>
    	
	    </form> 
    </div>

</body>
</html>
<?php mysqli_close($link);?>
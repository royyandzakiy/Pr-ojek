<div id="head">
	<div id="header">
		<h1 class="header"><span style="color:#1D7430;">PR</span>-<span style="color:#D50027;">OJEK</span></h1>
		<h4 class="header"><span style="color:#85A158;">wush... wush... ngeeeeeeng...</span></h4>
	</div>

	<div id="user">
		<h4 class="hi">Hi, <b><?php echo $_SESSION["nama"]; ?></b> !</h3>
		<h4 class="logout"><a href="logout.php">Logout</a></h4>
	</div>
</div>

<div class="nav">
	<div class="navbar">
		<button class="navlinks" style="border-right:0px;" onclick="navChange(event, 1)" id="tab_default"><b>ORDER</b>
		</button><button class="navlinks" style="border-right:0px;" onclick="navChange(event, 2)" ><b>HISTORY</b>
		</button><button class="navlinks" onclick="navChange(event, 3)"><b>MY PROFILE</b></button>
	</div>
</div>
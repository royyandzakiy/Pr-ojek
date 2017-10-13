<?php 
	// require('blog_connect.php'); 
	// include('cek_logged.inc');
	// require('debug_isLogged.inc');
?>
<html> 
<head>
	<title>Ojek Online - Order</title>
	
	<link type="text/css" rel="stylesheet" href="reset.css">
	<link type="text/css" rel="stylesheet" href="main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
	
	<div id="head">
		<div id="header">
			<h1 class="header"><span style="color:#1D7430;">PR</span>-<span style="color:#D50027;">OJEK</span></h1>
			<h4 class="header"><span style="color:#85A158;">wush... wush... ngeeeeeeng...</span></h4>
		</div>

		<div id="user">
			<h3 class="hi">Hi, <b>Royyan</b> !</h3>
			<h4 class="logout"><a href="#">Logout</a></h4>
		</div>
	</div>
	
	<?php

	// include('navbar.html');
	// include('main.html');

	?>

	<div class="nav">
		<div class="navbar">
			<button class="navlinks" onclick="navChange(event, 1)" id="tab_default">Profile
			</button><button class="navlinks" onclick="navChange(event, 2)">Order
			</button><button class="navlinks" onclick="navChange(event, 3)">History
		</div>
	</div>

	<div id="main">	

		<div id="nav-1" class="navmain">
			<h3>Judul 1</h3>
		</div>

		<div id="nav-2" class="navmain" id="tab_default">		


			<h1>MAKE AN ORDER</h1>

			<div class="tab">
				<button class="tablinks active" onclick="tabChange(event, 1)" id="tab_default"><span class="num-circle">1.</span> Select Destination
				</button><button class="tablinks" onclick="tabChange(event, 2)"><span class="num-circle">2.</span> Select a Driver
				</button><button class="tablinks" onclick="tabChange(event, 3)"><span class="num-circle">3.</span> Complete your Order</button>
			</div>

			<!-- FORM ISIAN -->
			<form action="dest.php" method="post" id="setor">
				<div id="order-1" class="tabcontent" style="display:block;">
					
					Picking Point <input type="text" value="" name="submit" /><br />
					Destination <input type="text" value="" name="submit" /><br />
					Preferred Location <input type="text" value="" name="submit" placeholder="(optional)" /><br />
					
					<input type="button" onclick="tabChange(event, 2)" value="Next" />
					
				</div>
				<div id="order-2" class="tabcontent">
					<div class="">
						<H2>PREFERRED DRIVERS:</H2>

						<!-- DRIVER BERULANG -->

					</div>
					<div class="">
						<H2>OTHER DRIVERS:</H2>

						<div class="driver">

							<!-- DRIVER BERULANG -->
							<div class="choose-driver">
								<div>
									<img src="" />
								</div>
								<div>
									<h3>Bulbasaurus</h3>
									<img src="" /><span class="rating">1.2</span> (10 votes)<br />
									<button class="choose-btn">I choose you!</button>
								</div>
							</div>

						</div>

					</div>

					<input type="button" onclick="tabChange(event, 3)" value="Next" />
				</div>
				<div id="order-3" class="tabcontent">
					<div class="">
						<H2>HOW WAS IT?</H2>

						<div class="driver-show">
							<img class="driver-img" src="" />
							<h4 class="driver-name">@Bombratata</h4>
							<p class="driver-desc">Bombratata</p>
							<textarea rows="" cols="" name="driver-comment" form="" placeholder="Your comment..." ></textarea>

						</div>
					</div>

					<input type="submit" value="Complete Order" />
				</div>
			</form>

		</div>
		<div id="nav-3" class="navmain">
			<h3>Judul 2</h3>
		</div>

	</div>

	<script>
		function tabChange(evt, tabNum) {
			var tabcontent, tablinks, tabName;
			
			tabcontent = document.getElementsByClassName("tabcontent");
			for (var i=0; i<tabcontent.length; i++)
				tabcontent[i].style.display = "none";
			
			tablinks = document.getElementsByClassName("tablinks");
			for (var i=0; i<tablinks.length; i++)
				if (tabNum != i+1)
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				else
					tablinks[i].className += (" active");
			
			tabName = "order-" + tabNum;
			document.getElementById(tabName).style.display = "block";
		}

		function navChange(evt, navNum) {
			// panggal laman yang tersedia			
			var navmain, navlinks, navName;
			
			navmain = document.getElementsByClassName("navmain");
			for (var i=0; i<navmain.length; i++)
				navmain[i].style.display = "none";
			
			navlinks = document.getElementsByClassName("navlinks");
			for (var i=0; i<navlinks.length; i++)
				if (navNum != i+1)
					navlinks[i].className = navlinks[i].className.replace(" active", "");
				else
					navlinks[i].className += (" active");
			
			navName = "nav-" + navNum;
			document.getElementById(navName).style.display = "block";
		}

		document.getElementById("tab_default").click();

		// document.getElementById("tab_default").className += (" active");

		/*function navChange(evt, navName) {
			// panggil laman dg ajax
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("main").innerHTML = this.responseText;
				}
			};
			

			xhttp.open("GET", "order.html", true);
			xhttp.send();
		}
		//*/
	</script>
</body>
</html>
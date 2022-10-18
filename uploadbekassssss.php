<!DOCTYPE HTML>

<html>
	<head>
		<title>AB5OLUTE PORTAL - SL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="abs.png"/>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" width="250px" height="250px" /></span>
							<h1>AB5OLUTE PORTAL</h1>
							<p>UPLOAD SELF LEARNING</p>
						</header>
						
						<hr />
						<h2>Upload your SL here!</h2>
						<form action="jadiceritanyauploading" method="post" enctype="multipart/form-data">
							<div class="field">
								<input type="text" name="name" id="name" placeholder="Nama lu" required="required"/>
							</div>
							<div class="field">
								<input type="text" name="binusian" id="binusian" placeholder="BINUSIAN ID" required="required"/>
							</div>
							<div class="field">
								<div class="select-wrapper">
									<select name="department" id="department" required="required">
										<option value="">Mata Pelajaran CAWU 3.2:</option>
										<!-- <option value="QUIZ ??"><i>COMP6062 - Compilation Techniqueee</i></option> -->
										<!-- <option value="PROJECT - COMP7084">PROJECT MULTIMEDIA SYSTEM</option> -->
										<option value="CHAR6013"><i>CHAR6013 - Menjadi Seorang Filsuf (CB:Pancasila)</i></option>
										<option value="ISYS6169"><i>ISYS6169 - DataBEST Systems (DBSys)</i></option>
										<option value="COMP6099"><i>COMP6099 - OOP Kedua (Adv.OOP)</i></option>
										
									</select>
								</div>
							</div>
							<!--
							<div class="field">
								<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
							</div>-->

							<p>Upload file SL kalian (gausah rename dulu)<br>
							Nama file akan di autogenerate dari form..<br>
							<b>pastikan <= 100 MB!</b><br>
							Diatas 100 MB pasti error! Waspadalah<br>
							<b>Walaupun uda bisa >100MB, tapi lemot. Patience<br>
							Mau update? Upload dengan nama nim dan pelajaran yg sama.<br>
							File akan autoreplace.</p>

							<input type="file" id="fileSL" name="fileSL" required="required"/><br><br>
<!--
							<div class="field">
								<input type="checkbox" id="human" name="human" /><label for="human">I'm an AB5OLUTION</label>
							</div>-->
							
							<ul class="actions">
								<input type="submit" id="submit" name="submit" value="Upload Now!" class="button"/>
							</ul>
						</form>
						<hr />
						
						<footer>
							<ul class="icons">
								
								<li><a href="../pptibca5/" class="fa-arrow-left">BACK</a></li>
								
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; 2017 PPTI BCA 5 - ABSOLUTE</li><li>Framework using <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>

	<?php
/*
	$target_dir = "uploadSL/";
	$target_file =  $target_dir . basename($_FILES[""]["name"]);
	if(isset($_POST[submit])){
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
	}

*/

	?>



</html>
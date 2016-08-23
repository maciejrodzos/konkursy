<?php
  session_start();
  if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
  {
    header('Location: userui.php');
    exit();
  }
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<title>Ogólnopolskie Konkursy Szkolne</title>
<link href='https://fonts.googleapis.com/css?family=Lato|Audiowide|Play&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:300&subset=latin-ext" rel="stylesheet">
<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
<script src="timer.js"></script>
</head>
<body onload="odliczanie();">
<div class="container">
	<div class="rectangle">
	<input type="checkbox" name="menu" value="toggle" id="toggle">
		<section id="menu">
			<label class="toggle" for="toggle"><i class="fa fa-2x fa-bars"></i></label>
			<nav class="menuContent">
				<span>Menu</span>
					<ul>
						<li><a href="#"><i class="fa fa-font-awesome" style="padding-right: 12px;"></i>Aktualności</a></li>
						<li><a href="#"><i class="fa fa-users" style="padding-right: 10px;"></i>  O nas</a></li>
						<li><a href="#"><i class="fa fa-volume-control-phone" style="padding-right: 10px;"></i>  Kontakt</a></li>
						<li><a href="#"><i class="fa fa-signing" style="padding-right: 10px;"></i>  Współpraca</a></li>
						<li><a href="#"><i class="fa fa-dollar" style="padding-right: 10px;"></i>  Dotacje</a></li>
						<li><a href="#"><i class="fa fa-question-circle-o" style="padding-right: 10px;"></i>  Regulamin</a></li>
					</ul>
			</nav>
		</section>
		<a href="index.php">
		<div class="logo">
		Ogólnopolskie Konkursy Szkolne
		</div>
		</a>
		<div id="clock"></div>
		<div style="clear: both;"></div>
			<div class="rec">
				<div class="info1"><i class="icon-book"></i><div style="margin-top: 10px;">Język polski</div></div>
				<div class="info2"><i class="icon-book-1"></i><div style="margin-top: 10px;">Język angielski</div></div>
				<div class="info3"><i class="icon-book-2"></i><div style="margin-top: 10px;">Język niemiecki</div></div>
				<div class="info4"><i class="icon-book-open"></i><div style="margin-top: 10px;">Język hiszpański</div></div>
					<div style="clear: both;"></div>
				<div class="info5"><i class="icon-book-2"></i><div style="margin-top: 10px;">Język rosyjski</div></div>
				<div class="info6"><i class="icon-book"></i><div style="margin-top: 10px;">Język włoski</div></div>
				<div class="info7"><i class="icon-book-1"></i><div style="margin-top: 10px;">Język francuski</div></div>
				<div class="info8"><i class="icon-pi"></i><div style="margin-top: 10px;">Matematyka</div></div>
					<div style="clear: both;"></div>
				<div class="info9"><i class="icon-grid"></i><div style="margin-top: 10px;">Fizyka</div></div>
				<div class="info10"><i class="icon-beaker"></i><div style="margin-top: 10px;">Chemia</div></div>
				<div class="info11"><i class="icon-laptop"></i><div style="margin-top: 10px;">Informatyka</div></div>
				<div class="info12"><i class="icon-flight"></i><div style="margin-top: 10px;">Geografia</div></div>
					<div style="clear: both;"></div>
				<div class="info13"><i class="icon-users"></i><div style="margin-top: 10px;">Biologia</div></div>
				<div class="info14"><i class="icon-calendar"></i><div style="margin-top: 10px;">Historia</div></div>
				<div class="info15"><i class="icon-brush"></i><div style="margin-top: 10px;">Sztuka</div></div>
				<div class="info16"><i class="icon-note-beamed"></i><div style="margin-top: 10px;">Muzyka</div></div>
			</div>
			<br/>
			<!-- Logowanie -->
			<button onclick="document.getElementById('id01').style.display='block'" class="btn2">Zaloguj się</button>
			<div id="id01" class="modal">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Zamknij okno">&times;</span>
			<form class="modal-content animate" action="login.php" method="post">
    	<div class="imgcontainer">
      <img src="img/avatar.png" alt="Avatar" class="avatar">
    	</div>
    	<div class="logcontainer">
      	<input type="text" placeholder="Wpisz login" onfocus="this.placeholder=''" onblur="this.placeholder='Wpisz login'" name="login" required>
				<div style="clear: both;"></div>
      	<input type="password" placeholder="Wpisz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Wpisz hasło'" name="password" required>
				<div style="clear: both;"></div>
      	<button type="submit">Zaloguj</button>
    	</div>
    	<div class="logcontainer" style="background-color:#f1f1f1">
      	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Anuluj</button>
    	</div>
  		</form>
			</div>

			<br/>
			<br/>
		<div class="footer">Design & Scrypting by <a href="portfolio/index.html">Maciej Rodzoś</a> 2016 &copy; |  Wszelkie prawa zastrzeżone</div>
		</div>
	</div>
	<script>
	var modal = document.getElementById('id01');
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
		}
	</script>
</body>
</html>

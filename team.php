<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">
<head>
	<title>Progetto Tecnologie Web</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="title" content="Progetto di Tecnologie Web - Home page" />
	<meta name="description" content="Progetto di Tecnologie Web" />
	<meta name="keywords" content="Tecnologie Web, xxx, Università di Padova" />
	<meta name="author" content="Marco Galtarossa,Malick Bodian" />
	<meta name="language" content="italian it" />
	<link rel="stylesheet" type="text/css" href="css/stile.css" />
</head>

<body class="sfondo">
	<div id="contentM">
		<div id="menu">
		<a href="index.php"><img class="logo" src="img/MAM.png" alt="logo MAM" title="Home"/></a>
			<nav class="cl-effect-21" id="cl-effect-21">
				<a href="storia.php">Storia</a>
				<a href="team.php">Team</a>
				<a href="articoli.php">Articoli</a>
				<a href="progetti.php">Progetti</a>
				<a href="contatti.php">Contattaci</a>
			</nav>
		</div>
	</div>
		
		<div class="boxpagina">
			<div class="pagina">
				<?php	
					include("config.php");
					$query = mysql_query("select * from pagine");
					if(!$query) die('Error loading page');
					$ris = mysql_fetch_array($query);
					if($ris['pagina']= "TEAM"){
						echo $ris['pagina'];
					}
			?>
			</div>
		<div class="separatore">
			<span class="sepl"><span class="linea"></span></span>
			<span class="sepd"><span class="linea"></span></span>
		</div>
	</div>
	
	<?php
		include("config.php");
		$query = mysql_query("select * from team");
		if(!$query)die('<h1>Error loading Team Page</h1>');
		while($ris = mysql_fetch_array($query)){
			echo"<div class=\"riqteam\">
					<div class=\"riqfototeam\">
						<div class=\"fototeam\">
							<img class=\"wrapteam\"src=\"$ris[src]\" alt=\"$ris[alt]\" title=\"$ris[title]\">
						</div>		
					</div>
					<div class=\"scrittateam\">
						<p class=\"nome\">$ris[nome] $ris[cognome]</p>
						<p class=\"nome\">$ris[ruolo]</p>
					</div>
				</div>";
		}
	?>
	<?phpinclude('sotto.html')?>

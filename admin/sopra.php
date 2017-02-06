<?php
	require("config.php");
	session_start();
	$user = $_SESSION['username'];	
	$nome = $_SESSION['nome'];	
	$permessi = $_SESSION['permessi'];	
	if(!isset($_SESSION['nome'])) die();
	if(!isset($_SESSION['permessi']))die();
?>
	<!DOCTYPE html><html lang="it">
	<head>    
	<meta charset="utf-8">    
	<title>Admin Area - MAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css2.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	</head>  
	<body>    
		<nav class="navbar navbar-fixed-top">   
			<div class="navbar-inner"> 
				<div class="container-fluid">  
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span>  <span class="icon-bar"></span> <span class="icon-bar"></span></a>
					<a class="brand" href="home.php" title="Home">Admin Area - MAM</a> 
					<div class="nav-collapse collapse navbar-responsive-collapse">      
						<ul class="nav pull-right">      
							<li class="dropdown">           
								<div class="dropdown-menu">
									<li><a href="form_reset_psw.php"><i class="icon-lock"></i> Cambia password</a></li>
									<li class="divider"></li>  
									<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>      
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>    
	<div class="container-fluid"> 
		<div class="row-fluid">
			<div class="span3">  
				<div class="well sidebar-nav">   
					<ul class="nav nav-list">
						<?php     
							$arrStr = explode("/", $_SERVER['SCRIPT_NAME'] );
							$arrStr = array_reverse($arrStr); 
						?>
						<li class="nav-header">Home</li> 
						<li <?php if($arrStr[0]=="home.php"){echo "class=\"active\"";}?>><a href="home.php"><i class="icon-home"></i> Home</a></li>   
						<li class="nav-header">Articoli</li>         
						<li <?php if($arrStr[0]=="inserisci-articolo.php"){echo "class=\"active\"";}?>><a href="inserisci-articolo.php"><i class="icon-plus"></i> Nuovo articolo</a></li>   
						<li <?php if($arrStr[0]=="articoli.php"){echo "class=\"active\"";}?>><a href="articoli.php"><i class="icon-file"></i> Gestione articoli</a></li>	
						<li class="nav-header">Storia</li>          
						<li <?php if($arrStr[0]=="storia.php"){echo "class=\"active\"";}?>><a href="storia.php"><i class="icon-file"></i> Storia</a></li>	
						<li class="nav-header">Contatti</li>      
						<li <?php if($arrStr[0]=="contatti.php"){echo "class=\"active\"";}?>><a href="contatti.php"><i class="icon-file"></i> Contatti</a></li>       
						<li class="nav-header">Progetti</li>   
						<li <?php if($arrStr[0]=="inserisci-progetti.php"){echo "class=\"active\"";}?>><a href="inserisci-progetti.php"><i class="icon-plus"></i> Nuovo progetto</a></li>  
						<li <?php if($arrStr[0]=="progetti.php"){echo "class=\"active\"";}?>><a href="progetti.php"><i class="icon-user"></i> Gestione progetto</a></li>        
						<li class="nav-header">Admin</li>          
						<li <?php if($arrStr[0]=="inserisci-admin.php"){echo "class=\"active\"";}?>><a href="inserisci-admin.php"><i class="icon-plus"></i> Nuovo admin</a></li>    
						<li <?php if($arrStr[0]=="admin.php"){echo "class=\"active\"";}?>><a href="admin.php"><i class="icon-user"></i> Gestione admin</a></li> 
						<li class="nav-header">File</li>      
						<li <?php if($arrStr[0]=="finder.php"){echo "class=\"active\"";}?>><a href="finder.php"><i class="icon-folder-open"></i> Gestione file</a></li>    
					</ul> 
				</div> 
			</div>
		</div>
	</div>
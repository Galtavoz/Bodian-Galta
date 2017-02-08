<?php

	include("config.php");
	$err = array();
	$err['count'] = 0;
	if(isset($_POST['nome']) && strlen($_POST['nome']) <= 128){
		$nome = $_POST['nome'];
		} else {
			$err['count']++;
			$err['nome'] = array('errore' => 'Nome vuoto o troppo lungo');
		}
			
	if(isset($_POST['cognome']) && strlen($_POST['cognome']) <= 128){
		$cognome = $_POST['cognome'];
		} else {
			$err['count']++;
			$err['cognome'] = array('errore' => 'Cognome vuoto o troppo lungo');
		}
	if(isset($_POST['email']) && strlen($_POST['email']) <= 128){
		$email = $_POST['email'];
		} else {
			$err['count']++;
			$err['email'] = array('errore' => 'Email vuoto o troppo lungo');
		}
	
	if(isset($_POST['telefono']) && strlen($_POST['telefono']) <= 12){
		$telefono = $_POST['telefono'];
		} else {
			$err['count']++;
			$err['telefono'] = array('errore' => 'Campo Telefono vuoto o troppo lungo');
		}
	
	if(isset($_POST['messaggio'])){
		$messaggio = $_POST['messaggio'];
		} else {
			$err['count']++;
			$err['messaggio'] = array('errore' => 'Messaggio vuoto');
		}
	if ($err['count'] === 0) {
		mysqli_query($connessione,"INSERT INTO contatti(nome,cognome,email,telefono,messaggio,data)VALUES  ('$nome','$cognome','$email','$telefono','$messaggio',now())") or die(mysql_error());
		if(mysqli_affected_rows()){
			echo"<div class=\"alert alert-success\">Inserimento progetto effettuato con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore inserimento progetto!</div>";
			}
			}
			else {
			foreach ($err as $key => $value) {
				if (is_array($value)) {
				echo '<div class="alert alert-error">'.$value['errore'].'</div>';
				}
				}
			}
			
?><META HTTP-EQUIV="Refresh" CONTENT="1;URL=contatti.php">

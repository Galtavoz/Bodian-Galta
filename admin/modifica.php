<?php
include("sopra.php");
$err = array();
$err['count'] = 0;
?>
	<div class="span9">
        <div class="row-fluid center">
<?php
	switch ($_POST['tipo']) {
		case 'articolo':
		
			if(isset($_POST['id'])){
				(int)$id = $_POST['id'];
			} else {
				$err['count']++;
				$err['id'] = array('errore' => 'Id non valido');
			}
			if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){
				$titolo = $_POST['titolo'];
			} else {
				$err['count']++;
				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');
			}
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				mysqli_query($connessione,"UPDATE immagini SET titolo = '".$titolo."',testo = '".$contenuto."',autore= '".$_SESSION['nome']."' ,data=now() WHERE id = $id ") or die(mysqli_error());
				if(mysqli_affected_rows()){
					echo"<div class=\"alert alert-success\">Modifica articolo effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica articolo!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		case 'progetto':
		
			if(isset($_POST['id'])){
				(int)$id = $_POST['id'];
			} else {
				$err['count']++;
				$err['id'] = array('errore' => 'Id non valido');
			}
			if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){
				$titolo = $_POST['titolo'];
			} else {
				$err['count']++;
				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');
			}
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				mysqli_query($connessione,"UPDATE immagini SET titolo = '".$titolo."',testo = '".$contenuto."',autore= '".$_SESSION['nome']."' ,data=now() WHERE id = $id ") or die(mysqli_error());
				if(mysqli_affected_rows()){
					echo"<div class=\"alert alert-success\">Modifica Progetto effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Progetto!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		case 'storia':
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				mysqli_query($connessione,"UPDATE storia SET storia = '".$contenuto."'") or die(mysqli_error());
				if(mysqli_affected_rows()){
					echo"<div class=\"alert alert-success\">Modifica Storia effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Storia!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
			break;
			case 'contatti':
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				= mysqli_query($connessione,"UPDATE news SET messaggio = '".$contenuto."',mittente= '".$_SESSION['nome']."' ,data=now() WHERE page = 7 ") or die(mysqli_error());
				if(mysqli_affected_rows()){
					echo"<div class=\"alert alert-success\">Modifica Contatti effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Contatti!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		
		
		
		default:
			return false;
		break;
	}
	$dest = '';
	switch ($_POST['tipo']) {
		case 'articolo':
			$dest='articoli.php';
			break;

		case 'admin':
			$dest='admin.php';
			break;
        

		case 'progetti':
			$dest='progetti.php';
			break;
		
		case 'storia':
			$dest='storia.php';
			break;
			
		case 'fhome':
			$dest='gfhome.php';
			break;
		
		default:
			$dest='home.php';
			break;
	}
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=".$dest."\">";
?>
	</div>
</div>
<?php
include("sotto.php");
?>

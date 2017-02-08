<?php
include("sopra.php");
?>
	<div class="span9">
        <div class="row-fluid center">
<?php
	switch ($_GET['tipo']) {
		case 'admin':
			$username=$_GET['username'];
			$ris= mysqli_query($connessione,"DELETE FROM admin WHERE username=\"$username\"");
			if(mysqli_affected_rows()){
				echo"<div class=\"alert alert-success\">Cancellazione admin effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione admin!</div>";
			}
		break;
		case 'articolo':
			$id=$_GET['id'];
			$ris= mysqli_query($connessione,"DELETE FROM immagini WHERE id='$_GET[id]'");
			if(mysqli_affected_rows()){
				echo"<div class=\"alert alert-success\">Cancellazione articolo effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione articolo!</div>";
			}
		break;
			case 'progetto':
			$id=$_GET['id'];
			$ris= mysqli_query($connessione,"DELETE FROM progetti WHERE id='$_GET[id]'");
			if(mysqli_affected_rows()){
				echo"<div class=\"alert alert-success\">Cancellazione progetto effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione progetto!</div>";
			}
		break;
		
		
	}
	$dest = '';
	switch ($_GET['tipo']) {
		case 'articolo':
			$dest='articoli.php';
			break;

		case 'admin':
			$dest='admin.php';
			break;

		case 'progetto':
			$dest='progetti.php';
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

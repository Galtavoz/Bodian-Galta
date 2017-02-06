<?php
include("sopra.php");
$err = array();
$err['count'] = 0;
?>
	<div class="span9">
        <div class="row-fluid center">
<?php
	switch ($_POST['tipo']) {			case 'articolo':						if(isset($_POST['immagine'])){				$immagine = $_POST['immagine'];			} else {				$err['count']++;				$err['immagine'] = array('errore' => 'Percorso immagine vuoto o troppo lungo');			}						if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){				$titolo = $_POST['titolo'];			} else {				$err['count']++;				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');			}			if(isset($_POST['contenuto'])){				$contenuto = $_POST['contenuto'];			} else {				$err['count']++;				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');			}						if ($err['count'] === 0) {				mysql_query("INSERT INTO immagini(src,titolo,autore,data,testo) VALUES  ('$immagine','$titolo','$_SESSION[nome]',now(),'$contenuto')") or die(mysql_error());				if(mysql_affected_rows()){					echo"<div class=\"alert alert-success\">Inserimento articolo effettuato con successo</div>";				}				else{					echo"<div class=\"alert alert-error\">Errore inserimento articolo!</div>";				}			}			else {				foreach ($err as $key => $value) {					if (is_array($value)) {						echo '<div class="alert alert-error">'.$value['errore'].'</div>';					}				}			}		break;			case 'progetto':			if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){				$titolo = $_POST['titolo'];			} else {				$err['count']++;				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');			}						if(isset($_POST['immagine']) && strlen($_POST['immagine']) <= 128){				$immagine = $_POST['immagine'];			} else {				$err['count']++;				$err['immagine'] = array('errore' => 'Link Immagine vuoto o troppo lungo');			}			if(isset($_POST['contenuto'])){				$contenuto = $_POST['contenuto'];			} else {				$err['count']++;				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');			}			
			if ($err['count'] === 0) {
				mysql_query("INSERT INTO progetti(src,titolo,testo)VALUES  ('$immagine','$titolo','$contenuto')") or die(mysql_error());
				if(mysql_affected_rows()){
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
		break;				
		//case 'foto':
			//$allowedExts = array("gif", "jpeg", "jpg", "png");
			//$temp = explode(".", $_FILES['file']["name"]);
			//$extension = end($temp);
			
			//if ($_FILES["file"]["error"] > 0){
				//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			//}
			//else{
				//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				//echo "Type: " . $_FILES["file"]["type"] . "<br>";
				//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

				//if (file_exists("../images/" . $_FILES["file"]["name"])){
					//echo $_FILES["file"]["name"] . " already exists. ";
				//}
				//else{
				//move_uploaded_file($_FILES["file"]["tmp_name"],"../images/" . $_FILES["file"]["name"]);
					//echo "Stored in: " . "../images/" . $_FILES["file"]["name"];
				//}
			//}
			
			//$query = mysql_query("insert into associazioni (nome,regione,foto,href) values ('$_POST[titolo]','$_POST[regione]','images/".$_FILES["file"]["name"]."','$_POST[link]')");
			
			//if(!$query){
				//echo"<div class=\"alert alert-error\">Errore inserimento utente!</div>";
			//}else{
				//echo"<div class=\"alert alert-success\">Inserimento utente effettuato con successo</div>";
			//}
			//break;
		case 'admin':
			if(isset($_POST['username']) && strlen($_POST['username']) <= 32){
				$username = $_POST['username'];
			} else {
				$err['count']++;
				$err['username'] = array('errore' => 'Username vuoto o troppo lungo');
			}
			if(isset($_POST['password']) && strlen($_POST['password']) <= 32){
				$password = $_POST['password'];
			} else {
				$err['count']++;
				$err['password'] = array('errore' => 'Password vuoto o troppo lungo');
			}
			if(isset($_POST['nome']) && strlen($_POST['nome']) <= 64){
				$nome = $_POST['nome'];
			} else {
				$err['count']++;
				$err['nome'] = array('errore' => 'Nome vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				mysql_query("INSERT INTO admin(username,password,permessi,nome) VALUES ('$username',MD5('".$password."'),100,'$nome')") or die(mysql_error());
				if(mysql_affected_rows()){
					echo"
						<div class=\"alert alert-success\">Inserimento admin effettuato con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore inserimento admin!</div>";
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
		case 'fhome':			$allowedExts = array("gif", "jpeg", "jpg", "png");			$temp = explode(".", $_FILES['file']["name"]);			$extension = end($temp);						if ($_FILES["file"]["error"] > 0){				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";			}			else{				echo "Upload: " . $_FILES["file"]["name"] . "<br>";				echo "Type: " . $_FILES["file"]["type"] . "<br>";				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";				echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";				if (file_exists("../images/home/" . $_FILES["file"]["name"])){					echo $_FILES["file"]["name"] . " already exists. ";				}				else{				move_uploaded_file($_FILES["file"]["tmp_name"],"../images/home/" . $_FILES["file"]["name"]);					echo "Stored in: " . "../images/home/" . $_FILES["file"]["name"];				}			}						$query = mysql_query("insert into foto (src,titolo) values ('images/home/".$_FILES["file"]["name"]."','$_POST[titolo]')");						if(!$query){				echo"<div class=\"alert alert-error\">Errore inserimento foto home!</div>";			}else{				echo"<div class=\"alert alert-success\">Inserimento foto home effettuato con successo</div>";			}			break;				
		
	}
	$dest = '';
	switch ($_POST['tipo']) {
		case 'articolo':
			$dest='articoli.php';
			break;
		case 'progetto':
			$dest='progetti.php';
			break;
		case 'admin':
			$dest='admin.php';
			break;
        case 'fhome':			$dest='gfhome.php';			break;
		case 'contatto':
			$dest='contatto.php';
			break;
		default:
			$dest='home.php';
			break;
	}
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=".$dest."\">";
?>
	</div>
</div>


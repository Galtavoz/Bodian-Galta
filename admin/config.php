<?php
$connessione = mysqli_connect("localhost","mbodian","iy9Paeka6ooR7Wi0", "mbodian");
if (!$connessione) die("<h1>Connessione a Mysql non riuscita</h1> ".mysqli_connect_error());
else {
$db = mysqli_select_db($connessione, "mbodian");
if (!$db) die("<h1>Connessione al Database non riuscita</h1> ".mysqli_connect_error());
}
	
?>

<?php

$connessione = mysql_connect("localhost","root","" );

if (!$connessione) die("<h1>Connessione a Mysql non riuscita</h1> ".mysql_error());
else {
$db = mysql_select_db("progettotecweb",$connessione);
if (!$db) die("<h1>Connessione al Database non riuscita</h1> ".mysql_error());
}	
?>
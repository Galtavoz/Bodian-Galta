<?php

	include("sopra.html");
?>
	<div class="boxpagina2">
		<div class="pagina2">
			<?php	
				include("config.php");
		        $query = mysql_query("select * from pagine");
				if(!$query) die('Error loading page');
				$ris = mysql_fetch_array($query);
				if($ris['pagina']== "ARTICOLI") echo $ris['pagina'];
			?>
		</div>
		<?php
		 include("scritta.html");
		?>
	</div>
<div class=\"boxpaginaarticolo\">
<?php	
	include("config.php");
	$query = mysql_query("select * from immagini");
	if(!$query) die('Error loading page');
	while($ris = mysql_fetch_array($query)){
		echo"
			<div class=\"boxarticolo\">
				<div class=\"imagearticolo\">
				<a href=\"$ris[href]\"  class=\"aarticolo\"></a>
			
				<img src=\"$ris[src]\"class=\"imgarticolo\"></img>
				</div>
				<div class=\"boxscrittaarticolo\">
					<div class=\"boxautore\">
						<p class=\"autore\"> $ris[autore]  $ris[data] </p>
				</div>
				
					<h3 class=\"smalltitle\"><a href=\"$ris[href]\"> $ris[titolo] </a></h3>
					<a class=\"bottonegrigio\" href=\"$ris[href]\">Leggi Tutto</a>
			</div>
		</div>";
	}		
?>

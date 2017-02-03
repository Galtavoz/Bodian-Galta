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
					if($ris['pagina']= "CONTATTI"){
						echo $ris['pagina'];
					}
			?>
		</div>
		<?php
		 include("scritta.html");
		?>
	</div>
<?php	
	include("contatti.html");

?>

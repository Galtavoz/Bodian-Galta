<?php

	include("sopra.html");
?>
	<div class="boxpagina2">
		<div class="pagina2">
			<?php	
				include("config.php");
		        $query = mysqli_query($connessione,"select * from pagine");
				if(!$query) die('Error loading page');
				$ris = mysqli_fetch_array($query);
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
<?php	
	include("sotto.html");
?>

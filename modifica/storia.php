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
				if($ris['pagina']= "STORIA") echo $ris['pagina'];
			?>
		</div>
	<?php
		 include("scritta.html");
	?>
	</div>
<?php	
	include("config.php");
		$query = mysqli_query($connessione,"select * from storia");
		if(!$query) die('Error loading page');
		$ris = mysqli_fetch_array($query);
		if($ris['id']=="1")	echo" <div id=\"content\"> $ris[storia] </div>";
?>
<?php	
	include("sotto.html");
?>

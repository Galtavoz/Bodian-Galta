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
					if($ris['pagina']="PROGETTI"){
						echo $ris['pagina'];
					}
			?>
		</div>
		<?php
		 include("scritta.html");
		?>
	</div>
	<?php
		include("config.php");
		$query = mysql_query("select * from progetti");
		if(!$query) die('Error loading page');
		while($ris = mysql_fetch_array($query)){
			echo" <div class=\"boxprogetti\">
					<div class=\"item_holder\">
						<div class=\"imgprogetto\">
							<img alt=\"$ris[alt]\" src=\"$ris[src]\" title=\"$ris[title]\"/>
						</div>
						<div class=\"scritta_progetto\">
							<h3 class=\"title\">$ris[titolo]</h3>
							<a class=\"bottonegrigio\" href=\"$ris[href]?id=$ris[id]\">Leggi Tutto</a>
						</div>
					</div>
				</div>";
		}
	?>
	<?php	
	include("sotto.html");
?>

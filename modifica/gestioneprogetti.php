<?php
	include('sopra.html');
?>

<div class="boxletturaarticoli">
		<div class="holderletturaarticolo">
			<?php	
				include("config.php");
				$id=$_GET['id'];
		         $query = mysqli_query($connessione,"select * from progetti where id=$id ");
				if(!$query) die('Error loading page');
				$ris = mysqli_fetch_array($query);
				if($ris['id']= $id){
					echo" <p class=\"the-title\"> $ris[titolo] </p>";
					
				}
			?>
		</div>
</div>
<div class="estest">
	<div class="boxesternoarticolotesto">
		<div class="boxarticolotesto">
			<div class="boxarticolotesto">
				<?php	
					include("config.php");
					$query = mysqli_query($connessione,"select testo from immagini");
					if(!$query) die('Error loading page');
					$ris = mysqli_fetch_array($query);
					echo" <div class=\"articolotesto\"> $ris[testo] </div>";	
				?>
			</div>
		</div>
	</div>
</div>

<?php	
	include("sotto.html");
?>

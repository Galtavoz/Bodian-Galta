<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Articoli</h2><br/>
					<div class="well well-small">
						<a href="inserisci-articolo.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo articolo</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query= mysqli_query($connessione,"SELECT * FROM immagini ORDER BY titolo");
							$ris=mysqli_query($query) or die(mysqli_error());
							if(mysqli_num_rows($ris)){
								echo'
									<tr><th>Titolo</th><th>Data pubblicazione</th><th>Contenuto</th><th>Autore</th><th>Modifica</th><th>Elimina</th></tr>';
								while($dato=mysql_fetch_array($ris)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[titolo]</td>
											<td>$dato[data]</td>
											<td>".substr(strip_tags(html_entity_decode($dato['testo'])),0,80)."...</td>
											";
											echo"
											<td>
												$dato[autore]
											</td>";
									
												
									echo"	
											<td>
												<a href=\"modifica-articolo.php?id=$dato[id]\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?id=$dato[id]&tipo=articolo\" onclick=\"return confirm('Sei sicuro di voler cancellare questo articolo?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun articolo presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>

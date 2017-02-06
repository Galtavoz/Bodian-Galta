<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Admin</h2><br/>
					<div class="well well-small">
						<a href="inserisci-admin.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo Admin</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query="SELECT username,password FROM admin ORDER BY username";
							$ris=mysql_query($query) or die(mysql_error());
							if(mysql_num_rows($ris)){
								echo'
									<tr><th>Username</th><th>Password</th><th>Modifica</th><th>Elimina</th>';
								while($dato=mysql_fetch_array($ris)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[username]</td>
											<td>$dato[password]</td>	
										
											<td>
												<a href=\"form_reset_psw.php\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?username=$dato[username]&tipo=admin\" onclick=\"return confirm('Sei sicuro di voler cancellare questo admin?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun admin presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>

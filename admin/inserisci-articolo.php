<?php
include("sopra.php");
include("csrf.php");
csrf('inserisci','inserimento_articolo','generate');
?>
			 <script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Nuovo Articolo</h2><br/>
					<form action="inserimento.php" method="POST">
						<label>Titolo articolo</label>
						<input type="text" name="titolo"  placeholder="Titolo articolo"/>
						<label>Immagine Articolo</label>
						<input type="text" name="immagine"  placeholder="Percorso Immagine"/>
						<label>Contenuto</label>
						<textarea name="contenuto" id="contenuto"></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Crea articolo</button>
					      
					    </div>
						<input type="hidden" name="tipo" value="articolo"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>
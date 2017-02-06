<?php
include("sopra.php")
?>
        <div class="span9">
          <div class="well well-small center">
            <h2>Benvenuto <?php echo "$nome"; ?></h2>
          </div>
          <div class="row-fluid center">
            <div class="span3">
              <h3>Articoli</h3>
              <img src="img/articoli.png"><br><br>
              <p><a href="articoli.php" class="btn">Articoli »</a></p>
            </div>
            <div class="span3">
              <h3>Progetti</h3>
              <img src="img/gallery.jpg"><br><br>
              <p><a href="progetti.php" class="btn">Progetti »</a></p>
            </div>
            <div class="span3">
              <h3>Admin</h3>
              <img src="img/utenti.png"><br><br>
              <p><a href="utenti.php" class="btn">Admin »</a></p>
            </div>
            <div class="span3">
              <h3>File</h3>
              <img src="img/finder.png"><br><br>
              <p><a href="finder.php" class="btn">File »</a></p>
            </div>
          </div>
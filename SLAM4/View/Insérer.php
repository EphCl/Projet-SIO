<?php include_once "header.php" ;?>
<?php include_once "../Controller/Insérer.php" ;?>

  <h1>Ajouter des thèmes ! </h1>
  <div>
  <img class="soleil" src="../Controller/soleil.jpg">
</div>
  <div class = div1>
  <form action="traitementInserer.php" method="post"><br>
    <label for="nom">Thème :</label><br>
    <input type="text" name="theme"><br>
    <input type="submit" value="Valider" name="sub">
  
      <?php 
      
      foreach ($themes as $theme)
      {
        echo "<option value='".$theme['id']."'>".$theme['nomT']."</option>";
      }
      ?>
</select><br>

    </div>
    
</body>

</html>
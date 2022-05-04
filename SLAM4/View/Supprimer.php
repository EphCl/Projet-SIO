<?php include_once "header.php"; ?>
<?php include_once "../Controller/Supprimer.php" ;?>

  <h1>Supprimer des thèmes ! </h1>
  <div>
  <img class="soleil" src="../Controller/soleil.jpg">
</div>
  <div class = div1>
  <form action="traitementSupprimer.php" method="post"><br>
    <label for="nom">Thème a supprimer :</label><br>
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
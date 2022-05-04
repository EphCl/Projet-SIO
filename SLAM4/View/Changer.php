<?php include_once "header.php"; ?>
<?php include_once "../Controller/Changer.php" ;?>

  <h1>Ajouter des thèmes ! </h1>
  <div>
  <img class="soleil" src="../Controller/soleil.jpg">
</div>
  <div class = div1>
  <form action="traitementChanger.php" method="post"><br>
    <label for="nom">Thème a changer :</label><br>
    <input type="text" name="theme"><br>
    <label for="nom">Nouveau Thème  :</label><br>
    <input type="text" name="new"><br>
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
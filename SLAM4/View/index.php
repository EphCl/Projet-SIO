<?php include_once "header.php"; ?>
<?php include_once "../Controller/index.php"; ?>

<h1>Série TV ! </h1>

<?php 
var_dump($_SESSION["role"]);
if($_SESSION["role"] == "admin"){ ?>


<div class=div1>
  <form action="traitement.php" method="post"><br>
    <label for="nom">Nom :</label><br>
    <input type="text" name="nom" id="nom"><br>
    <label for="nbepisode">Nombre d'épisodes :</label><br>
    <input type="number" name="nbepisode" id="nbepisode"><br>
    <label for="Synopsis">Synopsis :</label><br>
    <textarea name="Synopsis" id="Synopsis"></textarea><br>
    <label for="theme">Thème :</label><br>
    <select name="theme" id="theme">
      <?php 
      foreach ($themes as $theme)
      {
        echo "<option value='".$theme['id']."'>".$theme['nomT']."</option>";
      }
      ?>
    </select><br>
    <br>
    <input type="submit" value="Envoyer" ><br>
    <br>
    </form>
    <input type="button" value="Supprimer" onclick="self.location.href='../Controller/Supprimer.php'">
    <input type="button" value="Insérer" onclick="self.location.href='../Controller/Insérer.php'">
    <input type="button" value="Changer" onclick="self.location.href='../Controller/Changer.php'">
  
</div>

    <?php } ?>

<h1>Mes series</h1>
<table>
  <thead>
    <tr>
      <th>Nom Série</th>
      <th>Nombre d'épisodes</th>
      <th>Synopsis</th>
      <th>Thème</th>
      <th>Liste épisodes</th>
    </tr>
    </thread>
  <tbody>
    <?php foreach ($series as $serie) { ?>
    <tr>
      <td><?php echo $serie['nomSerie'];?></td>
      <td><?php echo $serie['nbrEpisode'];?></td>
      <td><?php echo $serie['synopsis'];?></td>
      <td><?php echo $serie['nomTheme'];?></td>
      <td><a href="../Controller/resumerEpisode.php?serie=<?php echo $serie['id'];?>">Ouvrir</a></td>
    </tr>
    <?php } ?>
  <tbody>
</table>
<?php include_once "footer.php"?>





</body>

</html>
<?php include_once "../Controller/resumerEpisode.php" ;?>
<h1>Mes épisodes</h1>
<div class=div1>
Nom : <?php echo $serie['nomSerie'];?><br>
Nombre d'épisodes : <?php echo $serie['nbrEpisode'];?><br>
Synopsis : <?php echo $serie['synopsis'];?><br>
Nom thème : <?php echo $serie['nomTheme'];?><br>
<?php
 $_SESSION["serie"]=$_GET["serie"];
?>

<form action="resumerEpisode.php?serie=<?php echo $_GET["serie"] ?>" method="post"><br>
<label for="nom">Episode :</label>
    <input type="text" name="episode"><br>
    <br>
    <label for="nom">Nom :</label>
    <input type="text" name="nom"><br>
    <br>
    <label for="nom">Resumer :</label>
    <input type="text" name="resumer"><br>
    <br>
    <label for="nom">Durer :</label>
    <input type="text" name="durer"><br>
    <br>
    <input type="submit" value="Valider" name="subb"><br>
    
  
</div>
<table>
  <thead>
    <tr>
      <th>Episode</th>
      <th>Nom</th>
      <th>Resumer</th>
      <th>Durer</th>
    </tr>
    </thread>
  <tbody>
    <?php foreach ($episodes as $episode) { ?>
    <tr>
      <td><?php echo $episode['id'];?></td>
      <td><?php echo $episode['nomEpisode'];?></td>
      <td><?php echo $episode['resumer'];?></td>
      <td><?php echo $episode['durée'];?></td>
    </tr>
    <?php } ?>
  <tbody>
</table>
<?php include_once "footer.php"?>





</body>

</html>
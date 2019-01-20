<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Huistaken</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="profielenachtergrond">

  <div class="profiellijst">
    <h1>Overzicht huistaken</h1>
    Dit is een overzicht van alle huistaken. Je kunt onderaan de pagina
    klagen over mensen die hun huistaak niet hebben gedaan.

  <div class="profiellijstitem">
    <img src="afbeeldingen/img1.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Trap en overloop</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/yana.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Toilet beneden</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/kris.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Douches</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/femke.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Koelkast rechts</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/EJbrak.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Toilet boven</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/joris.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Hal</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/emma.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Keukenvloer</h1>
  </div>
  <div class="profiellijstitem">
    <img src="afbeeldingen/daan.jpg" class="profielfoto">
    <h1 style="line-height:200px;">Huiswas</h1>
  </div>


  <form action="opmerkingen.php" method="post">
    <textarea name="comments" id="comments"></textarea>
    <br><br>
    <input type="submit" value="Klaag">
  </form>


  <?php
  foreach(file('opmerkingen.csv') as $comment){
    echo $comment, '<br>';
  }
  ?>

</div>
<a href="index.php">Terug</a>

</div>

</html>

<!DOCTYPE html>
<html>

  <head>
    <title>Het Gildehuis</title>
    <link rel="stylesheet" type="text/class" href="style.css">
  </head>

  <body>

    <div class="declarerenachtergrond">
      <div class="dividertekst">
        <h1>Declareer je maaltijd</h1><br>
        <form action="alledeclaraties.php" method="post">

          Wie heeft er gekookt?<br>
          <select name="kok">
            <option value="lana">Lana</option>
            <option value="joris">Joris</option>
            <option value="yorick">Yorick</option>
          </select><br>

          Wanneer heb je gekookt?<br>
          <input name="datum" type="date" placeholder="dd/mm/jjjj"><br>

          Wat heb je gekookt?<br>
          <input name="gerecht" type="text" placeholder="lasagne"><br>

          De kosten van het avondeten zijn<br>
          €<input name="bedrag" type="number" step="0.01" placeholder="42,99"><br>

          Wie hebben er meegegeten?<br>
          <input type="hidden" name="lana" value=0>
          <input type="hidden" name="joris" value=0>
          <input type="hidden" name="yorick" value=0>
          <input type="hidden" name="ej" value=0>
          <input type="hidden" name="yana" value=0>
          <input type="hidden" name="daan" value=0>
          <input type="hidden" name="emma" value=0>
          <input type="hidden" name="kris" value=0>
          <input type="hidden" name="femke" value=0>
          <input type="hidden" name="alex" value=0>

          <input type="checkbox" name="lana" value="lana" class="checkbox" />Lana<br>
          <input type="checkbox" name="joris" value="joris" />Joris<br>
          <input type="checkbox" name="yorick" value="yorick" />Yorick<br>
          <input type="checkbox" name="ej" value="ej" />EJ<br>
          <input type="checkbox" name="yana" value="yana" />Yana<br>
          <input type="checkbox" name="daan" value="daan" />Daan<br>
          <input type="checkbox" name="emma" value="emma" />Emma<br>
          <input type="checkbox" name="kris" value="kris" />Kris<br>
          <input type="checkbox" name="femke" value="femke" />Femke<br>
          <input type="checkbox" name="alex" value="alex" />Alex<br>
          <input type="submit" value="Verhaal kosten">
        </form>
      </div>
    </div>

  </body>

</html>

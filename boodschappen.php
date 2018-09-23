<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Het Gildehuis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div class="declarerenachtergrond">
      <div class="formulier">
        <h1>Declareer je maaltijd</h1>
        <form action="alledeclaraties.php" method="post">
          Wie heeft er gekookt?<br>
          <select name="kok">
            <option value="lana">Lana</option>
            <option value="joris">Joris</option>
            <option value="yorick">Yorick</option>
          </select><br>

          Wanneer heb je gekookt?<br>
          <input name="datum" type="date" placeholder="dd-mm-jjjj"><br>

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

          <ul class="b">
            <li><input type="checkbox" id="lana" name="lana" value="lana" /><label for="lana">Lana</label></li>
            <li><input type="checkbox" id="joris" name="joris" value="joris" /><label for="joris">Joris</label></li>
            <li><input type="checkbox" id="yorick" name="yorick" value="yorick" /><label for="yorick">Yorick</label></li>
            <li><input type="checkbox" id="EJ" name="EJ" value="EJ" /><label for="EJ">EJ</label></li>
            <li><input type="checkbox" id="yana" name="yana" value="yana" /><label for="yana">Yana</label></li>
            <li><input type="checkbox" id="daan" name="daan" value="daan" /><label for="daan">Daan</label></li>
            <li><input type="checkbox" id="emma" name="emma" value="emma" /><label for="emma">Emma</label></li>
            <li><input type="checkbox" id="kris" name="kris" value="kris" /><label for="kris">Kris</label></li>
            <li><input type="checkbox" id="femke" name="femke" value="femke" /><label for="femke">Femke</label></li>
            <li><input type="checkbox" id="alex" name="alex" value="alex" /><label for="alex">Alex</label></li>
            <li><input type="checkbox" id="rick" name="rick" value="rick" /><label for="rick">Rick</label></li>
          </ul><br>
          <input type="submit" value="Verhaal kosten">

        </form>
      </div>
    </div>
  </body>

  </html>

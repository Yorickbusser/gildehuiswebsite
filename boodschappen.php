<!DOCTYPE html>
<html>

  <body>
    Dag Lana, Joris en Yorick<br>
    <form action="alledeclaraties.php" method="post">
      De kosten van het avondeten zijn
      <input name="bedrag" type="number" step="0.01"><br>
      Voer uw naam in
      <select name="kok">
        <option value="lana">Lana</option>
        <option value="joris">Joris</option>
        <option value="yorick">Yorick</option>
      </select><br>
      Wie hebben er meegegeten?<br>
      <input type="hidden" name="lana" value=0>
      <input type="hidden" name="joris" value=0>
      <input type="hidden" name="yorick" value=0>
      <input type="checkbox" name="lana" value="lana" />Lana<br>
      <input type="checkbox" name="joris" value="joris" />Joris<br>
      <input type="checkbox" name="yorick" value="yorick" />Yorick<br>
      <input type="submit" value="Verhaal kosten">
    </form>
  </body>

</html>

<html>
<body>
  Dag Lana, Joris en Yorick<br>
  <form action="alledeclaraties.php" method="post">
    De kosten van de huisinkopen zijn
    <input name="bedrag" type="number" step="0.01"><br>
    Voer uw naam in
    <select name="kok">
      <option value="lana">Lana</option>
      <option value="joris">Joris</option>
      <option value="yorick">Yorick</option>
    </select><br>
    <input type="hidden" name="lana" value=lana>
    <input type="hidden" name="joris" value=joris>
    <input type="hidden" name="yorick" value=yorick>

    <input type="submit" value="Verhaal kosten">
  </form>
</body>
</html>

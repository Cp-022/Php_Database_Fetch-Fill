<html>
<link rel="stylesheet" href="jquery.timepicker.css">
<link rel="stylesheet" href="jquery-ui.min.css">
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="jquery.timepicker.min.js"></script>

<body>
    <h1>Afspraak maken? Dat kan!</h1>
    <form action="test.php" method="post">
        Uw Voornaam:
        <input type="text" name="voornaam" required/>
        <br>
        <br> Uw Achternaam:
        <input type="text" name="achternaam" required />
        <br>
        <br> De reden voor de afspraak:
        <select required name="reden">
          <option value="uittreksel">Uittreksel bevolkingsregister</option>
          <option value="paspoort">Paspoort aanvragen</option>
          <option value="kapvergunning">Kapvergunning aanvragen</option>
        </select>
        <br>
        <br> Uw Email:
        <input type="text" name="email" required/>
        <br>
        <br> De datum die U wilt:
        <input type="text" id="datepicker" name="datum" required>
        <br>
        <br> De tijd die U wilt:
        <input type="text" id="basicExample" name="tijd" required>
        <br>
        <br> Enige Opmerkingen (maximaal 50)
        <input type="text" name="extra" />
        <br>
        <br>
        <input type="submit" />
        <script>
            $("#basicExample").keypress(function(event) {
                event.preventDefault();
            });
            $("#datepicker").keypress(function(event) {
                event.preventDefault();
            });
            $(function() {
                $("#datepicker").datepicker();
            });
            $('#basicExample').timepicker({
              'minTime' : '9:00',
              'maxTime' : '16:30'
            });
        </script>
    </form>
</body>
</html>

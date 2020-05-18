<!DOCTYPE html>
<html lang="en">
<?php include "layout.php";?>

<head>
</head>

<body>
    <div id="content">
        <h1>Mijn Weer</h1>
        <label for="pnaam">Voer hier uw Plaatsnaam of GPS coordinaten</label> <br>
        <input type="text" id="pnaam" name="pnaam" value="" placeholder="bijv. Amsterdam of 52,3" required><br>
        <button onclick='requestData();'>Submit</button>

        <div id="Resultaten">

        </div>
    </div>
</body>

</html>
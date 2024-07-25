<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST -->
<!-- afficher dans un tableau HTML l’ensemble des -->
arguments $_POST

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">
        <div>
            <label for="say">Quelle salutation voulez-vous dire ?</label>
            <input name="say" id="say" value="Salut" />
        </div>
        <div>
            <label for="to">A qui voulez-vous le dire ?</label>
            <input name="to" id="to" value="Maman" />
        </div>
        <div>
            <button>Envoyer mes salutations</button>
        </div>
    </form>

</body>

</html>

<?php

echo count($_POST);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $say = ($_POST['say']);
    $to  = ($_POST['to']);
    echo  $say, ' ', $to;
}

echo "<table border=1>
<caption>
  TABLEAU POST
</caption>";
echo "<tr>
<th >Arguments</th>
    <th >Valeurs</th>
  </tr>";

foreach ($_POST as $key => $value) {
    echo "<tr>
      <td> $key </td>
      <td> $value </td></tr>";   
}

echo "</table>"; 




?>
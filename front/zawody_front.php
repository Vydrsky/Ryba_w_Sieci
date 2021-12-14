<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Serwis Wędkarski" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/zawody_styles.css" />
  <link rel="stylesheet" href="styles/navigation_styles.css" />
  <link rel="stylesheet" href="fontellon/css/fontello.css" />
  <link rel="stylesheet" href="styles/main_styles.css" />
  <link rel="icon" href="favicon.ico" />
  <title>Zawody</title>
</head>

<body>
  <?php include "includes/header.php"; ?>
  <?php include "includes/menu.php"; ?>
  <div id="main">
    <div id="tab">
      <div id="table">
        <h1>Zawody 2021</h1>
        <h2><a href='index.php?state=add_competitions'> Dodaj wydarzenie </a></h2>
        
        <table>
          <tr>
            <th>Zawody</th>
            <th>Data</th>
            <th>Łowisko</th>
            <th>Godzina startu</th>
            <th>Typ</th>
            <th>Organizator</th>
          </tr>
          <?php
            foreach($_SESSION['competitions'] as $competition) {
                echo "<tr>";
                echo "<td>" . $competition->getTitle() . "</td>";
                echo "<td>" . $competition->getDate() . "</td>";
                echo "<td>" . $competition->getFishery() . "</td>";
                echo "<td>" . $competition->getStartTime() . "</td>";
                echo "<td>" . $competition->getType() . "</td>";
                echo "<td>" . $competition->getAuthorName() . "</td>";
                echo "</tr>";
            }
          ?>       
        </table>
      </div>
    </div>
  </div>

  <?php
  include "includes/footer.php";
  ?>
</body>

</html>
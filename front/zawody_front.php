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
  <link rel="stylesheet" href="fontello/css/fontello.css" />
  <link rel="stylesheet" href="styles/main_styles.css" />
  <link rel="icon" href="favicon.ico" />
  <title>Zawody</title>
</head>

<body>
  <?php
  include "includes/header.php";
  ?>
  <div id="main">
    <div id="tab">
      <div id="table">
        <h1>Zawody 2021</h1>
        <?php
        echo '<table>';
        echo '<tr>
         <th>Zaowdy</th>
         <th>Data</th>
         <th>Rodzaj</th>
         <th>Łowisko</th>
         <th>Godzina</th>
         </tr>';
        foreach($_SESSION['key'] as $key)
        {
          echo '<tr>';
          echo '<th> <h4>' . $key['title'] . '</h4> </th>';
          echo '<th>' . $key['date'] . '</th>';
          echo '<th>' . $key['type'] . '</th>';
          echo '<th>' . $key['fishery'] . '</th>';
          echo '<th>' . $key['start_time'] . '</th>';
          echo '</tr>';
        }
      

        echo '</table>';
        ?>

      </div>
    </div>
  </div>

  <?php
  include "includes/footer.php";
  ?>
</body>

</html>
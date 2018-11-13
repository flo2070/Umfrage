<?php
  $db = mysqli_connect("localhost", "fri", "fri", "Ergebnisse");
  $count = "SELECT COUNT(`id`) AS `summe` FROM `fortschritt`";
  $query = mysqli_query($db, $count);
  $result = mysqli_fetch_assoc($query);
  for($i=1; $i<$result['summe']; $i++) {
    $sql1 = "SELECT SUM(`Frage1`) AS `summe` FROM `fortschritt` WHERE 1";
    $query1 = mysqli_query($db, $sql1);
    $result1 = mysqli_fetch_assoc($query1);
    $percentJa1 = round(($result1['summe'] / $result['summe']) * 100);
    $percentNein1 = 100 - $percentJa1;

    $sql2 = "SELECT SUM(`Frage2`) AS `summe` FROM `fortschritt` WHERE 1";
    $query2 = mysqli_query($db, $sql2);
    $result2 = mysqli_fetch_assoc($query2);
    $percentJa2 = round(($result2['summe'] / $result['summe']) * 100);
    $percentNein2 = 100 - $percentJa2;

    $sql3 = "SELECT SUM(`Frage3`) AS `summe` FROM `fortschritt` WHERE 1";
    $query3 = mysqli_query($db, $sql3);
    $result3 = mysqli_fetch_assoc($query3);
    $percentJa3 = round(($result3['summe'] / $result['summe']) * 100);
    $percentNein3 = 100 - $percentJa3;

    $sql4 = "SELECT SUM(`Frage4`) AS `summe` FROM `fortschritt` WHERE 1";
    $query4 = mysqli_query($db, $sql4);
    $result4 = mysqli_fetch_assoc($query4);
    $percentJa4 = round(($result4['summe'] / $result['summe']) * 100);
    $percentNein4 = 100 - $percentJa4;

    $sql5 = "SELECT SUM(`Frage5`) AS `summe` FROM `fortschritt` WHERE 1";
    $query5 = mysqli_query($db, $sql5);
    $result5 = mysqli_fetch_assoc($query5);
    $percentJa5 = round(($result5['summe'] / $result['summe']) * 100);
    $percentNein5 = 100 - $percentJa5;

    $sql6 = "SELECT SUM(`Frage6`) AS `summe` FROM `fortschritt` WHERE 1";
    $query6 = mysqli_query($db, $sql6);
    $result6 = mysqli_fetch_assoc($query6);
    $percentJa6 = round(($result6['summe'] / $result['summe']) * 100);
    $percentNein6 = 100 - $percentJa6;

    $sql7 = "SELECT SUM(`Frage7`) AS `summe` FROM `fortschritt` WHERE 1";
    $query7 = mysqli_query($db, $sql7);
    $result7 = mysqli_fetch_assoc($query7);
    $percentJa7 = round(($result7['summe'] / $result['summe']) * 100);
    $percentNein7 = 100 - $percentJa7;
    break;
}
 ?>
<html>
  <head>
    <title> Umfrage-Klonen </title>
    <link rel="stylesheet" type="text/css" href="umfrageSelf.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $('h3').on('mouseenter', event => {
        $(event.currentTarget).css('color', '#DF0101');
      }).on('mouseleave', event => {
        $(event.currentTarget).css('color', 'black');
      })
      $('.input-group-text').on('click', event => {
        $(event.currentTarget).attr("placeholder", "");
      }).on('focusout', event => {
        $(event.currentTarget).attr("placeholder", "Kommentar");
      })
    });
    </script>
  </head>
  <body>
  <div class="container">
    <h1>Umfrage zum Thema Klonen</h1>
    <form method="post" action="auswertung.php">
      <h3> Frage 1 </h3>
      <input name="radio1" type="radio" id="Ja1" value="1" required/>
      <label for="Ja1">Ja</label>
      <input name="radio1" class="checkboxNein" id="Nein1" type="radio" value="0" required/>
      <label for="Nein1">Nein</label>
    </br>
      <input class="input-group-text" type="text" placeholder="Kommentar"/>
      <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: <?= $percentJa1 ?>%" aria-valuenow="<?= $percentJa1 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa1 ?>%</div>
    </div>
    <div class="progress">
      <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein1 ?>%" aria-valuenow="<?= $percentNein1 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein1 ?>%</div>
    </div>
      <h3> Frage 2 </h3>
      <input name="radio2" type="radio" id="Ja2" value="1" required/>
      <label for="Ja2">Ja</label>
      <input name="radio2" class="checkboxNein" id="Nein2" type="radio" value="0" required/>
      <label for="Nein2">Nein</label>
    </br>
      <input class="input-group-text" type="text" placeholder="Kommentar"/>
      <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: <?= $percentJa2 ?>%" aria-valuenow="<?= $percentJa2 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa2 ?>%</div>
    </div>
    <div class="progress">
      <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein2 ?>%" aria-valuenow="<?= $percentNein2 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein2 ?>%</div>
    </div>
      <h3> Frage 3 </h3>
      <input name="radio3" type="radio" id="Ja3" value="1" required/>
      <label for="Ja3">Ja</label>
      <input name="radio3" class="checkboxNein" id="Nein3" type="radio" value="0" required/>
      <label for="Nein3">Nein</label>
    </br>
      <input class="input-group-text" type="text" placeholder="Kommentar"/>
      <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: <?= $percentJa3 ?>%" aria-valuenow="<?= $percentJa3 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa3 ?>%</div>
    </div>
    <div class="progress">
      <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein3 ?>%" aria-valuenow="<?= $percentNein3 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein3 ?>%</div>
    </div>
      <h3> Frage 4 </h3>
      <input name="radio4" type="radio" id="Ja4" value="1" required/>
      <label for="Ja4">Ja</label>
      <input name="radio4" class="checkboxNein" id="Nein4" type="radio" value="0" required/>
      <label for="Nein4">Nein</label>
    </br>
    <input class="input-group-text" type="text" placeholder="Kommentar"/>
    <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?= $percentJa4 ?>%" aria-valuenow="<?= $percentJa4 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa4 ?>%</div>
  </div>
  <div class="progress">
    <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein4 ?>%" aria-valuenow="<?= $percentNein4 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein4 ?>%</div>
  </div>
      <h3> Frage 5 </h3>
      <input name="radio5" type="radio" id="Ja5" value="1" required/>
      <label for="Ja5">Ja</label>
      <input name="radio5" class="checkboxNein" id="Nein5" type="radio" value="0" required/>
      <label for="Nein5">Nein</label>
    </br>
    <input class="input-group-text" type="text" placeholder="Kommentar"/>
    <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?= $percentJa5 ?>%" aria-valuenow="<?= $percentJa5 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa5 ?>%</div>
  </div>
  <div class="progress">
    <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein5 ?>%" aria-valuenow="<?= $percentNein5 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein5 ?>%</div>
  </div>
      <h3 class="Frage6"> Frage 6 </h3>
      <input name="radio6" type="radio" id="Ja6" value="1" required/>
      <label for="Ja6">Ja</label>
      <input name="radio6" class="checkboxNein" id="Nein6" type="radio" value="0" required/>
      <label for="Nein6">Nein</label>
    </br>
    <input class="input-group-text" type="text" placeholder="Kommentar"/>
    <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?= $percentJa6 ?>%" aria-valuenow="<?= $percentJa6 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa6 ?>%</div>
  </div>
  <div class="progress">
    <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein6 ?>%" aria-valuenow="<?= $percentNein6 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein6 ?>%</div>
  </div>
      <h3> Frage 7 </h3>
      <input name="radio7" type="radio" id="Ja7" value="1" required/>
      <label for="Ja7">Ja</label>
      <input name="radio7" class="checkboxNein" id="Nein7" type="radio" value="0" required/>
      <label for="Nein7">Nein</label>
    </br>
    <input class="input-group-text" type="text" placeholder="Kommentar"/>
    <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?= $percentJa7 ?>%" aria-valuenow="<?= $percentJa7 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentJa7 ?>%</div>
  </div>
  <div class="progress">
    <div class="progress-bar1" role="progressbar" style="width: <?= $percentNein7 ?>%" aria-valuenow="<?= $percentNein7 ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentNein7 ?>%</div>
  </div>
  <div>
    <input class="btn btn-primary" type="submit" name="abschicken" value="Abschicken">
  </div>
</form></br>
</body>
</html>

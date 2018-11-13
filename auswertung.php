<?php
require_once "auswertForm.php";
$eintrag1 = $_POST["radio1"];
$eintrag2 = $_POST["radio2"];
$eintrag3 = $_POST["radio3"];
$eintrag4 = $_POST["radio4"];
$eintrag5 = $_POST["radio5"];
$eintrag6 = $_POST["radio6"];
$eintrag7 = $_POST["radio7"];
$db = mysqli_connect("localhost", "fri", "fri", "Ergebnisse");
if(isset($_POST["abschicken"])) {
      $insertQuery = "INSERT INTO fortschritt(`id`, `Frage1`, `Frage2`, `Frage3`, `Frage4`, `Frage5`, `Frage6`, `Frage7`) VALUES (NULL, '$eintrag1', '$eintrag2', '$eintrag3', '$eintrag4', '$eintrag5', '$eintrag6', '$eintrag7')";
      mysqli_query($db, $insertQuery);
  }
    mysqli_close($db);
?>

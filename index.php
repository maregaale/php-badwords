<?php 
  // variabili
  $bad_word = $_GET["badword"];
  $text = "...tieni giù le mani porca di quella... " . $bad_word . "!!!!";

  // funzioni sulle stringhe
  $text = str_replace($bad_word, "***", $text);
  $text_length = strlen($text);
?>

<!-- template html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

  </head>
  <body>
    <h1> <?php echo $text; ?> </h1>
    <p>La lunghezza del titolo è: <?php echo $text_length; ?></p>
  </body>
</html>
<?php 

$text = 'piove sulle tamerici salmastre ed arse, piove sui pini scagliosi ed irti, piove su i mirti divini.';

$censorWord = $_GET['wordToChange'];

$censorText = str_replace($censorWord, '***', $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-badwords</title>
</head>
<body>
  <div>
    <h2>Il testo originale:</h2>
    <p><?php echo $text ?></p>
    <p>Il testo è lungo: <?php echo strlen($text)?> caratteri</p>
  </div>

  <div>
    <h2>Il testo censurato:</h2>
    <p> <?php echo $censorText?> </p>
    <p>Il testo è lungo: <?php echo strlen($censorText)?> caratteri</p>
  </div>
</body>
</html>
<?php 
/*
1) Creare una variabile con un paragrafo di testo a vostra scelta.
2) Stampare a schermo il paragrafo e la sua lunghezza.
3) Una parola da censurare viene passata dall’utente tramite parametro GET.
4) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$text = 'Piove sulle tamerici salmastre ed arse, piove sui pini scagliosi ed irti piove su i mirti divini.'


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
  <h2>Il testo originale:</h2>
  <p><?php echo $text ?></p>
  <p>Il testo è lungo: <?php echo strlen($text)?> caratteri</p>
</body>
</html>
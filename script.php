<?php


$paragraph = $_POST["paragrafo"];

$paragraphLength = strlen($paragraph);

$badword = $_POST["badword"];

var_dump($paragraphLength);


$censuredWord = str_replace($badword, "******", $paragraph);



?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>

<h1>Testo Originale:</h1>
<p><?php echo $paragraph; ?></p>
<h4><?php  "The text length is: $paragraphLength";  ?></h4>
<h2>Testo Censurato:</h2>
<p><?php echo $censuredWord; ?></p>

<a href="index.php"> Back</a>
    
</body>
</html>
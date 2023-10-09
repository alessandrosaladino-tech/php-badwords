<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<h1 class="text-center">PHP BADWORDS</h1>

    <form action="script.php" method="POST" class="text-center">
        <div class="my-4">
            <label for="paragraph" class="">Inserisci il testo</label>
            <input name="paragraph" id="paragraph" cols="25" rows="5"></textarea>
        </div>
        <div>
            <label for="badword">Inserisci la parola da censurare</label>
            <input type="text" name="badword" id="badword">
        </div>
        <button type="submit" class="my-3">Invia</button>
    </form>

</body>

</html>
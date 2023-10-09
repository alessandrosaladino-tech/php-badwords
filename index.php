<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>

</head>

<body>

    <h1 class="text-center">PHP BADWARS</h1>

    <!-- Prende da script.php i metodi post -->
    <form action="script.php" method="post" class="">

        <div class="container justify-content-center d-flex align-items-center my-4">
            <label for="paragraph" class="pe-3">Scrivi qui del testo</label>
            <input type="text" name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Scrivi qui del testo"></textarea>
        </div>

        <div class="container d-flex justify-content-center my-4">
            <label for="badword" class="pe-3">Inserisci il testo da censurare</label>
            <input type="text" name="badword" id="badword" placeholder="Inserisci il testo da censurare">
        </div>

        <div class="container m-auto text-center">
            <input type="submit" value="Invia" class="">
        </div>

    </form>


</body>

</html>
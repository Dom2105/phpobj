<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php require_once("./templates/nav.php"); ?>

     <!-- Main -->
    <!-- Äußere Card -->
    <div class="card w-75 mt-5 m-auto">
        <div class="card-body">

            <!-- Innere Card/Form -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="./php/artikel-Impl.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Artikelname</label>
                            <input name="artikel" type="text" class="form-control" required aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Bitte gebe einen Namen zu dem Artikel an.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Preis</label>
                            <input name="preis" type="text" class="form-control" required aria-describedby="preisHelp">
                            <div id="preisHelp" class="form-text">Gebe bitte einen Preis an.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Bild</label>
                            <input name="bild" type="file" class="form-control" aria-describedby="bildHelp">
                            <div id="bildHelp" class="form-text">Bitte lade ein Bild hoch.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Artikel anlegen</button>
                    </form>
                </div>
            </div>
            <!-- Innere Card/Form Ende-->

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
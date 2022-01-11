<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
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
                    <form method="POST" action="./php/reg-Impl.php">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" required aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Bitte gebe deinen Vor- und Zu Namen an.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email addresse</label>
                            <input name="email" type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Wir geben deine Email adresse nicht weiter!.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Passwort</label>
                            <input name="passwort" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrieren</button>
                    </form>
                </div>
            </div>
            <!-- Innere Card/Form Ende-->

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
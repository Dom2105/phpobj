<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
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
            <!-- Innere Card -->
            <div class="card">
                <img src="./img/katze.jpg" class="card-img-top" alt="Katze im Schnee">
                <div class="card-body">
                    <h5 class="card-title text-center">Willkommen</h5>
                    <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore reiciendis voluptate, hic eligendi repellat quos eius omnis ad reprehenderit laborum aperiam vel et adipisci ex similique mollitia iure eos. Temporibus!</p>
                    <div class="d-flex justify-content-center">
                        <a href="./login.php" class="btn btn-secondary">Zum Login</a>
                    </div>
                </div>
            </div>
            <!-- innere Card Ende -->
        </div>
    </div>
    <!-- Äußere Card Ende -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
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
            <!-- Innere Card -->
            <div class="row">
                <?php
                require("./php/Dbconn.php");

                $result = $conn->query("SELECT * FROM artikel");
                while ($row = $result->fetch_assoc()) {


                    printf("<div class='col-sm-6'>
                    <div class='card mt-2'>
                        <img src='%s' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>%s</h5>
                            <p class='card-text text-center'>%s €</p>
                        </div>
                    </div>
                    </div>"
                    , $row["bildpfad"], $row["artikel"], $row["preis"]);
                }

                ?>
            </div>
            <!-- innere Card Ende -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
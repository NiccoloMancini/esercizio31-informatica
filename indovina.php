<?php
    session_start();
    if (isset($_SESSION["tentativi"])) {
        $_SESSION['tentativi'] += 1;
    } else {
        $_SESSION['tentativi'] = 0;
    }

    if (!isset($_SESSION['vittoria'])) {
        $_SESSION['vittoria'] = 0;
    } 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center">
        <?php
            $numCasuale = rand(1,20);
            $numInserito = $_GET["numeroInserito"];
            if ($numCasuale == $numInserito) {
                echo "<h1 class='bg-success text-white py-3'>Hai indovinato il numero! Il numero era $numCasuale</h1>";
                $_SESSION['vittoria'] += 1;
            }else{
                echo "<h1 class='bg-danger text-white py-3'>Hai sbagliato! Il numero era $numCasuale il numero da te inserito è $numInserito</h1>";
            }
            echo "<p>Hai fatto " . $_SESSION['tentativi'] . " tentativi<p>";
            echo "<p> Hai vinto " . $_SESSION['vittoria'] . " volte </p>";
        ?>
        <a href="scelta.html" class="text-center">pagina iniziale</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
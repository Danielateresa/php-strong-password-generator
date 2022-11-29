<?php

/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */


if (isset($_GET['passwordLen'])) {
    //var_dump($_GET['passwordLen']);


    function passwordGenerator($number)
    {
        /* //random characters
        $randomChar = random_bytes($number);


        $password = bin2hex($randomChar);

        return $password; */

        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVWXYZ<>§^$?!%&/@*-';

        $password = '';

        for ($i = 0; $i < $number; $i++) {
            $randomCharacter = $characters[rand(0, strlen($characters)-1)]; //carattere in posizione randomica

            $password.= $randomCharacter;
        }
        return $password;
    }

    $finalPassword = passwordGenerator($_GET['passwordLen']);
    //var_dump($finalPassword);
    //echo $finalPassword;
};
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP Strong Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-info">

    <div class="container text-center py-5">
        <header class="site_header">

            <h1 class="text-white">Strong Password Generator</h1>
            <h2 class="text-secondary">Genera una password sicura</h2>
        </header>
        <!-- /.site_header -->

        <main class="site_main p-5 my-5 bg-light">

            <form action="index.php" method="get">

                <div class="input_box d-flex justify-content-between me-5">
                    <label for="passwordLen">Lunghezza password</label>
                    <input type="number" name="passwordLen" id="passwordLen">
                </div>

                <div class="button_box text-start mt-5">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>

            <div class="result_box bg-white p-4 text-secondary">
                <h3>La tua password è:</h3>
                <h4><?php echo $finalPassword ?></h4>

            </div>

        </main>
        <!-- /.site_main -->
    </div>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */

include __DIR__ . '/functions.php';

if (isset($_GET['passwordLen'])) {
    //var_dump($_GET['passwordLen']);
    $classVisible = 'visible';
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

    <style>
    .result_box {
        display: none;
    }

    .visible {
        display: block;
    }

    .form-check {
        width: fit-content;
    }
    </style>

</head>

<body class="bg-info">

    <div class="container text-center py-5">
        <header class="site_header">

            <h1 class="text-white">Strong Password Generator</h1>
            <h2 class="text-secondary">Genera una password sicura</h2>
        </header>
        <!-- /.site_header -->

        <main class="site_main p-5 my-5 bg-light rounded">

            <form action="index.php" method="get">

                <div class="input_box d-flex justify-content-between me-5">
                    <div class="labels text-start text-secondary">
                        <h5 class="mb-5" for="passwordLen">Lunghezza password:</h5>
                        <h5 for="form-check">Consenti ripetizioni di più caratteri:</h5>
                    </div>
                    <div class="input_group">
                        <input class="mb-5" type="number" name="passwordLen" id="passwordLen">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="si id=" si" checked>
                            <label class="form-check-label" for="si">
                                Sì
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="no" id="no">
                            <label class="form-check-label" for="no">
                                No
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="lettere" id="lettere">
                            <label class="form-check-label" for="lettere">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="numeri" id="numeri">
                            <label class="form-check-label" for="numeri">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="simboli" id="simboli">
                            <label class="form-check-label" for="simboli">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>


                <div class="button_box text-start my-5">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>

            <div class="result_box bg-white p-4 text-secondary rounded <?php echo $classVisible ?>">

                <h4><?php echo 'La tua password è: ' . $finalPassword ?></h4>

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
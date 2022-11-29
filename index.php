<?php
require __DIR__ . '/assets/php/function.php';

if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    $numberLength = (int)$passwordLength;

    $yourPassword = generatePassword($numberLength);
}

$letters = $_GET['letters'];
$numbers = false;
$symbol = false;
var_dump($letters);

if (isset($_GET['letters'])) {
    $letters = true;
    var_dump($letters);
}


?>

<!doctype html>
<html lang='it'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Diego Cavenati'>
    <title>Php strong password generator</title>
    <!-- Font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- Personal CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>

    <main>
        <div class="mainBox">
            <div class="container text-center">
                <h1>Generate your secure password</h1>
                <span class="emoji">&#128540;</span>
                <!-- Form -->
                <form action="index.php" method="GET">
                    <div class="input">
                        <label for="passwordLength" class="form-label">Lunghezza password</label>
                        <input type="text" class="form-control" name="passwordLength" id="passwordLength" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Quanto vuoi che sia lunga la tua password?</small>
                    </div>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="letters" value="letters">
                            <label class="form-check-label" for="letters">Lettere</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="numbers" value="numbers">
                            <label class="form-check-label" for="numbers">Numeri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="symbol" value="symbol">
                            <label class="form-check-label" for="symbol">Simboli</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" value="submit">Genera</button>
                </form>
                <?php if (isset($yourPassword)) : ?>
                    <h3>Ecco la tua password:</h3>
                    <span><?= $yourPassword ?></span>
                <?php endif; ?>
            </div>
        </div>
    </main>


    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>
<?php
require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Wetransfer</title>
</head>

<body>

    <script src="wetransfer.php"></script>

    <div class="container">
        <div id="logo">
            <img src="images/logo.png" alt="logo">
        </div>

    </div>

    <div class="container2">
        <div id="add">
            <label class="newbtn">
                <img src="images/add.png">
                <input type="file" id="inpFile" name="myfile[]" multiple style="display: none;">
            </label>
        </div>

        <div id="mail">
            <input type="email" name="email-to" placeholder="email destinataire" id="email-to">
        </div>

        <div id="sub">
            <form method="post" action="wetransfer.php" enctype="multipart/form-data">
                <label class="newbtn">
                    <img src="images/sub.png">
                    <input type="submit" name='send_mail' id="submit_btn" multiple style="display: none;" />
                </label>
            </form>
        </div>
    </div>

    <div id="zone">
        <textarea id="msg" name="message" rows="8" cols="45">
             Salut la foule
        </textarea>
    </div>

    <div class="container">
        <canvas id="myCanvas" width="500" height="80"></canvas>
    </div>

    <div class="container">
        <form action="http://wetransfer/apple.php"><input type="submit" name="apple" value="Ne pas appuyer !"></form>
    </div>

    <script src="main.js"></script>

</body>

</html>
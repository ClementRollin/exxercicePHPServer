<?php
function getMessage() {
    $message = "Visiteur";
    $messageVisiteur = null;

    if (!isset($GET['name']) && !empty($_GET['name'])) {
        $message = htmlspecialchars($_GET['name']);
    }

    return $message;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>test</title>
    </head>
    <body>
        <h1>Bonjour Clément, je suis connecté</h1>
        <h4>Bonjour <?= getMessage() ?></h4>

        <form action="index.php">
            <div>
                <label for="name">
                    <input type="text" name="name" placeholder="Nom"/>
                    <button type="submit">Sign In</button>
                </label>
            </div>
        </form>
    </body>
</html>
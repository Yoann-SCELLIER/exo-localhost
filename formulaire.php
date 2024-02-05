<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>

    <form action="traitement_form.php" method="POST">
        <div>
            <label for="name">Nom</label>
            <input type="name" name="name">
        </div>
        <div>
            <label for="mail">Email</label>
            <input type="mail" name="mail">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">ENVOYER</button>
        </div>
    </form>

</body>

</html>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Page protégée par mot de passe</title>

    </head>

    <body>

        <p>Veuillez entrer votre pseudo et  mot de passe pour accèder au Tableau de bord:</p>

        <form action="view/BackOffice/admin.php" method="post">

            <p>
           Identifiant:     <input type="text" name="pseudo" /> <br>

          Mot de passe:   <input type="password" name="mot_de_passe" /> <br> <br>

            <input type="submit" value="Valider" />

            </p>

        </form>

        <p>Cette page est réservée à l'adminstrateur du blog. </p>

    </body>

</html>
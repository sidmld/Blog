<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Tableau de bord</title>

    </head>

    <body>

    

        <?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "sidi") 

    {

   

    ?>

        <h1>Tableau de bord</h1>

        <p> En cours de développement</p>    <br> <br> <br>

        <h2> Ajouter un nouveau Episode</h2>

<form action="../../index.php?action=addPost" method="post">
    <div>
        <label for="title"> Titre de l'épisode: </label> <br>
        <input type="text" id="title" name="title"/>
    </div>
    <div>
        <label for="content">Contenu: </label> <br>
        <textarea id="content" name="content">

        </textarea>
    </div>
    <div>
        <input type="submit"/>
    </div>
</form>

       

        <?php

    }

    else 

    {

        echo '<p>Mot de passe incorrect</p>';

    }

    ?>

    

        

    </body>

</html>
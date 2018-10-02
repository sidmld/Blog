<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <title>Tableau de bord</title>

    </head>

    <body>

    <div class="container-fluid">

        <?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "sidi") 

    {

   
        require_once '../../vendor/autoload.php';
    ?>

<br> 
       
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" href="#">Ajouter un nouveau billet </a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Supprimer un billet</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Modifier un billet</a>
  <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Deconnexion</a>
</nav>
       
   <br> <br>     <br> <br>  <br> <br> 
       
       {% set test= "test" %}
       {{test}}
       
       <div  style="border: 0px solid #000;width: 50%; padding:20px 30px;margin-left:5%;">
       
       
       
        <h4> Ajouter un nouveau Billet</h4> <br>

<form action="../../index.php?action=addPost" method="post">
<div class="form-group" >
    				<label for="title">Titre du Billet:  </label> <input type="text"
    					class="form-control" id="title"  name="title"
    					> 
    			</div>
   <!--  <div>
        <label for="title"> Titre du Billet: </label> <br>
        <input type="text" id="title" name="title"/>
    </div>  -->
    <div>
        <label for="content">Contenu: </label> <br>
        <textarea id="content" name="content" style="width: 100%; height:150px;">

        </textarea>
    </div>
    <div>
       <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>

      </div> 

        <?php

    }

    else 

    {

        echo '<p>Mot de passe incorrect</p>';

    }

    ?>

    

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  

       </div>
    </body>

</html>
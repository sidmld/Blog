<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title  ?> </title>
        <link href="public/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="public/css/header.css" />
    </head>

    <body>
      <?php include('Blocks/header.php') ?>

      <section id="services">
                 <div class="ser">
                     <h2>Billet Simple pour l'Alaska</h2>
                     <h4>Nouveau Roman</h4>
                     <div class="br">
                         <div class="hr1">
                             <hr>
                         </div>
                         <div class="pt"> </div>
                         <div class="hr2">
                             <hr>
                         </div>
                     </div>

                 </div>

                        <?= $content ?>

             </section>



    </body>

</html>

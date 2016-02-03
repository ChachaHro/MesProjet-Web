<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <meta name="description" content="Portfolio d’Amélia Pilou - BTS SIO SLAM">
       <meta name="author" content="Amélia Pilou">
       <link rel="icon" href="favicon.ico">
       <title>PROJET - Accueil</title>
       <link href="css/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" />
       <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
        
                                   <!--       header          -->
        <header>
            <?php
            include('includes/navbar.inc.php');
            include('includes/login.inc.php');
            include('includes/register.inc.php');
            ?>
        </header>
  <body>                                 
                                      <!--    Corps de la pages   -->
        <div class="jumbotron">
           <div class="container">
                   <div class="souscontenair" >
                <h1>Bonjour et bienvenue sur monProjet !</h1>
                <p>
                    <img id="Logo" class="pull-left img-rounded" src="images/Logo.png" alt="Logo du Projet" /> Quaestione igitur per multiplices dilatata fortunas cum ambigerentur quaedam, non nulla levius actitata constaret, post multorum clades Apollinares ambo pater et filius in exilium acti cum ad locum Crateras nomine pervenissent, villam scilicet suam quae ab Antiochia vicensimo et quarto disiungitur lapide, ut mandatum est, fractis cruribus occiduntur.
                </p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus &raquo;</a></p>
            </div>
        </div>
        </div>  
                                      
         


                                    
</body>
                                    <!--        Footer         -->
        <?php   
           include('includes/footinterm.inc.php');
            include('includes/footer.inc.php');
            //chargement JavaScript
            include('includes/scriptjs.inc.php');
        ?>
                                    
                                       
  
</html>

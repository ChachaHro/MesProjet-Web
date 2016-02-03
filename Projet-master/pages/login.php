<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <meta name="description" content="Portfolio d’Amélia Pilou - BTS SIO SLAM">
       <meta name="author" content="Amélia Pilou">
       <link rel="icon" href="../favicon.ico">
       <title>PROJET - Accueil</title>
       <link href="../css/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" />
       <link href="../css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
                                   <!--       header          -->
        <header>   
            <?php
            include('../includes/navbar.inc.php');
            ?>
        </header>


                                    <!--    Corps de la pages   -->
        <div class="jumbotron">
           <?php include('../includes/login.inc.php'); ?>
           <div class="container">
                   <div class="souscontenair" >
                                       
                       
            </div>
        </div>
        </div>


                                    

                                    <!--        Footer         -->
        <?php            
            include('../includes/footer.inc.php');
            //chargement JavaScript
            include('../includes/scriptjs.inc.php');
        ?>
                                    
                                            
    </body>

</html>

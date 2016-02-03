<?php       
            include('login.inc.php');
            include('register.inc.php');
            include('header.inc.php');


         echo       '<nav class="navbar navbar-inverse navbar-fixed-top">';
         echo       '<div class="container">';
         echo       '<div class="navbar-header">';
         echo       '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">';
         echo       '<span class="sr-only">Navigation raccourcie</span>';
         echo       '<span class="icon-bar"></span>';
         echo       '<span class="icon-bar"></span>';
         echo       '<span class="icon-bar"></span>';
         echo       '</button>';
         echo       '<a class="navbar-brand" href="">Mon Projet</a>';
         echo       '</div>';
         echo       '<div id="navbar" class="navbar-collapse collapse">';
         echo       '<ul class="nav navbar-nav">';
         echo       '<li class="active">';
         echo       '<a href="'.$dirIndex.'index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>';
         echo       '</li>';
         echo       '<li><a href="'. $dirPages .'chat.php"><span class="glyphicon glyphicon-object-align-top"></span> chat</a></li> '    ;       
         echo       '<li><a href="'. $dirPages .'about.php"><span class="glyphicon glyphicon-envelope"></span> About us</a></li>';
         echo       '</ul>';
         echo      '<ul class="nav navbar-nav navbar-right">';
         /*echo       '<li><a  href="'. $dirPages .'login.php"><span class="logreg-btn"> Sign in</span></a>';*/
         echo       '<button type="button" class="logreg-btn" data-toggle="modal" data-target="#myModal">sign in</button>';
         /*echo       '<li><a  href="'. $dirPages .'register.php"><span class="logreg-btn"> Register</span></a>';*/
         echo       '<button type="button" class="logreg-btn" data-toggle="modal" data-target="#myModal2">Register</button>';
         echo       '</ul>';
         
         echo       '</div>';
         echo       '</div>';
         echo       '</nav>';
       
      
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
        <title>Portfolio d'Amélia Pilou (BTS SIO 2016)</title>
        <link href="css/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/cv.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                            <span class="sr-only">Navigation raccourcie</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Mon portfolio</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li >
                                <a href="index.html"><span class="glyphicon glyphicon-home"></span> Accueil</a>
                            </li>
                            <li class="active"><a href="CV.html"><span class="glyphicon glyphicon-object-align-top"></span> CV</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <span class="glyphicon glyphicon-list-alt"></span> Réalisations
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header">En autonomie</li>
                                    <li role="presentation"><a role="menuitem" href="#">Application Android</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Site web</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Études et analyses</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">En entreprise</li>
                                    <li role="presentation"><a role="menuitem" href="#">Projet de 1ère année</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Projet de 2ème année</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <span class="glyphicon glyphicon-education"></span>
                                    Jury E4 BTS SIO <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header">Documentations contexte</li>
                                    <li role="presentation"><a role="menuitem" href="#">Présentation</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Application</a></li>

                                    <li role="presentation"><a role="menuitem" href="#">Missions à réaliser</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Annexes</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Fiches d'examen</li>
                                    <li role="presentation"><a role="menuitem" href="#">Situation professionnelle n°1</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Situation professionnelle n°2</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Démonstrations</li>
                                    <li role="presentation"><a role="menuitem" href="#">Démo SP n°1</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Démo SP n°2</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Codes sources</li>
                                    <li role="presentation"><a role="menuitem" href="#">Sources SP n°1</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Sources SP n°2</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Me contacter</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.navbar-collapse -->

            </nav>       
            <!-- Bootstrap core JavaScript ============================================ -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
            </script>
            <script src="css/bootstrap-3.3.5/js/bootstrap.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="css/bootstrap-3.3.5/js/ie10-viewport-bug-workaround.js">
            </script>
        </header>
 
        
        <div class="jumbotron">
            <div class="container">
                <div class="row cadreCV">
                    <div id="cv-entete" class="text-center">
                        <div id="cv-photo">
                            <img src="images/AmeliaPilou.jpg" alt="Ma photo d'identité" />
                        </div>
                        <div id="cv-intro">
                            <h1>Bonjour, je m'appelle <span>Amélia</span> et voici mon CV</h1>
                        </div>
                    </div>
                </div>
                <div class="row cadreCV">
                    <div class="col-xs-12 col-sm-7">
                        <!-- Partie Gauche -->
                        <div class="rubrique">
                            <h2><span class="glyphicon glyphicon-comment"></span> En quelques mots...</h2>
                            <p>J'ai 21 ans, j'habite Toulon et je suis passionnée d'informatique et de 
                                nouvelles technologies depuis mon plus jeune âge. Je suis actuellement un 
                                BTS Services Informatiques aux Organisations ce qui m'a décidé à aller au 
                                delà de la passion, afin de faire de l'informatique et plus particulièrement      
                                du développement d'applications, mon métier !
                            </p>
                        </div>
                        <div class="rubrique">
                            <h2><span class="glyphicon glyphicon-education"></span> Parcours scolaire</h2>
                            <ul id="parcours" class="clearfix">
                                <li>
                                    <div class="date pull-left">
                                        <span class="glyphicon glyphicon-record"></span>&nbsp;2016
                                    </div>
                                    <div class="details pull-right">
                                        <h3>BTS SIO option SLAM (en cours...)</h3>
                                        <p>Brevet de Technicien Supérieur "Services Informatiques aux 
                                            Organisations", option "Solutions Logicielles et Applications 
                                            Métiers"
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="date pull-left">
                                        <span class="glyphicon glyphicon-record"></span>&nbsp;2014
                                    </div>
                                    <div class="details pull-right">
                                        <h3>Bac STMG spécialité SIG</h3>
                                        <p>Baccalauréat "Sciences et Technologies du Management et de la 
                                            Gestion" spécialité "Systèmes d'Information de Gestion"
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="date pull-left">
                                        <span class="glyphicon glyphicon-record"></span>&nbsp;2011
                                    </div>
                                    <div class="details pull-right">
                                        <h3>Diplôme Nationale du Brevet</h3>
                                        <p></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rubrique">
                            <h2><span class="glyphicon glyphicon-briefcase"></span> 
                                Expériences professionnelles</h2>
                            <div class="experience clearfix">
                                <div class="col-xs-3">
                                    <div class="lieu">Dev'in Love</div>
                                    <div class="date">2016 (6 sem.)</div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="profession">Developpement PHP Symfony 2</div>
                                    <div class="details">Création/mise en œuvre de bundles, création de 
                                        services, création de commandes, respect de l'architecture MVC, 
                                        création de templates avec Twig, gestion de la persistance avec 
                                        Doctrine.
                                    </div>
                                </div>
                            </div>
                            <div class="experience clearfix">
                                <div class="col-xs-3">
                                    <div class="lieu">SCA Info</div>
                                    <div class="date">2015 (5 sem.)</div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="profession">Développement JEE</div>
                                    <div class="details">Création/mise en œuvre d'EJB (Entreprise Java 
                                        Beans), persistance des données avec JPA, mise en oeuvre du framework 
                                        MVC JSF (JavaServer Faces), création de composants graphique avec 
                                        RichFaces.
                                    </div>
                                </div>
                            </div>
                            <div class="experience clearfix">
                                <div class="col-xs-3">
                                    <div class="lieu">SCA Info</div>
                                    <div class="date">2014<br />(à distance)</div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="profession">Intégration avec Boostrap</div>
                                    <div class="details">Création d'un site vitrine pour présenter 
                                        l'entreprise et ses différents projets. Problématique de RWD 
                                        (Responsive Web Design), optimisation des contenus, tests 
                                        multisupports.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <!-- Partie Droite -->
                        <div class="rubrique clearfix">
                            <h2><span class="glyphicon glyphicon-user"></span> Me contacter</h2>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="mailto:amelia.pilou@gmail.com?subject=Contact depuis le CV en ligne" title="Mail de Amélia Pilou">
                                        <img class="contact-icon" src="images/cv/mail-dreamstale47.png" alt="Icone de mail" /> GMail.com
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="https://twitter.com/AmeliaPILOU" title="Lien vers la page Twitter de @AmeliaPilou">
                                        <img class="contact-icon" src="images/cv/twitter-dreamstale71.png" alt="Icone de Twitter" /> Twitter
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="http://fr.linkedin.com/in/ameliaPilou" title="Lien vers le profil LinkedIn de Amélia Pilou">
                                        <img class="contact-icon" src="images/cv/linkedin-dreamstale45.png" alt="Icone de LinkedIn" /> LinkedIn
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="https://github.com/AmeliaPilou/" title="Lien vers le profil GitHub d'Amélia Pilou">
                                        <img class="contact-icon" src="images/cv/github2-dreamstale35.png" alt="Icone de GitHub" /> GitHub
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="skype:ameliapilou?userinfo" title="Lien vers le profil Skype d'Amélia Pilou">
                                        <img class="contact-icon" src="images/cv/skype-dreamstale61.png" alt="Icone de Skype" /> Skype
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details pull-left">
                                    <a href="https://instagram.com/AmeliaPilou" title="Lien vers le profil Instagram d'Amélia Pilou">
                                        <img class="contact-icon" src="images/cv/instagram-dreamstale43.png" alt="Icone de Instagram" /> Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="competences" class="rubrique">
                            <h2><span class="glyphicon glyphicon-wrench"></span> Compétences</h2>
                            <div class="container">
                                <div class="libelle">Intégration web</div>
                                <div class="classement classement5"></div>
                            </div>
                            <div class="container">
                                <div class="libelle">Développement web</div>
                                <div class="classement classement4"></div>
                            </div>
                            <div class="container">
                                <div class="libelle">Administration</div>
                                <div class="classement classement3"></div>
                            </div>
                        </div>
                        <div id="langues" class="rubrique">
                            <h2><span class="glyphicon glyphicon-flag"></span> Langue</h2>
                            <div class="container">
                                <div class="langue">Français</div>
                                <div class="niveau">
                                    <span class="label label-default">A1</span>
                                    <span class="label label-default">A2</span>
                                    <span class="label label-default">B1</span>
                                    <span class="label label-default">B2</span>
                                    <span class="label label-default">C1</span>
                                    <span class="label label-success">C2</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="langue">Anglais</div>
                                <div class="niveau">
                                    <span class="label label-default">A1</span>
                                    <span class="label label-default">A2</span>
                                    <span class="label label-default">B1</span>
                                    <span class="label label-default">B2</span>
                                    <span class="label label-success">C1</span>
                                    <span class="label label-default">C2</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="langue">Portugais</div>
                                <div class="niveau">
                                    <span class="label label-default">A1</span>
                                    <span class="label label-default">A2</span>
                                    <span class="label label-default">B1</span>
                                    <span class="label label-default">B2</span>
                                    <span class="label label-success">C1</span>
                                    <span class="label label-default">C2</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="langue">Espagnol</div>
                                <div class="niveau">
                                    <span class="label label-default">A1</span>
                                    <span class="label label-default">A2</span>
                                    <span class="label label-success">B1</span>
                                    <span class="label label-default">B2</span>
                                    <span class="label label-default">C1</span>
                                    <span class="label label-default">C2</span>
                                </div>
                            </div>
                        </div>
                        <div class="rubrique">
                            <h2><span class="glyphicon glyphicon-music"></span> Passions</h2>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Sécurité
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Dév. Web
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Dév. Android
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Projets
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Running
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Lecture
                            </div>
                            <div class="passion">
                                <span class="glyphicon glyphicon-heart"></span> Musique
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>
           <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Étudiante du CNED</h2>
                        <p>J'ai choisi de suivre le BTS SIO à distance par le Centre National d'Enseignement à Distance car je souhaitais pourvoir avancer à mon
                            rythme, choisir moi même mon emploi du temps, apprendre à être autonome, pouvoir utiliser les outils de collaboration à distance et
                            devenir plus responsable en étant capable de me fixer moi même des contraintes, des limites et des objectifs à atteindre !
                        </p>
                        <p><a class="btn btn-default" href="http://www.cned.fr" target="_blank" role="button">En savoir plus &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Le BTS SIO</h2>
                        <p>Passionnée d'informatique depuis mon plus jeune âge, j'aime apprendre à faire de nouvelles choses avec mon ordinateur, mon
                            smartphone ou ma tablette. Une Geek ? Oui assurément ! Mais j'aimerais maintenant passer au niveau au dessus et devenir une
                            vraie Nerd, dans le bon sens du terme ! Après mon bac, le BTS SIO s'est présenté comme une évidence. Avec 62% d'Informatique "pure",
                            15% d'Économie, management et droit de l’informatique, 8% d'Anglais, 8% de culture générale et 7% de Maths, je savais que cette formation
                            allait me mettre le pied à l'étrier pour poursuivre ensuite dans cette voie et devenir informaticienne !
                        </p>
                        <p><a class="btn btn-default" href="https://fr.wikipedia.org/wiki/ Brevet_de_technicien_sup%C3%A9rieur_-_Services_informatiques_aux_organisa
                              tions" target="_blank" role="button">En savoir plus &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Option B SLAM</h2>
                        <p>En fin de premier semestre, on doit choisir notre option. "Solutions Logicielles et Applications Métiers" est l'option qui m'a séduit !
                            Travailler en équipe à la satisfaction de besoins d'un client, définir des spécifications, faire des tests, corriger des bugs,
                            faire de la maintenance... tout en apprenant les bases du métier de développeuse : modélisation des données avec Merise et UML,
                            programmation objet avec Java, C# et PHP, conception de bases de données sous PostgreSQL et MySQL, réalisation de composants
                            logiciels avec Symfony, gestion de projet, méthodes agiles... J'étais sûr que ça serait fait pour moi !
                        </p>
                        <p><a class="btn btn-default" href="http://www.onisep.fr/Ressources/ Univers-Formation/Formations/Post-bac/BTS-Services-informatiques-auxorganisations-option-B-solutions-logicielles-et-applications-metiers"
                              target="_blank" role="button">En savoir plus &raquo;</a></p>
                    </div>
                </div>
                <hr />
                <p id="copyright">&copy; Amélia Pilou 2015</p>
            </div>
         
        </footer>
    </body>

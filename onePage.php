<?php
require_once 'model/HomeModel.php';
require_once 'controller/homecontroller.php';

require_once 'model/AccueilModel.php';
require_once 'controller/accueilcontroller.php';

require_once 'model/NavbarModel.php';
require_once 'controller/navbarcontroller.php';

require_once 'model/A_proposModel.php';
require_once 'controller/a_proposcontroller.php';

require_once 'model/ContactModel.php';
require_once 'controller/contactcontroller.php';
    $pdo = require 'model/connect.php';

    $homeModel = new HomeModel($pdo);
    $homeController = new HomeController($homeModel);
    $title = $homeController->getTitle();
    $subtitle = $homeController->getSubtitle();
    $Logo = $homeController->getLogo();

    $accueilModel = new AccueilModel($pdo);
    $accueilController = new AccueilController($accueilModel);
    $background_text = $accueilController->getbackground_text();
    $center_text = $accueilController->getcenter_text();
    $bouton = $accueilController->getbouton();
    $image1 = $accueilController->getimage1();
    $image2 = $accueilController->getimage2();
    $image3 = $accueilController->getimage3();

    $navbarModel = new NavbarModel($pdo);
    $navbarController = new NavbarController($navbarModel);
    $lien1 = $navbarController->getlien1();
    $lien2 = $navbarController->getlien2();
    $lien3 = $navbarController->getlien3();
    $lien4 = $navbarController->getlien4();
    $lien5 = $navbarController->getlien5();

    $a_proposModel = new A_proposModel($pdo);
    $a_proposController = new A_proposController($a_proposModel);
    $text = $a_proposController->gettext();

    $contactModel = new ContactModel($pdo);
    $contactController = new ContactController($contactModel);
    $insert1 = $contactController->getinsert1();
    $insert2 = $contactController->getinsert2();
    $bouton_submit = $contactController->getbouton_submit();
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="stylesop.css">
</head>
 
<body> 
    <header> 
        <nav class="navbar"> 
            <div> <a href="login.php" class="logo"> <?=$title?> </a></div> 
            <button class="toggle-btn"  id="toggle-btn"> 
                <img src="burger-menu.svg" alt=""> 
            </button>
            <ul class="nav-links" id="nav-links"> 
                <li> <a href="#home"><?=$lien1?></a> </li> 
                <li>  <a href="#accueil"><?=$lien2?></a> </li> 
                <li>  <a href="#about"><?=$lien3?></a> </li> 
                <li>  <a href="#projects"><?=$lien4?></a> </li> 
                <li>  <a href="#contact"><?=$lien5?></a>  </li>
            </ul> 
        </nav> 
    </header>
    <section id="home" aria-label="Home"> 
        <h1><?=$title?></h1> <!-- Ajout d'un titre principal -->
        <div class="center-texth" aria-label="Texte central" > 
             <p> <?=$title?> </p> 
             <div class="circleh">
                 <img src="<?=$Logo?>" alt="Description de la photo"> <!-- Ajout de la photo dans un cercle -->
             </div>
        </div> 
        <div class="background-texth"> <?=$subtitle?> </div>
    </section>

    <section id="accueil" aria-label="Accueil">
        <h2>Accueil</h2> <!-- Ajout d'un titre secondaire -->
        <div class="center-texti"> 
            <p> <?=$center_text?> </p> 
        </div> 
        <p class="background-texti"> <?=$background_text?> </p> 
        <li>  <a href="#projects"><div class="button-containeri"> <button class="boton-elegantei"> <?=$bouton?> </button></div> </a> </li>

        <div class="rectangles-containeri"> 
        <div class="rectanglei"> <img src="<?=$image1?>" alt="Logo Photoshop" class="logo-img"></div> 
        <div class="rectanglei"> <img src="<?=$image2?>" alt="Logo Illustrator" class="logo-img"></div> 
        <div class="rectanglei"> <img src="<?=$image3?>" alt="Logo premiere pro" class="logo-img-1"></div> 
        </div> 
    </section>    


    <section id="about" aria-label="A propos">  
        <h2>À propos</h2> <!-- Ajout d'un titre -->  
        <div class="containera"> <div class="circlea"> <img src="<?=$Logo?>" alt="Guts"> </div> <div class="rectanglea"> <?=$text?> </div></div>
    </section>

    
    <section id="projects" aria-label="Projets">
        <div class="containerp"> 
            <div class="rowp"> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
            </div> <div class="rowp"> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
                <div class="rectanglep"></div> 
            </div> 
        </div>
    </section>    
      

    <section id="contact" aria-label="Contact">
        <div class="containerc">  
            <form>  
                 <label for="name"><?=$insert1?></label> 
                 <input type="text" id="name" name="name">  
                 <label for="email"><?=$insert2?></label> 
                 <input type="email" id="email" name="email">  
                 <input type="submit" value="<?=$bouton_submit?>">  
            </form>  
        </div>
    </section>      
      

</body>
</html>

 

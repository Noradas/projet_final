<?php

$conn = mysqli_connect('mysql-noradas.alwaysdata.net','noradas','noradas@12345','noradas_ftftfullstack') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>da SILVEIRA Nora Portfolio</title>

   <!-- Lien font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- Lien aos css   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- Lien vers le fichier css  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- Debut de la section header  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">accueil</a>
      <a href="#about">A propos</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- Fin de la section header -->

<!-- Debut de la section Accueil  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Salut, je suis Nora</h3>
      <span data-aos="fade-up" >Conseiller clientèle & web designer-developpeur Junior</span>
      <p data-aos="fade-up">
         Je suis developpeur junior en fin de formation, je suis motivée,
         passionnée, et avide d'apprentissage. Developpeur professionnel en 
         devenir que suis, je combine mon savoir faire en codage à mon expéreience 
         en Marketing pour trouver le juste milieu entre créativité, pragmatisme 
         et sens commercial. En divers j'aime voyager et découvrir, mes passe temps 
         favoris sont la musique, la documentation et la mode. N'hesitez pas à 
         me contacter pour vos différents projets.
      </p>
      <a data-aos="fade-up" href="#about" class="btn">A propos de moi</a>
   </div>

</section>

<!-- fin de la section Accueil -->

<!-- Début de la section A propos  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biographie</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Je me nomme da SILVEIRA Nora, je suis une jeune togolaise néé à Lomé.Passionnée par l'apprentissage et la polyvalence professionnelle,
         je suis une Commerciale-marketeuse de formation,et une developpeuse fullstack en devenir. </p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>Nom : </span> Nora da SILVEIRA </h3>
         <h3 data-aos="zoom-in"> <span>E-mail : </span> noradasilveira0@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>Adresse : </span> Lome, TOGO </h3>
         <h3 data-aos="zoom-in"> <span>Tel : </span> +228 97017372 </h3>
         <h3 data-aos="zoom-in"> <span>Age : </span> 27 ans </h3>
         <h3 data-aos="zoom-in"> <span>Experiences : </span> 6 mois</h3>
      </div>

      <a href="#" class="btn" download="" data-aos="fade-up">Telecharger CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Compétences</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>50%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>30%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>20%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Parcours & experiences</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Parcours</h3>

            <div class="box" data-aos="fade-right">
               <span>( Fév 2022 - Sept 2022 )</span>
               <h3>ENERGY GENERATION</h3>
               <p>
                  Est une organisation panafricaine qui encourage les jeunes Africains à relever les défis de leur génération.
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( Mars 2022 - Sept 2022 )</span>
               <h3>ENERGY GENERATION</h3>
               <p> Est une organisation panafricaine qui encourage les jeunes Africains à relever les défis de leur génération.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2021 )</span>
               <h3>PCCI - Togo</h3>
               <p> Est une Mutionationale opérant dans la gestion externalisée de la relation client.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2019 )</span>
               <h3>ADKontact</h3>
               <p> Est une Entreprise spécialisée dans la gestion de la relation clientèle et la vente à distance de contrats.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">

               <!-- Description du parcours a ENERGY GENERATION -->
               <span>( Fév 2022 - Sept 2022 )</span>
               <h3>FORMATION D-CLIC DWWM</h3>
               <p>Réalisation de l'ensemble des fonctionnalités techniques d'un site ou d'une application web.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>(Mars 2022 - Sept 2022 )</span>
               <h3>Graphic Design </h3>
               <p>Grace à l'auto-formation en graphisme à EG nous concevons pour vous de jolis design pour vos communications visuelles. </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>Conseiller clientèle</h3>
               <p>Nous garantissons la sitisfaction de vos clients et leurs fidélisation par l'acceuil,l'assistance,et les conseils.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2018 - 2019 )</span>
               <h3>Télévendeur & Conseiller clientèle</h3>
               <p>Nous faisons de la Publicité,du placement et la vente de divers produits et services en ligne.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- début de la section A propos -->

<!-- début de la section services -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>developpement web</h3>
         <p>Proposition et conception de sites web selon vos besoins,moyens et désirs ainsi que la maintenance de ces derniers.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Nous offrons des services de design graphique et d'infographie pour répondre à vos besoins.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>Bootstrap</h3>
         <p>Nous vous proposons notre assistance dans l'utilisation des templates boostrap et la maintenance de vos sites.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>CRM </h3>
         <p>Nous vous proposons une assistance de qualité dans la gestion de la relation client entre votre entreprise et sa clientèle.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3> Marketing digital</h3>
         <p>A cette ère du numérique nous vous proposons des services complets pour assurer la présence de votre entreprise sur internet .</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Nous couvrons toutes les problématiques liées à WordPress au travers d'une offre complète de services et de maintenance.</p>
      </div>

   </div>

</section>

<!-- fin de la section services -->

<!-- début de la section portfolio  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/developpeur-web.jpeg" alt="">
         <h3>web development</h3>
         <span><a href="https://github.com/Noradas/Projet_Togo-html">(fév - sept 2022)</a></span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/graphic-design-colorful-geometrical-lettering_52683-34588.webp" alt="">
         <h3>graphic design</h3>
         <span><a href="https://github.com/Noradas/CSS-Challenge-1">(fév - sept 2022)</a></span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/1566556486_1_js.jpeg" alt=""> 
         <h3>Projet-js</h3>
         <span><a href="https://github.com/Noradas/Formulaire-js">(fév - sept 2022)</a></span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/PHP-Quality-Devs-1-1288x724.jpeg" alt="">
         <h3>ProjetPHP</h3>
         <span><a href="https://github.com/Noradas/FormulairePHP">(fév - sept 2022)</a></span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/3d-ecommerce-website-mockup-with-cart-and-shopping-bags-free-online-mockup-generator-psd-template-1.jpeg" alt="">
         <h3>Site E-commerce</h3>
         <span><a href="https://github.com/Noradas/Minimal-Fullstack-application">(fév - sept 2022)</a></span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/3486061-site-maintenance-mise-a-jour-internet-logiciel-developpement-pages-web-avec-ordinateur-portable-vectoriel.jpeg" alt="">
         <h3>Maintenance de site web</h3>
         <span><a href="https://github.com/Noradas/Database">(fév - sept 2022)</a></span>
      </div>

   </div>

</section>

<!-- fin de la section portfolio -->

<!-- début la section contact  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>me contacter</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="saisissez votre nom" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="saisissez votre email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="saisissez votre numéro" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="saisissez votre  message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="envoyez un message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>téléphone</h3>
         <p>+228 97-01-73-72</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>noradasilveira0@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>adresse</h3>
         <p>Lomé, Togo</p>
      </div>

   </div>

</section>

<!-- fin de la section contact  -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Nora da SILVEIRA</span> </div>

<!-- lien vers un fichier js personnalisé  -->

<script src="js/script.js"></script>

<!-- lien vers aos js  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>
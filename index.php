<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://js.cx/libs/animate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./script.js"></script>
  <title>Portfolio</title>
</head>

<body style="font-family: 'Lato', sans-serif;
background-color: rgb(252, 179, 196);
font-weight: 800 !important;">
  <div id="gif-container"></div>
  <div id="scroll-gif-container">
    <img id="scroll-gif" src="./spideywall.gif" alt="Scroll GIF" width="70px" />
  </div>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div>
        <img id="brick" src="./output-onlinepngtools.png" alt="" width="100%">
        <img id="start" src="./spideylogo.png" alt="" width="10%" style="margin-left: 46px;">
        <img id="pause" src="./mileslogo.png" alt="" width="10%">
        <img id="stop" src="./venomlogo.png" alt="" width="10%">
      </div>
      <script>
        function makeEaseInOut(timing) {
          return function (timeFraction) {
            if (timeFraction < .5)
              return timing(2 * timeFraction) / 2;
            else
              return (2 - timing(2 * (1 - timeFraction))) / 2;
          }
        }


        function bounce(timeFraction) {
          for (let a = 0, b = 1; 1; a += b, b /= 2) {
            if (timeFraction >= (7 - 4 * a) / 11) {
              return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
            }
          }
        }

        let bounceEaseInOut = makeEaseInOut(bounce);

        brick.onclick = function () {
          animate({
            duration: 3000,
            timing: bounceEaseInOut,
            draw: function (progress) {
              // Récupérer la largeur de l'écran
              let screenWidth = window.innerWidth;

              // Récupérer la taille de la navigation
              let navWidth = document.querySelector('nav').offsetWidth;

              // Calculer la position horizontale relative en pourcentage
              let relativePosition = progress * 100;

              // Limiter la position à 70% de la taille de la navigation
              let maxPosition = (navWidth * 0.9) - brick.offsetWidth;

              // Calculer la position finale en pixels
              let positionInPixels = (relativePosition / 100) * maxPosition;

              brick.style.left = positionInPixels + 'px';
            }
          });
        };


      </script>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">À propos</a>
          </li>
          <li class="nav-item">
            <a id="spider" class="nav-link active" aria-current="page" href="#projet">Projets</a>
          </li>
          <li class="nav-item">
            <a id="man" class="nav-link active" aria-current="page" href="#Contact">Contact</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="resume">
      <img id="pp" src="./20221019_172413.jpg" alt="moi" width="40%">
      <div id="present">
        <h1 style="font-size: 5vh;font-weight: bold !important;">À propos</h1>
        <p>Bien le bonjour, Madame, Monsieur, voici pour vous le portfolio du big boss Miky Mike. Je suis un
          développeur junior de 25 ans. Ci-dessous vous trouverez mes projets réalisez pendant ma formation à la
          WebAcademy
          by Epitech.</p>
      </div>
      <script>
        window.addEventListener("DOMContentLoaded", function () {
          gsap.from("#present", {
            opacity: 0,
            y: 100,
            stagger: 0.1,
            duration: 3,
            ease: "power4.out"
          });
        });
      </script>
    </div>
    <div class="image-popup">
      <a href="./LesueurCV-Alternance-1.png" download>
        <img id="cv" src="Screenshot 2023-05-30 163924.png" alt="CV" width="50%"
          class="animate__animated animate__backInUp">
      </a>
      <a href="https://www.youtube.com/watch?v=BBJa32lCaaY" target="_blank">
        <h1 style="font-weight: 800 !important;" id="pub" class="animate__animated animate__bounce"
          onmouseenter="this.classList.add('animate__animated', 'animate__rubberBand')">Click On It For CV !</h1>
      </a>
      <script>
        const title = document.getElementById('pub');
        setInterval(() => {
          title.classList.add('animate__animated', 'animate__bounce');
          setTimeout(() => {
            title.classList.remove('animate__animated', 'animate__bounce');
          }, 1000);
        }, 2000);
        title.addEventListener('mouseover', () => {
          title.classList.add('animate__animated', 'animate__rubberBand');
        });

        title.addEventListener('mouseout', () => {
          title.classList.remove('animate__animated', 'animate__rubberBand');
        });
      </script>
    </div>
    <style>
      @media (min-width : 300px) and (max-width : 480px) {
        .container {
          display: flex;
          justify-content: center;
          align-items: center;
        }
      }
    </style>
    <a name="projet">
      <h1 style="font-size: 5vh;font-weight: bold !important;" id="projet">Projets</h1>
    </a>
    <h3 style="font-weight: 800 !important;text-align: center">Puissance4</h3>
    <div class="container">
      <form action="http://mikymike.infinityfreeapp.com/puissance4/index.html" target="_blank">
        <button class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
            <path
              d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z">
            </path>
            <path
              d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z">
            </path>
          </svg></button>
      </form>
      <div>
      </div>
    </div>
    <p style="text-align: center">Le Puissance 4 est présenté comme un petit projet réalisé en HTML, CSS et JS. Pour y
      jouer, il suffit de cliquer sur l'icône située au-dessus, qui vous redirigera directement vers la page du projet.
      Vous avez la possibilité de personnaliser le jeu en choisissant le nombre de lignes, les noms des joueurs, les
      couleurs et même le fond d'écran Good Game !</p>
    <div>
      <div id="divmaquette">
        <h3 style="font-weight: 800 !important; text-align: center; margin-top: 5%">Maquette</h3>
        <script>
          window.addEventListener("scroll", function () {
            var maquette = document.getElementById("maquette");
            var maquettePosition = maquette.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            if (maquettePosition - windowHeight <= 0) {
              maquette.style.opacity = 1;
              maquette.style.transition = "opacity 2s"; // Ajouter une transition de 1 seconde
            }
          });
        </script>
        <img id="maquette" src="./maquette.png" onclick="agrandir(this)" alt="maquette" style="opacity: 0;">
        <p style="text-align: center">Ptite maquette dans la simplicité.</p>
      </div>
      <script>
        function agrandir(image) {
          // Récupérer la largeur et la hauteur de l'écran
          var largeur_ecran = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
          var hauteur_ecran = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

          // Créer une fenêtre modale pour afficher l'image en grand
          var fenetre_modale = document.createElement("div");
          fenetre_modale.style.position = "fixed";
          fenetre_modale.style.top = "0";
          fenetre_modale.style.left = "0";
          fenetre_modale.style.width = "100%";
          fenetre_modale.style.height = "100%";
          fenetre_modale.style.backgroundColor = "rgba(0,0,0,0.7)";
          fenetre_modale.style.zIndex = "9999";
          fenetre_modale.onclick = function () {
            document.body.removeChild(fenetre_modale);
          };

          // Créer l'image à afficher en grand
          var image_agrandie = document.createElement("img");
          image_agrandie.src = image.src;
          image_agrandie.style.maxWidth = largeur_ecran + "px";
          image_agrandie.style.maxHeight = hauteur_ecran + "px";
          image_agrandie.style.position = "absolute";
          image_agrandie.style.top = "50%";
          image_agrandie.style.left = "50%";
          image_agrandie.style.transform = "translate(-50%, -50%)";

          // Ajouter l'image à la fenêtre modale
          fenetre_modale.appendChild(image_agrandie);

          // Ajouter la fenêtre modale au corps de la page
          document.body.appendChild(fenetre_modale);
        }
      </script>

    </div>
    <div id="push-swap">
      <h3 style="font-weight: 800 !important; text-align: center">PUSH-SWAP</h3>
      <p style="text-align: center">Ci-dessous se trouve un algorithme en PHP nommé push-swap, qui permet de trier un
        tableau de nombres entiers dans l'ordre croissant.</p>
      <form action="index.php" method="GET">
        <label for="la">Tableau de int à trier:</label>
        <input type="text" name="la" id="la" placeholder="Entrez les valeurs de la" required>
        <button id="mon-bouton" class="btn btn-dark" type="submit" name="submit">Envoyer</button>
      </form>

      <?php
      require_once('push_swap.php');
      $arr = $_GET['la'];
      $la = explode(' ', $arr);
      for ($i = 0; $i < count($la); $i++) {
        $la[$i] = intval($la[$i]);
      }
      $lb = [];
      push_swap($la, $lb);
      echo '<div style="background-color: coral; text-align: center;">';
      echo "Résultat : ";
      for ($i = 0; $i < count($la); $i++) {
        echo $la[$i], " ";
      }
      echo '</div>';
      ?>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var bouton = document.getElementById('mon-bouton');

          bouton.addEventListener('click', function (e) {
            var position = window.pageYOffset || document.documentElement.scrollTop; // Enregistrer la position actuelle
            sessionStorage.setItem('position', position.toString());
          });

          // Restaurer la position de défilement après le rechargement de la page
          var position = sessionStorage.getItem('position');
          if (position) {
            window.scrollTo(0, parseInt(position));
            sessionStorage.removeItem('position');
          }
        });
      </script>
    </div>

    <h3 style="font-weight: 800 !important; text-align: center">Twitter</h3>
    <p style="text-align: center"></p>
    <div class="container">
      <div class="box">
        <img src="./Twitter screen/Screenshot 2023-06-01 164127.png" alt="page d'accueil" width="50%">
        <span>Accueil</span>
      </div>
      <div class="box">
        <img src="./Twitter screen/Screenshot 2023-06-01 164300.png" alt="inscription" width="50%">
        <span>Modal Inscription</span>
      </div>
      <div class="box">
        <img src="./Twitter screen/Screenshot 2023-06-01 164717.png" alt="page profil" width="50%">
        <span>Profil</span>
      </div>
      <div class="box">
        <img src="./Twitter screen/Recording_2023-06-01_165902_AdobeExpress.gif" alt="page profil" width="50%">
        <span>Message</span>
      </div>
    </div>
  </main>
  <footer>
    <a name="Contact">
      <h1 style="font-size: 5vh;font-weight: bold !important;">Contactez-moi</h1>
    </a>
    <form action="https://formsubmit.co/mickael.lesueur@epitech.eu" method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="your@mail.com"
          required>
      </div>
      <input class="form-control" name="object" placeholder="Object" required>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
      </div>
      <button class="btn btn-dark" type="submit" name="submit" width="10%">Envoyer</button>
    </form>
  </footer>
</body>
<li> - Vignette click projets link to github</li>

</html>
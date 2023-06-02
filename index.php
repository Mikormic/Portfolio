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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <title>Portfolio</title>
</head>

<body style="font-family: 'Lato', sans-serif;
background-color: rgb(252, 179, 196);">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="70d306_6f20044023fc44d48a4b2d055e8b8ac4~mv2.png" alt="logo ML"
            width="40%"></a>
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
              <a class="nav-link active" aria-current="page" href="#">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="resume">
      <img src="20221019_172413.jpg" alt="moi" width="40%">
      <div>
        <h1>À propos</h1>
        <p class="h6">Bien le bonjour, Madame, Monsieur, voici pour vous le portfolio du big boss Miky Mike. Je suis un
          développeur junior de 25 ans. Ci-dessous vous trouverez mes projets réalisez pendant ma formation à la
          WebAcademy
          by Epitech.</p>
      </div>
    </div>
    <div>
      <a href="LesueurCV-Alternance.pdf" download>
        <img src="Screenshot 2023-05-30 163924.png" alt="CV" width="50%">
      </a>
    </div>
  </main>
  <form action="index.php" method="GET">
    <label for="la">Valeurs de la:</label>
    <input type="text" name="la" id="la" placeholder="Entrez les valeurs de la" required>
    <button type="submit" name="submit">Envoyer</button>
    <?php
    require_once('push_swap.php');
    $arr = $_GET['la'];
    $la = explode(' ', $arr);
    for ($i = 0; $i < count($la); $i++) {
      $la[$i] = intval($la[$i]);
    }
    $lb = [];
    push_swap($la, $lb);
    echo '<div style="background-color: green; text-align: center;">';
    echo "Résultat : ";
    for ($i = 0; $i < count($la); $i++) {
      echo $la[$i];
    }
    echo '</div>';
    ?>
  </form>
  <div>
    <img src="./Twitter screen/Screenshot 2023-06-01 164127.png" alt="page d'accueil">
    <img src="./Twitter screen/Screenshot 2023-06-01 164300.png" alt="inscription">
    <img src="./Twitter screen/Screenshot 2023-06-01 164717.png" alt="page profil">
    <video src="./Twitter screen/Recording 2023-06-01 165902.mp4" width="640" height="360" controls loop alt="présentation de la fonction message"></video>

  </div>
  <footer>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your@mail.com">
      </div>
      <input class="form-control" type="text" placeholder="Object">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
  </footer>
</body>
<li> - Vignette click projets link to github</li>
<li>|_.Screen du résult finale + description</li>

</html>
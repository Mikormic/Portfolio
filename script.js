window.onload = function () {
  let spider = document.getElementById('spider');
  spider.addEventListener('click', function (e) {
    var gifContainer = document.getElementById("gif-container");
    gifContainer.innerHTML = '<img src="./spider-man-gif-transition.gif" alt="GIF" />';
    setTimeout(function () {
      gifContainer.innerHTML = '';
    }, 1400); // Supprimer le GIF après 2 secondes
  });
  let man = document.getElementById('man');
  man.addEventListener('click', function (e) {
    var gifContainer = document.getElementById("gif-container");
    gifContainer.innerHTML = '<img src="./spider-man-gif-transition.gif" alt="GIF" />';
    setTimeout(function () {
      gifContainer.innerHTML = '';
    }, 1400); // Supprimer le GIF après 2 secondes
  });
  document.addEventListener('scroll', function () {
    var scrollGifContainer = document.getElementById('scroll-gif-container');
    if (isElementInViewport(scrollGifContainer)) {
      scrollGifContainer.classList.add('show');
    } else {
      scrollGifContainer.classList.remove('show');
    }
  });

  function isElementInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.bottom > 0 &&
      rect.right > 0 &&
      rect.left < (window.innerWidth || document.documentElement.clientWidth) &&
      rect.top < (window.innerHeight || document.documentElement.clientHeight)
    );
  }
  let play = document.getElementById('start');
  let pause = document.getElementById('pause');
  let stop = document.getElementById('stop');
  // Liste des noms de fichiers des musiques
const musiques = [
  './spider-man1.mp3',
  './spider-man2.mp3',
  './spider-man3.mp3',
  './spider-man4.mp3',
  './spider-man5.mp3'
];

// Choix aléatoire d'un index dans la liste des musiques
const indexAleatoire = Math.floor(Math.random() * musiques.length);

// Création de l'objet Audio avec le fichier de musique choisi aléatoirement
let son = new Audio(musiques[indexAleatoire]);
  console.log(play);
  play.addEventListener("click", function () {
    son.play()
  });
  pause.addEventListener("click", function () {
    son.pause();
  });
  stop.addEventListener("click", function () {
    son.pause();
    son.currentTime = 0;
  })
}
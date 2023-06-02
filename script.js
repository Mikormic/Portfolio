<script>
  function runCommand() {
    const inputElement = document.getElementById('cli-input');
    const command = inputElement.value;
    const outputElement = document.getElementById('cli-output');

    // Afficher la commande dans la console du navigateur
    console.log('Commande saisie :', command);

    // Effacer le contenu de l'espace de saisie
    inputElement.value = '';

    // Afficher les résultats dans la zone d'affichage du CLI
    outputElement.innerHTML += '<p>' + command + '</p>';
  }
</script>
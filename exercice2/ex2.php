<?php
include '../index.php';
?>
<p> Enoncé de l'exercice :Créer un formulaire demandant le nom et le prénom.
    Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>

<form action="user.php" method="POST"> 
    <label>Votre nom <input type="text" name="nom"></label>
    <label>Votre prénom <input type="text" name="prenom" ></label>
        <input type="submit" value="Valider" />
</form>
    </body>
</html>

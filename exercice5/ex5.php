<?php
include '../index.php';
?>

<p> Enoncé de l'exercice :  Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.</p>



<form action="ex5.php" method="POST">
    <select>
        <option value="choix1">Mr</option>
        <option value="choix2">Mme</option>
    </select>
    <label>Votre nom <input type="text" name="nom"></label>
    <label>Votre prénom <input type="text" name="prenom" ></label>
    <input type="submit" value="Valider" />
</form>
    </body>
</html>

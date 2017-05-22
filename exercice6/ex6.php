<?php
include '../index.php';
?>
<?php
$genderList = array('Monsieur', 'Madame');
//on déclare les variables par défaut
$name = '';
$firstName = '';
$userGender = 0;
// récuperation des données en POST ou en GET
if (isset($_POST['nom'])) {
    $name = $_POST['nom'];
} elseif (isset($_GET['nom'])) {
    $name = $_GET['nom'];
}
if (isset($_POST['prenom'])) {
    $firstName = $_POST['prenom'];
} elseif (isset($_GET['prenom'])) {
     $firstName = $_GET['prenom'];
}
if (isset($_POST['choix'])) {
    $userGender = $_POST['choix'];
} elseif (isset($_GET['choix'])) {
    $userGender = $_GET['nom'];
}
?>
<p> Enoncé de l'exercice :  Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

    Ce formulaire doit rediriger vers la page index.php.
    Vous avez le choix de la méthode.</p>

<?php
if ($name != '' || $firstName != '') {
?>
<p> Bonjour <?= $genderList[$genderUser] ?> <?= $name ?> <?= $firstName ?></p>
<?php
} else {
?>
<form name="index" action="index.php" method="POST">
    <div id="formulaire">
        <select name="sexe">
            <?php
            // On genere les options en allant chercher les données dans le tableau $genderList
            foreach ($genderList as $key => $gender) {
            ?>
            <option value="<?= $key ?>"><?= $gender ?></option>
            <?php
            }
            ?>
        </select>
        <label>Votre nom <input type="text" name="nom"></label>
        <label>Votre prénom <input type="text" name="prenom" ></label>
        <input type="submit" value="Valider" />
</form>
<?php 
 }    
?>
</body>
</html>

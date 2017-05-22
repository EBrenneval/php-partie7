<?php
include '../index.php';
?>

<p> enoncé: Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
    vérifier que le fichier transmis est bien un fichier pdf..</p>
<div>
<?php
// verifie que les champs sont valides et non vide. 
if (empty($_POST['nom']) || empty($_POST['prenom'])) {
    ?>

    <form action="ex8.php" method="POST" enctype="multipart/form-data">
        <select name="choix">
            <option value="M">M</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="nom">Votre nom </label>
        <input type="text" name="nom">
        <label>Votre prénom <input type="text" name="prenom" ></label>
        <label>Envoi de fichier<input type="file" name="fichier"></label>
        <input type="submit" value="Valider"/>
    </form>
<?php } else {
    ?>  
    <p>Bonjour <?php echo $_POST['choix']; ?></p>
    <p> Ton nom est  <?php echo $_POST['nom']; ?> !</p>
    <p> Ton prénom est  <?php echo $_POST['prenom']; ?> !</p>
<?php
}
// isset sert a vérifier si les champs existent. 
if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
    // on récup les données du fichier
    $fileInfo = pathinfo($_FILES['fichier']['name']);
    // on récup le nom 
    $fileName = $fileInfo['filename'];
    // on récup l'extension 
    $fileExtension = $fileInfo['extension'];
    ?>
    <p> Votre fichier est <?php echo $fileName;?> </p>
    <p> L'extension de votre fichier est <?php echo $fileExtension;?> </p>
    <?php
    // si l'extension est un pdf
    if($fileExtension == 'pdf'){
        ?>
       <p>Votre fichier est au format pdf</p><?php
    }else{
        ?>
    <p>Votre fichier n'est pas au format pdf</p><?php 
    }
}
?>
</div>
</body>
</html>

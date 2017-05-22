
<?php
include '../index.php';
?>





<form action="ex7.php" method="POST" enctype="multipart/form-data">
    <select name="choix">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>
    <label>Votre nom <input type="text" name="nom"></label>
    <label>Votre prénom <input type="text" name="prenom" ></label>
    <label>Envoi de fichier<input type="file" name="fichier"></label>
    <input type="submit" value="Valider" />
</form>

<p>Bonjour <?php echo $_POST['choix'];?></p>
<p> Ton nom est  <?php echo $_POST['nom'];?> !</p>
<p> Ton prénom est  <?php echo $_POST['prenom'];?> !</p>
<!-- pour tester l'extension du fichier-->
<p> <?php  
// isset sert a vérifier si les champs existent. 
            if (isset($_POST['choix']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
               // on crée la variable pr recup le fichier
                $fileInfos = $_FILES['fichier'];
                // pour recup l'extension 
                $fileExtension = $fileInfos['type'];
                // pour recup le nom 
                $fileName = $fileInfos['name'];
 echo $infosfichier['filename']. ' format ' .  $extension_upload;
            }               
 ?>
</p>
    </body>
</html>

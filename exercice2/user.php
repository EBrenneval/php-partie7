<?php
include '../index.php';
?><!-- la method Get, permet de recuperer le nom et le prénom -->
         <p> Ton nom est  <?php echo $_GET['nom']; ?> !</p>
        <p> Ton prénom est  <?php echo $_GET['prenom']; ?> !</p>
    </body>
</html>

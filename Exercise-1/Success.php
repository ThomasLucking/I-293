<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$numero = $_POST['numero'];
$npa = $_POST['npa'];
$ville = $_POST['ville'];
$dateNaissance = $_POST['date-naissance'];
$email = $_POST['email'];
$cours = $_POST['cours'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription Réussie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="images/Archlinuxlogo.png" alt="Arch Linux Logo" class="logo">
            <h1>Inscription Réussie!</h1>
        </div>
    </header>
    <main>
        <section class="sectionpart">
            <h2>Vos Informations</h2>
            <p><strong>Nom:</strong> <?= $nom ?></p>
            <p><strong>Prénom:</strong> <?= $prenom ?></p>
            <p><strong>Adresse:</strong> <?= $adresse ?> <?= $numero ?></p>
            <p><strong>Code Postal:</strong> <?= $npa ?></p>
            <p><strong>Ville:</strong> <?= $ville ?></p>
            <p><strong>Date de naissance:</strong> <?= $dateNaissance ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Cours:</strong> <?= $cours ?></p>
            <a href="index.php" class="btn-submit">Retour</a>
        </section>
    </main>
</body>
</html>
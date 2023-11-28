<?php
require_once('./layouts/header.php');
require_once('../backend/admin_myprofile.php');
?>

<div>
    <h2>Mon Profil</h2>

    <?php if (!isset($_GET['edit'])) : ?>

        <div>
            <p>
                Prénom : <?php echo $user['firstname']; ?>
            </p>
            <p>
                Nom : <?php echo $user['lastname']; ?>
            </p>
            <p>
                Nom d'utilisateur : <?php echo $user['username']; ?>
            </p>
            <div>
                Mot de passe : ********
            </div>
            <div>
                <a href="?edit">Modifier</a>
            </div>
            <div>
                <a href="./page_bookphone.php">Retour</a>
            </div>
        </div>

    <?php else : ?>

        <form action="../backend/admin_myprofile.php" method="post">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $user['firstname']; ?>">
            </div>
            <div>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $user['lastname']; ?>">
            </div>
            <div>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password_confirm">Confirmer le mot de passe</label>
                <input type="password" name="password_confirm" id="password_confirm">
            </div>
            <div>
                <input type="submit" value="Appliquer">
            </div>
            <div>
                <a href="./page_myprofile.php">Annuler</a>
            </div>

        <?php endif; ?>

</div>

<?php require_once('./layouts/header.php'); ?>
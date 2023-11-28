<?php 
require_once('./layouts/header.php');
require_once('../backend/add_phone.php');
?>

<div>
    <h2>Ajouter un contact</h2>
    <div>
        <form action="../backend/admin_add_phone.php" method="post">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
            </div>
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" placeholder="Nom" required>
            </div>
            <div>
                <label for="phone">Téléphone</label>
                <input type="text" name="phone" id="phone" placeholder="Téléphone" required>
            </div>
            <div>
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address" placeholder="Adresse" required>
            </div>
            <div>
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" placeholder="Ville" required>
            </div>
            <div>
                <label for="zip">Code postal</label>
                <input type="text" name="zip" id="zip" placeholder="Code postal" required>
            </div>
            <div>
                <label for="country">Pays</label>
                <input type="text" name="country" id="country" placeholder="Pays" required>
            </div>
            <div>
                <input type="submit" value="Confirmer">
            </div>
            <div>
                <a href="./page_bookphone.php">Retour</a>
            </div>
        </form>
    </div>







    <?php require_once('./layouts/header.php'); ?>
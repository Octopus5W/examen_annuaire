<?php 
require_once('./layouts/header.php');
require_once('../backend/profile.php'); 
?>

<div>
    <h2>Profil de <?php echo($contact['firstname']." ".$contact['lastname'])?></h2>

    <?php if (!isset($_GET['edit'])) : ?>

        <div>
            <p>
                Prénom : <?php echo $contact['firstname']; ?>
            </p>
            <p>
                Nom : <?php echo $contact['lastname']; ?>
            </p>
            <p>
                Nom d'utilisateur : <?php echo $contact['username']; ?>
            </p>
            <p>
                Numéro de téléphone : <?php echo $contact['phone_numer']; ?>
            </p>
            <p>
                Adresse : <?php echo $contact['address']; ?>
            </p>
            <p>
                Code postal : <?php echo $contact['postal_code']; ?>
            </p>
            <p>
                Ville : <?php echo $contact['city']; ?>
            </p>
            <p>
                Pays : <?php echo $contact['country']; ?>
            </p>
            <div>
                <a href="?edit">Modifier</a>
            </div>
            <div>
                <a href="./page_bookphone.php">Retour</a>
            </div>
        </div>

    <?php else : ?>

        <form action="../backend/admin_profile.php" method="post">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $contact['firstname']; ?>">
            </div>
            <div>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $contact['lastname']; ?>">
            </div>
            <div>
                <label for="phone_numer">Numéro de téléphone</label>
                <input type="text" name="phone_numer" id="phone_numer" value="<?php echo $contact['phone_numer']; ?>">
            </div>
            <div>
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address" value="<?php echo $contact['address']; ?>">
            </div>
            <div>
                <label for="postal_code">Code postal</label>
                <input type="text" name="postal_code" id="postal_code" value="<?php echo $contact['postal_code']; ?>">
            </div>
            <div>
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" value="<?php echo $contact['city']; ?>">
            </div>
            <div>
                <label for="country">Pays</label>
                <input type="text" name="country" id="country" value="<?php echo $contact['country']; ?>">
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
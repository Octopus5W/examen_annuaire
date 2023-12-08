<?php
require_once('layouts/header.php');
require_once("app/app.php");
if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: login.php');
} else {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $contact = get_contact_by_id($_GET['id']);
    } else {
        header('Location: bookphone.php?error=contact introuvable');
    }
}
?>

<?php if (isset($_GET['action']) && $_GET['action'] === "edit_contact") : ?>
    <span class="text-cyan-950 block py-4 font-semibold  text-center">Modifier le profil de <?php echo $contact['firstname']; ?></span>
    <form class="flex flex-col gap-3 justify-between h-screen" action="?action=edit_contact&id=<?php echo $_GET['id'] ?>" method="post">
        <div>
            <div class="flex flex-col">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $contact['firstname']; ?>">
                <?php if (isset($errors['firstname'])) {
                    displayErrors($errors['firstname']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $contact['lastname']; ?>">
                <?php if (isset($errors['lastname'])) {
                    displayErrors($errors['lastname']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="phone_number">Numéro de téléphone</label>
                <input type="text" name="phone_number" id="phone_number" value="<?php echo $contact['phone_number']; ?>">
                <?php if (isset($errors['phone_number'])) {
                    displayErrors($errors['phone_number']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address" value="<?php echo $contact['address']; ?>">
                <?php if (isset($errors['address'])) {
                    displayErrors($errors['address']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="postal_code">Code postal</label>
                <input type="text" name="postal_code" id="postal_code" value="<?php echo $contact['postal_code']; ?>">
                <?php if (isset($errors['postal_code'])) {
                    displayErrors($errors['postal_code']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" value="<?php echo $contact['city']; ?>">
                <?php if (isset($errors['city'])) {
                    displayErrors($errors['city']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label for="country">Pays</label>
                <input type="text" name="country" id="country" value="<?php echo $contact['country']; ?>">
                <?php if (isset($errors['country'])) {
                    displayErrors($errors['country']);
                } ?>
            </div>
            <div class="flex justify-between gap-3">
                <input class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" type="submit" value="Appliquer">
                <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" href="myprofile.php">Annuler</a>
            </div>
        </div>
    <?php else : ?>
        <span class="text-cyan-950 block py-4 font-semibold  text-center">Profil de <?php echo ($contact['firstname'] . " " . $contact['lastname']) ?></span>
        <div class="flex flex-col gap-3 justify-between h-full">
            <div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Prénom:</span>
                    <span><?php echo $contact['firstname']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Nom:</span>
                    <span><?php echo $contact['lastname']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Numéro de téléphone:</span>
                    <span><?php echo $contact['phone_number']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Adresse:</span>
                    <span><?php echo $contact['address']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Code postal:</span>
                    <span><?php echo $contact['postal_code']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Ville:</span>
                    <span><?php echo $contact['city']; ?></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-400">Pays:</span>
                    <span><?php echo $contact['country']; ?></span>
                </div>
            </div>
            <div class="flex justify-between gap-3">
                <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" href="?action=edit_contact&id=<?php echo $_GET['id'] ?>">Modifier</a>
                <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" href="bookphone.php">Retour</a>
            </div>
        </div>
    <?php endif; ?>

    <?php require_once('layouts/header.php'); ?>
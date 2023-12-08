<?php
require_once('layouts/header.php');
require_once("app/app.php");
if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: login.php');
}
?>

<?php if (isset($_GET['action']) && $_GET['action'] === "edit_user") : ?>
    <span class="text-cyan-950 block py-4 font-semibold   text-center">Modifier mon profil</span>
    <form class="flex flex-col gap-2 justify-between h-screen" action="myprofile.php?action=edit_user&send=true" method="post">
        <div>
            <div class="flex flex-col">
                <label class="text-gray-400" for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $_SESSION['login']['firstname']; ?>">
                <?php if (isset($errors['firstname'])) {
                    displayErrors($errors['firstname']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label class="text-gray-400" for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $_SESSION['login']['lastname']; ?>">
                <?php if (isset($errors['lastname'])) {
                    displayErrors($errors['lastname']);
                } ?>
            </div>
            <div class="flex flex-col">
                <label class="text-gray-400" for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" value="<?php echo $_SESSION['login']['username']; ?>">
                <?php if (isset($errors['username'])) {
                    displayErrors($errors['username']);
                } ?>
            </div>
        </div>
        <div class="flex justify-between gap-2">
            <input class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5 " type="submit" value="Appliquer">
            <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="myprofile.php">Annuler</a>
        </div>

    </form>
<?php else : ?>
    <span class="text-cyan-950 block py-4 font-semibold  text-center">Mon Profil</span>
    <div class="flex flex-col gap-2 justify-between h-screen">
        <div>
            <div class="flex flex-col">
                <span class="text-gray-400">Prénom:</span>
                <span><?php echo $_SESSION['login']['firstname']; ?></span>
            </div>
            <div class="flex flex-col">
                <span class="text-gray-400">Nom:</span>
                <span><?php echo $_SESSION['login']['lastname']; ?></span>
            </div>
            <div class="flex flex-col">
                <span class="text-gray-400">Nom d'utilisateur:</span>
                <span><?php echo $_SESSION['login']['username']; ?></span>
            </div>
        </div>
        <div class="flex justify-between gap-2">
            <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="?action=edit_user">Modifier</a>
            <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="bookphone.php">Retour</a>
        </div>
    </div>
<?php endif; ?>
<?php require_once('layouts/footer.php'); ?>
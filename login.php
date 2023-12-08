<?php
require_once("app/app.php");
require_once('layouts/header.php');
?>

<span class="text-cyan-950 bloc py-4 font-semibold  text-center">Connexion</span>
<form class="flex flex-col gap-2 justify-between h-screen" action="login.php?action=login" method="post">
    <div>
        <div class="flex flex-col">
            <label class=" px-2" for="username">Nom d'utilisateur</label>
            <input class="  rounded-lg h-16 px-2" type="username" name="username" id="username" placeholder="utilisateur" required>
            <?php if (isset($errors['username'])) {
                displayErrors($errors['username']);
            } ?>
        </div>
        <?php if (!isset($_GET['forgot_password'])) : ?>

            <div class="flex flex-col">
                <label class="px-2" for="password">Mot de passe</label>
                <input class="rounded-lg h-16 px-2" type="password" name="password" id="password" placeholder="******" required>
                <?php if (isset($errors['password'])) {
                    displayErrors($errors['password']);
                } ?>
            </div>
    </div>
    <div class="flex items-center flex-col gap-2">
            <input class="bg-gray-300 hover:bg-gray-200 block 0 rounded-lg h-16 w-1/2" type="submit" value="Confirmer">
            <a class="text-gray-400 hover:text-gray-300 block py-2" href="?forgot_password">Mot de passe oublié ?</a>
    </div>
<?php else : ?>
    <div class="flex flex-col">
        <label class="px-2" for="passphrase">Quel est votre phrase secrète ?</label>
        <select class="rounded-lg h-16  px-2" name="passphrase" id="passphrase" required>
            <option value="Quel est le nom de votre premier animal de compagnie ?">Quel est le nom de votre premier animal de compagnie ?</option>
            <option value="Quel est le nom de votre premier professeur ?">Quel est le nom de votre premier professeur ?</option>
            <option value="Quel est le nom de votre premier amour ?">Quel est le nom de votre premier amour ?</option>
            <option value="Quel est le nom de votre premier ami ?">Quel est le nom de votre premier ami ?</option>
            <option value="Quel est le nom de votre premier collègue ?">Quel est le nom de votre premier collègue ?</option>
            <option value="Quel est le nom de votre premier voisin ?">Quel est le nom de votre premier voisin ?</option>
        </select>
        <?php if (isset($errors['passphrase'])) {
                displayErrors($errors['passphrase']);
            } ?>
    </div>
    <div class="flex flex-col">
        <label class="px-2" for="response">Réponse secrète</label>
        <input class="rounded-lg h-16 px-2" type="text" name="response" id="response" placeholder="Réponse secrète" required>
        <?php if (isset($errors['response'])) {
                displayErrors($errors['response']);
            } ?>
    </div>
    <div class="flex flex-col">
        <label class="px-2" for="new_password">Nouveau mot de passe</label>
        <input class="rounded-lg h-16 px-2" type="password" name="new_password" id="new_password" placeholder="Nouveau mot de passe" required>
        <?php if (isset($errors['new_password'])) {
                displayErrors($errors['new_password']);
            } ?>
    </div>
    <div class="flex flex-col">
        <label class="px-2" for="new_password_confirmation">Confirmation du nouveau mot de passe</label>
        <input class="rounded-lg h-16 px-2" type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Nouveau mot de passe" required>
        <?php if (isset($errors['new_password_confirmation'])) {
                displayErrors($errors['new_password_confirmation']);
            } ?>
    </div>
    </div>
    <div class="flex justify-between gap-2">
        <input class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" type="submit" value="Confirmer">
        <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="login.php">Annuler</a>
    </div>
<?php endif; ?>
</form>



<?php require_once('layouts/footer.php'); ?>
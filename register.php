<?php
require_once('layouts/header.php');
require_once("app/app.php");
?>

<span class="text-cyan-950 block py-4 font-semibold  text-center">Inscription</span>
<form class="flex flex-col gap-3 justify-between h-screen" action="?action=register" method="post">
    <div>
        <div class="flex flex-col">
            <label class=" px-2" for="firstname">Prénom</label>
            <input class=" rounded-lg h-12 px-2" type="firstname" name="firstname" id="firstname" placeholder="Prénom" required>
            <?php if (isset($errors['firstname'])) {
                displayErrors($errors['firstname']);
            } ?>
        </div>

        <div class="flex flex-col">
            <label class=" px-2" for="lastname">Nom</label>
            <input class=" rounded-lg h-12 px-2" type="lastname" name="lastname" id="lastname" placeholder="Nom" required>
            <?php if (isset($errors['lastname'])) {
                displayErrors($errors['lastname']);
            } ?>
        </div>

        <div class="flex flex-col">
            <label class=" px-2" for="username">Nom d'utilisateur</label>
            <input class=" rounded-lg h-12 px-2" type="username" name="username" id="username" placeholder="Nom d'utilisateur" required>
            <?php if (isset($errors['username'])) {
                displayErrors($errors['username']);
            } ?>
        </div>

        <div class="flex flex-col">
            <label class=" px-2" for="password">Mot de passe</label>
            <input class=" rounded-lg h-12 px-2" type="password" name="password" id="password" placeholder="Mot de passe" required>
            <?php if (isset($errors['password'])) {
                displayErrors($errors['password']);
            } ?>
        </div>

        <div class="flex flex-col">
            <label class=" px-2" for="password_confirmation">Confirmation du mot de passe</label>
            <input class=" rounded-lg h-12 px-2" type="password" name="password_confirmation" id="password_confirmation" placeholder="Mot de passe" required>
            <? if (isset($errors['password_confirmation'])) {
                displayErrors($errors['password_confirmation']);
            } ?>
        </div>

        <div class="flex flex-col">
            <label class=" px-2" for="passphrase">Quel est votre phrase secrète ?</label>
            <select class=" rounded-lg h-12 px-2" name="passphrase" id="passphrase" required>
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
            <label class=" px-2" for="response">Réponse</label>
            <input class=" rounded-lg h-12 px-2" type="text" name="response" id="response" placeholder="Réponse" required>
            <?php if (isset($errors['response'])) {
                displayErrors($errors['response']);
            } ?>
        </div>
    </div>
    <div class="flex justify-between gap-3">
        <input class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" type="submit" value="S'inscrire">
        <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-12 w-1/2 text-center py-3" href="home.php">Retour</a>
    </div>


    <?php require_once('layouts/footer.php'); ?>
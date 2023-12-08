<?php
require_once("app/app.php");
require_once('layouts/header.php');
?>

<div class="max-w-xl mx-auto px-4 sm:px-6 flex flex-col gap-2 bg-gray-200 justify-between items-center h-screen">
    <h1 class="text-cyan-950 bloc py-4 font-semibold text-center">Annuaire sans inscription par Email</h1>
    <div class="w-80">
        <img class="w-full h-auto" src="images/annuaire.png" alt="preview de l'annuaire">
    </div>
    <div class="flex gap-1">
        <img class="w-12 h-10" src="images/github-mark-white.png" alt="github">
        <a class="block w-full text-gray-400 hover:text-gray-300 block py-2" href="https://github.com/Octopus5W">Lien Github : Octopus5W</a>
    </div>

    <div class="flex justify-between gap-2 w-full">
        <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="register.php">S'inscrire</a>
        <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="login.php">Se connecter</a>
    </div>
</div>
<?php require_once('layouts/footer.php'); ?>
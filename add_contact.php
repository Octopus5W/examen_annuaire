<?php
require_once("app/app.php");
require_once('layouts/header.php');
?>

<span class="text-cyan-950 block py-4 font-semibold  text-center">Ajouter un contact</span>
<form class="block flex flex-col gap-2 justify-between h-screen" action="?action=add_contact" method="post">
    <div>
        <div class="flex flex-col">
            <label class="px-2" class=" px-2" for="firstname">Prénom</label>
            <input class="rounded-lg h-12 px-2" type="text" name="firstname" id="firstname" placeholder="Prénom" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="lastname">Nom</label>
            <input class="rounded-lg h-12 px-2" type="text" name="lastname" id="lastname" placeholder="Nom" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="phone_number">Téléphone</label>
            <input class="rounded-lg h-12 px-2" type="text" name="phone_number" id="phone_number" placeholder="Téléphone" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="address">Adresse</label>
            <input class="rounded-lg h-12 px-2" type="text" name="address" id="address" placeholder="Adresse" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="city">Ville</label>
            <input class="rounded-lg h-12 px-2" type="text" name="city" id="city" placeholder="Ville" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="postal_code">Code postal</label>
            <input class="rounded-lg h-12 px-2" type="text" name="postal_code" id="postal_code" placeholder="Code postal" required>
        </div>
        <div class="flex flex-col">
            <label class="px-2" for="country">Pays</label>
            <input class="rounded-lg h-12 px-2" type="text" name="country" id="country" placeholder="Pays" required>
        </div>
    </div>
    <div class="flex justify-between gap-2">
        <input class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 py-5" type="submit" value="Confirmer">
        <a class="block bg-gray-300 hover:bg-gray-200 rounded-lg h-16 w-1/2 text-center py-5" href="bookphone.php">Retour</a>
    </div>
</form>
<?php require_once('layouts/footer.php'); ?>
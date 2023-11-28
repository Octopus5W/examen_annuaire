<?php 
require_once('./layouts/header.php'); 
require_once('../backend/bookphone.php');
?>

<div>
    <h2>Mon annuaire</h2>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <a href="./page_profile.php?id='<? echo $contact["id"]?>'">
                            <td><? echo $contact['firstname'] ?></td>
                            <td><? echo $contact['lastname'] ?></td>
                            <td><? echo $contact['phone'] ?></td>
                        </a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <div>
                <a href="./page_myprofile.php">Mon profil</a>
            </div>
            <div>
                <a href="./page_add_phone.php">Ajouter un contact</a>
            </div>
        </div>
    </div>
</div>
<?php require_once('./layouts/header.php'); ?>
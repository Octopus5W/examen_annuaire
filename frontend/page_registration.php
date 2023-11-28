<?php require_once('./layouts/header.php'); ?>
<div>
    <h2>Inscription</h2>
    <form action="../backend/admin_registration.php" method="post">
        <div>
            <label for="firstname">Prénom</label>
            <input type="firstname" name="firstname" id="firstname" placeholder="Prénom" required>
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="lastname" name="lastname" id="lastname" placeholder="Nom" required>
        </div>

        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="username" name="username" id="username" placeholder="Nom d'utilisateur" required>
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        </div>

        <div>
            <label for="password_confirmation">Confirmation du mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Mot de passe" required>
        </div>

        <div>
            <label for="passphrase">Quel est votre phrase secrète ?</label>
            <select name="passphrase" id="passphrase" required>
                <option value="Quel est le nom de votre premier animal de compagnie ?">Quel est le nom de votre premier animal de compagnie ?</option>
                <option value="Quel est le nom de votre premier professeur ?">Quel est le nom de votre premier professeur ?</option>
                <option value="Quel est le nom de votre premier amour ?">Quel est le nom de votre premier amour ?</option>
                <option value="Quel est le nom de votre premier ami ?">Quel est le nom de votre premier ami ?</option>
                <option value="Quel est le nom de votre premier collègue ?">Quel est le nom de votre premier collègue ?</option>
                <option value="Quel est le nom de votre premier voisin ?">Quel est le nom de votre premier voisin ?</option>
            </select>
        </div>

        <div>
            <label for="response">Réponse</label>
            <input type="text" name="response" id="response" placeholder="Réponse" required>
        </div>

        <div>
            <div>
                <input type="submit" value="S'inscrire">
            </div>
            <div>
                <a href="./page_home.php">Retour</a>
            </div>
        </div>
</div>








<?php require_once('./layouts/header.php'); ?>
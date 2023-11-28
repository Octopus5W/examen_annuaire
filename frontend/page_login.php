<?php 
require_once('./layouts/header.php'); 
require_once('../backend/admin_login.php');
?>

<div>
    <h2>Se connecter</h2>
    <form action="../backend/admin_login.php" method="post">
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="username" name="username" id="username" placeholder="Nom d'utilisateur" required>
        </div>
        <div>

            <?php if (!isset($_GET['forgot_password']) && (!isset($_GET['passphrase']))) : ?>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <div>
                    <a href="?forgot_password">Mot de passe oublié ?</a>
                </div>
                <div>
                    <input type="submit" value="Se connecter">
                </div>
                <div>
                    <a href="./page_home.php">Retour</a>
                </div>
        </div>
    <?php else : ?>
        <?php if (!isset($_GET['passphrase'])) : ?>
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
                <a href="?passphrase">Confirmer</a>
            </div>
            <div>
                <a href="./page_login.php">Annuler</a>
            </div>

        <?php else : ?>
            <div>
                <label for="new_password">Nouveau mot de passe</label>
                <input type="password" name="new_password" id="new_password" placeholder="Nouveau mot de passe" required>
            </div>
            <div>
                <label for="new_password_confirmation">Confirmation du nouveau mot de passe</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Nouveau mot de passe" required>
            </div>
            <div>
                <input type="submit" value="Confirmer">
            </div>
        <?php endif; ?>
    <?php endif; ?>


    </form>
    <div>
        <div>
            <a href="page_registration">S'inscrire</a>
        </div>
        <div>
            <a href="pag_login">Se connecter</a>
        </div>
    </div>
</div>







<?php require_once('./layouts/header.php'); ?>
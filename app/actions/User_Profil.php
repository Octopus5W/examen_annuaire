<?php
if (isset($_GET['action']) && $_GET['action'] === "edit_user" && isset($_GET['send']) && $_GET['send'] === "true" && isset($_POST) && !empty($_POST)) {
    $errors = formRequired($_POST, [
        'firstname' => ['required', 'max:50'],
        'lastname' => ['required', 'max:50'],
        'username' => ['required', 'max:50'],
    ]);

    // s'il n'y a pas d'erreur, on redirige vers la page de connexion
    if (empty($errors)) {
        // on vérifie et transforme les données reçues du formulaire pour éviter injection de code
        $data = formSecurity($_POST);

        //requête pour ajouter un utilisateur dans la base de données
        try {
            edit_user($data);
            $_SESSION["login"] = get_user($_SESSION['login']['id']);
        } catch (PDOException $error) {
            var_dump($error->getMessage());
        }

        header('Location: myprofile.php');
    }
}

<?php
// se connecter
if (isset($_GET['action']) && $_GET['action'] === 'login' && isset($_POST) && !empty($_POST)) {
    
    // on sécurise les données reçues du formulaire pour éviter injection de code
    $data = formSecurity($_POST);

    // on vérifie que l'utlisateurs existe dans la base de données et on récupère ses données
    try {
        $user = get_user_by_log($data['username'], $data['password']);
    } catch (PDOException $error) {
        var_dump($error->getMessage());
    }

    // si l'utilisateur existe, on le connecte. Sinon on renvoie un message d'erreur
    if($user) {
        $_SESSION['login'] = $user;
        header('Location: bookphone.php');
    } else {
        $error =  'Nom d\'utilisateur ou mot de passe incorrect';
        header("Location: login.php?error=$error");
    }
}


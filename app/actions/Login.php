<?php
if (isset($_GET['action']) && $_GET['action'] === 'login' && isset($_POST) && !empty($_POST)) {
    $data = formSecurity($_POST);


    try {
        $user = get_user_by_log($data['username'], $data['password']);
    } catch (PDOException $error) {
        var_dump($error->getMessage());
    }


    if($user) {
        $_SESSION['login'] = $user;
        header('Location: bookphone.php');
    } else {
        $error =  'Nom d\'utilisateur ou mot de passe incorrect';
        header("Location: login.php?error=$error");
    }
}


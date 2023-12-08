<?php
if(isset($_GET['action']) && $_GET['action'] === 'register' && isset($_POST) && !empty($_POST)){
    
    // on vérifie que les champs obligatoires sont remplis avec les conditions requises
    $errors = formRequired($_POST, [
        'firstname' => ['required', 'max:50'],
        'lastname' => ['required', 'max:50'],
        'username' => ['required', 'max:50'],
        'password' => ['required', 'min:5', 'max:255'],
        'password_confirmation' => ['required', 'min:5', 'max:255'],
        'passphrase' => ['required'],
        'response' => ['required', 'max:255']
    ]);

    // s'il n'y a pas d'erreur, on redirige vers la page de connexion
    if (empty($errors)) {
        if ($_POST['password'] === $_POST['password_confirmation']) {
            
            $secret = $_POST['passphrase'].$_POST['response'];
            // on ajoute la variable data et le champ secret  dans le tableau $data
            $data = $_POST + ['secret' => $secret];
    
            // on vérifie et transforme les données reçues du formulaire pour éviter injection de code
            $data = formSecurity($data);
    
            //requête pour ajouter un utilisateur dans la base de données
            try{
                add_user($data);
            }catch(PDOException $error){
                var_dump($error->getMessage());
            }

            header('Location: login.php');
        }
    }
}
?> 
<?php
if(isset($_GET['action']) && $_GET['action'] === 'add_contact' && isset($_POST) && !empty($_POST)){
    
    // on vérifie que les champs obligatoires sont remplis avec les conditions requises
    $errors = formRequired($_POST, [
        'firstname' => ['required', 'max:50'],
        'lastname' => ['required', 'max:50'],
        'phone_number' => ['required', 'numeric', 'max:25'],
        'address' => ['required', 'max:100'],
        'city' => ['required', 'max:50'],
        'postal_code' => ['required', 'numeric', 'max:9'],
        'country' => ['required', 'max:50']
    ]);

    if(empty($errors)){  
            // on vérifie et transforme les données reçues du formulaire pour éviter injection de code
            $data = formSecurity($_POST);
    
            //requête pour ajouter un utilisateur dans la base de données return checked si ok sinon message d'erreur
            $check = add_contact($data);
            if($check === "checked"){
                header('Location: bookphone.php');    
            }
            else{
                $errors['global'][] = 'Une erreur est survenue lors de l\'ajout du contact';
            }
    }
}
?>
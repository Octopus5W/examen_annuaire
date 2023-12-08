<?php
if (isset($_GET['action']) && $_GET['action'] === "edit_contact" && isset($_POST) && !empty($_POST)) {
        $errors = formRequired($_POST, [
            'firstname' => ['required', 'max:50'],
            'lastname' => ['required', 'max:50'],
            'phone_number' => ['required', 'max:25'],
            'address' => ['max:100'],
            'postal_code' => ['max:9'],
            'city' => ['max:50'],
            'country' => ['max:50'],
        ]);
        // s'il n'y a pas d'erreur, on redirige vers la page de connexion
        if (empty($errors)) {
            // on vérifie et transforme les données reçues du formulaire pour éviter injection de code
            $data = formSecurity($_POST);

            //requête pour ajouter un utilisateur dans la base de données
            try {
                edit_contact_by_id( $_GET['id'], $data);
            } catch (PDOException $error) {
                var_dump($error->getMessage());
            }

            header('Location: profile.php?id='.$_GET['id']);
        }
    }
?>
<?php 

// fonction vérifie/transforme les données reçues du formulaire pour éviter injection de code
function formValidation($data) {
    foreach($data as $item) {
        $item = htmlspecialchars(stripslashes(trim($item)));
    }
    
    return $data;
}

// fonction qui affiche les erreurs données en paramètre sous forme de liste
function displayErrors($errors) {
    foreach($errors as $error) {
        echo "<p class='text-red-400'>$error</p>";
    }
}

?>
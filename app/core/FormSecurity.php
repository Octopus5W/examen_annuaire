<?php 
// fonction vérifie/transforme les données reçues du formulaire pour éviter injection de code
function formSecurity($data) {
    foreach($data as $key => $item) {
        $item = htmlspecialchars(stripslashes(trim($item)));
        if($key === 'password' || $key === 'secret') {
            $item = password_hash($item, PASSWORD_DEFAULT);
        }
    }
    return $data;
}
?>
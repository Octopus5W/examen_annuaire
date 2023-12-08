<?php
    function formKeyTraduction($word)
    {
    switch ($word) {
        case 'firstname':
            $word = 'prénom';
            break;
        case 'lastname':
            $word = 'nom';
            break;
        case 'username':
            $word = 'nom d\'utilisateur';
            break;
        case 'password':
            $word = 'mot de passe';
            break;
        case 'password_confirmation':
            $word = 'confirmation du mot de passe';
            break;
        case 'passphrase':
            $word = 'phrase secrète';
            break;
        case 'response':
            $word = 'réponse';
            break;
        case 'phone_number':
            $word = 'numéro de téléphone';
            break;
        case 'address':
            $word = 'adresse';
            break;
        case 'city':
            $word = 'ville';
            break;
        case 'postal_code':
            $word = 'code postal';
            break;
        case 'country':
            $word = 'pays';
            break;
    }
    return $word;
}
?>
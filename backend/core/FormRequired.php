<?php

// fonction qui vérifie les règles de validation par rapport à une requête
function formRequired($request, $rules)
{
    $error = [];
    foreach ($rules as $field => $rule_array) {
        foreach ($rule_array as $rule) {
            switch ($rule) {
                case 'required':
                    if (!isset($request[$field]) || empty($request[$field])) {
                        $error[$field][] = 'Le champ ' . $field . ' est requis';
                    }
                    break;
                case 'max:255':
                    if (strlen($request[$field]) > 255) {
                        $error[$field][] = 'Le champ ' . $field . ' peut contenir au maximum 255 caractères';
                    }
                    break;
                case 'min:10':
                    if (strlen($request[$field]) < 10) {
                        $error[$field][] = 'Le champ ' . $field . ' doit contenir au minimum 10 caractères';
                    }
                    break;
            }
        }
    }
    return $error;
}

?>
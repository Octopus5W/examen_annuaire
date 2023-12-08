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
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' est requis';
                    }
                    break;
                case 'max:255':
                    if (strlen($request[$field]) > 255) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' peut contenir au maximum 255 caractères';
                    }
                    break;
                case 'max:100':
                    if (strlen($request[$field]) > 100) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' peut contenir au maximum 100 caractères';
                    }
                    break;
                case 'max:50':
                    if (strlen($request[$field]) > 50) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' peut contenir au maximum 50 caractères';
                    }
                    break;
                case 'max:9':
                    if (strlen($request[$field]) > 9) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' peut contenir au maximum 9 caractères';
                    }
                    break;
                case 'min:5':
                    if (strlen($request[$field]) < 5) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' doit contenir au minimum 5 caractères';
                    }
                    break;
                case 'numeric':
                    if (!is_numeric($request[$field])) {
                        $error[$field][] = 'Le champ ' . formKeyTraduction($field) . ' ne doit contenir que des chiffres';
                    }
                    break;
            }
        }
    }
    return $error;
}

?>
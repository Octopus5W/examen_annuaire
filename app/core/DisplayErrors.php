<?php
// fonction qui affiche les erreurs données en paramètre sous forme de liste
function displayErrors($errors) {
    foreach($errors as $error) {
        echo "<p class='text-red-400'>$error</p>";
    }
}
?>
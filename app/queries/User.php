<?php
// ajoute un utilisateur dans la base de données
function add_user($data)
{
    global $conn;
    
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $username = $data['username'];
    $password = $data['password'];
    $secret = $data['secret'];

    $sql = "INSERT INTO users (firstname, lastname, username, password, secret) VALUES ('$firstname', '$lastname', '$username', '$password', '$secret')";
    $conn->query($sql);
}

function get_user_by_log($username, $password)
{
    // vérifie si l'utilisateur/mot de passe existe dans la base de données. renvoie le resultat de la requête ou false
    global $conn;
    


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        return $user;
    }else {
        return false;
    }
}

function get_user($id)
{
    // récupère un utilisateur par son id
    global $conn;
    
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $conn->query($sql);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        return $user;
    }else {
        return false;
    }
}

function edit_user($data){
    global $conn;
    
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $username = $data['username'];
    $id = $_SESSION['login']['id'];

    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', username = '$username' WHERE id = '$id'";
    $conn->query($sql);
}
?>
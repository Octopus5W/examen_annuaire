<?php
// se déconnecter
try{
    if(isset($_GET['action']) && $_GET['action'] === 'logout'){
        session_destroy();
        header("Location: home.php");
    }
}catch(PDOException $error){
    echo $error->getMessage();
}
?>

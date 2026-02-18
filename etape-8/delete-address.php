<?php
    $id = $_POST['id'];

    require "../connexion.php";
    
    $query = $db -> prepare("DELETE FROM address WHERE address.id = :id");
    
    $parameters = [
        'id' => $id
    ];
    
    $query -> execute($parameters);
?>
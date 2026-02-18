<?php
    require "connexion.php";
    
    $query = $db -> prepare('
        SELECT users.*, address.street, address.city, address.zipcode
        FROM users JOIN address
        ON users.address = address.id
        WHERE users.id = :id
    ');
    $parameters = [
        'id' => $_GET['id']
    ];
    $query -> execute($parameters);
    
    $user_address = $query -> fetch(PDO::FETCH_ASSOC);
    
    var_dump($user_address);
?>
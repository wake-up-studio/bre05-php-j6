<?php
    require "connexion.php";
    
    $query = $db -> prepare('
        SELECT users.*, address.street, address.city, address.zipcode
        FROM users JOIN address
        ON users.address = address.id
    ');

    $query -> execute();
    
    $users_addresses = $query -> fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($users_addresses);
?>
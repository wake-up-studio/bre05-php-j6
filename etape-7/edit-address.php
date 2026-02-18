<?php

    $id = $_POST["id"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];

    require "../connexion.php";
    
    $query = $db -> prepare("
        UPDATE address 
        SET id = :id, street = :street, city = :city, zipcode = :zipcode 
        WHERE address.id = :id
    ");
    
    $parameters = [
        'id' => $id,
        'street' => $street,
        'city' => $city,
        'zipcode' => $zipcode,
    ];
    
    $query -> execute($parameters);
    
    $query = $db -> prepare("SELECT * FROM address");
    $query -> execute();
    $addresses = $query -> fetchALL(PDO::FETCH_ASSOC);
    var_dump($addresses);
    
?>
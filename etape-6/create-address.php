<?php

    $street = $_POST["street"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];

    require "../connexion.php";
    
    $query = $db -> prepare("INSERT INTO address (id, street, city, zipcode) VALUES (NULL, :street, :city, :zipcode)");
    
    $parameters = [
        'street' => $street,
        'city' => $city,
        'zipcode' => $zipcode
    ];
    
    $query -> execute($parameters);
    
    $address = $db -> lastInsertId();
    
    $query = $db -> prepare("SELECT * FROM address");
    $query -> execute();
    $addresses = $query -> fetchALL(PDO::FETCH_ASSOC);
    var_dump($addresses);
    
?>
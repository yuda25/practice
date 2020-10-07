<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=latihan","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
    if($db)
    {
        // echo "Connection Success";
    }
} catch (Exception $error) {
    echo $error->getMessage();
}
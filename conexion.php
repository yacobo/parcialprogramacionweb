<?php

try {
    $user='root';
    $pass='';
    $cnn = new PDO('mysql:host=localhost;dbname=base', $user, $pass);
    } 
    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>



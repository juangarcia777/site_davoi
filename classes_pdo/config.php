<?php 

try {
    $db= new PDO("mysql:dbname=mysql;host=localhost","root","");
} catch (PDOException $e) {
    echo "Erro...".$e->getMessage();
}


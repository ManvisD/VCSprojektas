<?php 

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "mokymai");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error){
    echo "Nepavyko prisijungti prie duomenu bazes: {$mysqli->connect_error}";
    exit();
}

?>
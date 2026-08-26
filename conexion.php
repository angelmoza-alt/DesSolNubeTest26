Walter Mauro Moncada Rubio 26/08/2026 10:18 a. m. • <?php

function conexion(){

$host = "host=dpg-cvmpjbeuk2gs73f8tqh0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_bh54";
$user = "user=wmoncada";
$password = "password=q9ZlwtfUxwIwwO9fKmsEuQJDMtE6HtcN";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>

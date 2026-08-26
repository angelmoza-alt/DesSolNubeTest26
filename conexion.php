Walter Mauro Moncada Rubio 26/08/2026 10:18 a. m. • <?php

function conexion(){

$host = "host=dpg-da7fkch42hec73baoa0g-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_db_en4e";
$user = "user=test_db_en4e_user";
$password = "password=JiVyZZKPIzaCI3YBvHptwRLYrl2ZyYtx";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>

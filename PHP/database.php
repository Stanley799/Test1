<?php //when we have pure php file we do not have a closing tag

$dsn = "mysql: host=localhost;dbname=stalozran";
$dbusername ="root";
$dbpassword ="";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);//creates a database connection object
    $pdo->setAtribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOExeption $e) {
    echo "Connection failed: " . $e->getMessage();

}
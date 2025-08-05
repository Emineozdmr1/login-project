<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$port = "5432";
$dbname = "proje_444";
$user = "postgres";
$password = "123456";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Veritabanı bağlantısı başarısız.");
}

$email = $_POST['email'];
$pass = $_POST['password'];

// SQL Injection koruması için pg_query_params kullanalım:
$query = "INSERT INTO users3 (email, password) VALUES ($1, $2)";
$result = pg_query_params($conn, $query, array($email, $pass));

if ($result) {
    echo "Veri başarıyla kaydedildi.";
} else {
    echo "Hata: " . pg_last_error($conn);
}

pg_close($conn);
?>

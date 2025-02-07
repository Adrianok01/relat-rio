<?php
// /backend/config/database.php

$host = 'jdbc:postgresql://aws-0-sa-east-1.pooler.supabase.com:5432/postgres';
$dbname = 'meu_banco';
$username = 'postgres.mslnolvtxgdzrdwadaft';
$password = 'U9ft6UbI8Y3S8rd5';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>

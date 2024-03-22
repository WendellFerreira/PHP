<?php
session_start();

require_once('conexao.php');
if (!isset($_SESSION['admin_logado'])){
    header('Location:login.php');
    exit();
}

try {
    $stmt = $pdo->prepare("SELECT * FROM PRODUTOS");
    $stmt->execute();
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC)
} catch (PDOExeception $e)


?>
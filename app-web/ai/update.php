<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir o arquivo de conexão com o banco de dados
// Certifique-se de que o caminho está correto
include "../engine-mysql.php";

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados do formulário
    // Usa htmlspecialchars para prevenir XSS
    $view_name = $_POST['view_name'];
    $content = $_POST['editor_content'];

    // Conecta ao banco de dados
    if (!$connect) {
        die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Prepara a instrução SQL para evitar injeção de SQL
    $stmt = $connect->prepare("UPDATE views SET content = ? WHERE view = ?");
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $connect->error);
    }

    // Vincula os parâmetros e executa a consulta
    // 's' indica que o parâmetro é uma string
    $stmt->bind_param("ss", $content, $view_name);

    if ($stmt->execute()) {
        // Redireciona de volta para a página principal após o sucesso
        header("Location: index.php?status=success");
        exit();
    } else {
        // Redireciona com uma mensagem de erro
        header("Location: index.php?status=error");
        exit();
    }

    // Fecha a instrução e a conexão
    $stmt->close();
    $connect->close();
} else {
    // Se o acesso não foi via POST, redireciona para a página principal
    header("Location: sua_pagina_principal.php");
    exit();
}
?>
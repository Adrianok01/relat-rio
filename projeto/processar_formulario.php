<?php
// /backend/processar_formulario.php

header('Content-Type: application/json');

// Incluir arquivo de configuração de banco de dados e modelo
require_once 'config/database.php';
require_once 'models/Formulario.php';

// Recebe os dados JSON enviados
$dados = json_decode(file_get_contents("php://input"), true);

$formulario = new Formulario($pdo);

// Verifica se os dados foram enviados corretamente
if (isset($dados['nomeCliente'], $dados['nomeTecnico'], $dados['classe'], $dados['titulos'], $dados['subtitulos'])) {
    if ($formulario->salvarFormulario($dados)) {
        echo json_encode(['status' => 'sucesso', 'message' => 'Dados salvos com sucesso!']);
    } else {
        echo json_encode(['status' => 'erro', 'message' => 'Falha ao salvar os dados!']);
    }
} else {
    echo json_encode(['status' => 'erro', 'message' => 'Dados incompletos!']);
}
?>

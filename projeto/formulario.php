<?php
// /backend/models/Formulario.php

class Formulario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function salvarFormulario($dados) {
        $sql = "INSERT INTO formulários (nome_cliente, nome_tecnico, classe, titulos, subtitulos) 
                VALUES (:nome_cliente, :nome_tecnico, :classe, :titulos, :subtitulos)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome_cliente', $dados['nomeCliente']);
        $stmt->bindParam(':nome_tecnico', $dados['nomeTecnico']);
        $stmt->bindParam(':classe', $dados['classe']);
        $stmt->bindParam(':titulos', json_encode($dados['titulos'])); // Salvando como JSON
        $stmt->bindParam(':subtitulos', json_encode($dados['subtitulos'])); // Salvando como JSON

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>

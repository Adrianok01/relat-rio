CREATE TABLE formulários (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(255),
    nome_tecnico VARCHAR(255),
    classe INT,
    titulos JSON,
    subtitulos JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
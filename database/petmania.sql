CREATE TABLE IF NOT EXISTS user{
    id_user INT PRIMARY KEY,
    name VARCHAR(80),
    email VARCHAR(80),
    senha_hash VARCHAR(100),
    senha_confirm,
    id_pet FOREIGN KEY;
}


CREATE TABLE IF NOT EXISTS pet{
    id_pet INT PRIMARY KEY,
    name VARCHAR(80),
    nascimento DATE,
    especie VARCHAR(45),
    prontuario LONGTEXT,
    genero VARCHAR(10);
}
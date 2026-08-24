<?php

class AnimalController {
    public function store() {
        session_start();
        if (empty($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /servico');
            exit();
        }

        $owner_id = $_SESSION['user_id'];
        $name = trim($_POST['nome'] ?? '');
        $birthdate = $_POST['nascimento'] ?? null;
        $species = $_POST['especie'] ?? null;
        $record = trim($_POST['prontuario'] ?? '');
        $gender = $_POST['genero'] ?? null;

        if ($name === '') {
            $_SESSION['error'] = 'Nome do pet é obrigatório.';
            header('Location: /servico');
            exit();
        }

        require_once __DIR__ . '/Database.php';
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare('INSERT INTO pets (owner_id, name, birthdate, species, record, gender) VALUES (:owner_id, :name, :birthdate, :species, :record, :gender)');
        try {
            $stmt->execute([
                ':owner_id' => $owner_id,
                ':name' => $name,
                ':birthdate' => $birthdate,
                ':species' => $species,
                ':record' => $record,
                ':gender' => $gender
            ]);

            $_SESSION['success'] = 'Pet cadastrado com sucesso.';
            header('Location: /servico');
            exit();
        } catch (PDOException $e) {
            $_SESSION['error'] = 'Erro ao cadastrar pet: ' . $e->getMessage();
            header('Location: /servico');
            exit();
        }
    }
}

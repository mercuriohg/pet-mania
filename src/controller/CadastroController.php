<?php
class CadastroController {
    public function cadastro() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $senha = $_POST['password'] ?? '';

            if ($usuario === '' || $email === '' || $senha === '') {
                $_SESSION['error'] = 'Preencha todos os campos.';
                header('Location: /cadastro');
                exit();
            }

            require_once __DIR__ . '/Database.php';
            $pdo = Database::getConnection();

            $hash = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare('INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password_hash)');
            try {
                $stmt->execute([
                    ':username' => $usuario,
                    ':email' => $email,
                    ':password_hash' => $hash
                ]);

                header('Location: /login');
                exit();
            } catch (PDOException $e) {
                $_SESSION['error'] = 'Erro ao cadastrar: ' . $e->getMessage();
                header('Location: /cadastro');
                exit();
            }
        }
    }
}
<?php

class LoginController {
    public function login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = trim($_POST['username'] ?? '');
            $senha = $_POST['password'] ?? '';

            require_once __DIR__ . '/Database.php';
            $pdo = Database::getConnection();

            $stmt = $pdo->prepare('SELECT id, username, password_hash FROM users WHERE username = :username LIMIT 1');
            $stmt->execute([':username' => $usuario]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($senha, $user['password_hash'])) {
                // Ensure admin session is cleared so a normal user cannot be admin at the same time
                unset($_SESSION['is_admin'], $_SESSION['admin_user']);
                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header('Location: /');
                exit();
            } else {
                $_SESSION['error'] = 'Usuário ou senha inválidos.';
                header('Location: /login');
                exit();
            }
        }
    }
}

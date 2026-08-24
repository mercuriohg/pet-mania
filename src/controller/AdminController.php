<?php

class AdminController {
    private $adminUser = 'admin';
    private $adminPass = 'admin123';

    public function showLogin() {
        require_once __DIR__ . '/../views/admin/admin_login.php';
    }

    public function login() {
        session_start();
        $user = trim($_POST['username'] ?? '');
        $pass = $_POST['password'] ?? '';

        if ($user === $this->adminUser && $pass === $this->adminPass) {
            unset($_SESSION['user_id'], $_SESSION['username']);
            session_regenerate_id(true);

            $_SESSION['is_admin'] = true;
            $_SESSION['admin_user'] = $this->adminUser;
            header('Location: /admin_panel');
            exit();
        }

        $_SESSION['error'] = 'Credenciais de administrador inválidas.';
        header('Location: /admin');
        exit();
    }

    public function panel() {
        session_start();
        if (empty($_SESSION['is_admin'])) {
            header('Location: /admin');
            exit();
        }

        require_once __DIR__ . '/Database.php';
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare('SELECT pets.id, pets.name AS pet_name, pets.birthdate, pets.species, pets.record, pets.gender, pets.created_at, users.username AS owner_username, users.email FROM pets JOIN users ON pets.owner_id = users.id ORDER BY users.username, pets.name');
        $stmt->execute();
        $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once __DIR__ . '/../views/admin/admin_panel.php';
    }
}

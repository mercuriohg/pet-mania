<?php

class LoginController {
    public function login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['username'];
            $senha = $_POST['password'];

            // Aqui você pode adicionar a lógica de autenticação, como verificar o banco de dados
            if ($usuario === 'admin' && $senha === 'admin') {
                // Autenticação bem-sucedida
                header('Location: /');
                exit();
            } else {
                // Autenticação falhou
                $_SESSION['error'] = '<script>alert("Usuário ou senha inválidos.");</script>';
                header('Location: /login');
                exit();
            }
    }
  }
}
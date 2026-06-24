<?php
class CadastroController {
    public function cadastro() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['username'];
            $senha = $_POST['password'];

            // Aqui você pode adicionar a lógica de cadastro, como salvar no banco de dados
            // Por enquanto, vamos apenas redirecionar para a página de login
            header('Location: /login');
            exit();
        }
    }
}
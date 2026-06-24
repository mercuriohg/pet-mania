<?php

class RouterController
{
    public static function route($uri)
    {
        switch ($uri) {

            // ===== PÁGINAS =====
            case '':
                require_once __DIR__ . '/../views/index.php';
                break;

            case 'login':
                require_once __DIR__ . '/../views/login.php';
                break;

            case 'cadastro':
                require_once __DIR__ . '/../views/cadastro.php';
                break;

            case 'servico':
                require_once __DIR__ . '/../views/servico.php';
                break;

            // ===== AÇÕES =====
            case 'loginConfirm':
                require_once __DIR__ . '/LoginController.php';

                $controller = new LoginController();
                $controller->login();
                break;

            case 'cadastro_validate':
                require_once __DIR__ . '/CadastroController.php';

                $controller = new CadastroController();
                $controller->cadastro();
                break;

            // ===== 404 =====
            default:
                require_once __DIR__ . '/../views/404.php';
                break;
        }
    }
}

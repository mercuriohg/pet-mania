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

            case 'pet_store':
                require_once __DIR__ . '/AnimalController.php';

                $controller = new AnimalController();
                $controller->store();
                break;

            case 'logout':
                require_once __DIR__ . '/LogoutController.php';

                $controller = new LogoutController();
                $controller->logout();
                break;

            case 'admin':
                require_once __DIR__ . '/AdminController.php';

                $controller = new AdminController();
                $controller->showLogin();
                break;

            case 'admin_login':
                require_once __DIR__ . '/AdminController.php';

                $controller = new AdminController();
                $controller->login();
                break;

            case 'admin_panel':
                require_once __DIR__ . '/AdminController.php';

                $controller = new AdminController();
                $controller->panel();
                break;

            // ===== 404 =====
            default:
                require_once __DIR__ . '/../views/404.php';
                break;
        }
    }
}

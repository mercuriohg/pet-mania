<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/assets/style/index.css">
</head>
<body>
    <main style="max-width:420px;margin:80px auto;padding:20px;">
        <?php
        session_start();
        if (!empty($_SESSION['error'])) { echo '<div style="color:#a94442;background:#f2dede;padding:10px;border-radius:6px;margin-bottom:10px;">'.htmlspecialchars($_SESSION['error']).'</div>'; unset($_SESSION['error']); }
        ?>
        <h2>Admin Login</h2>
        <form action="/admin_login" method="post">
            <div style="margin-bottom:10px;"><label>Usuário</label><br><input type="text" name="username" style="width:100%;padding:8px;"></div>
            <div style="margin-bottom:10px;"><label>Senha</label><br><input type="password" name="password" style="width:100%;padding:8px;"></div>
            <div><button type="submit" style="padding:10px 16px;background:#59b2e6;border:none;color:#fff;border-radius:6px;">Entrar</button></div>
        </form>
    </main>
</body>
</html>

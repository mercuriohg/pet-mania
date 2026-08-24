<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Painel Admin - Prontuários</title>
    <link rel="stylesheet" href="/assets/style/index.css">
    <style>table{width:100%;border-collapse:collapse}th,td{padding:8px;border:1px solid #ddd;text-align:left}th{background:#f4f4f4}</style>
</head>
<body>
<header style="padding:12px;background:#59b2e6;color:#fff;display:flex;justify-content:space-between;align-items:center">
    <div>Admin</div>
    <div><a href="/logout" style="color:#fff;text-decoration:underline">Logout</a></div>
</header>
<main style="padding:20px;max-width:1100px;margin:20px auto;">
    <h2>Prontuários de Pets (todos os usuários)</h2>
    <?php if (empty($pets)): ?>
        <p>Nenhum prontuário encontrado.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Proprietário</th>
                    <th>Email</th>
                    <th>Pet</th>
                    <th>Nascimento</th>
                    <th>Espécie</th>
                    <th>Gênero</th>
                    <th>Prontuário</th>
                    <th>Cadastrado em</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pets as $p): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($p['owner_username']); ?></td>
                        <td><?php echo htmlspecialchars($p['email']); ?></td>
                        <td><?php echo htmlspecialchars($p['pet_name']); ?></td>
                        <td><?php echo htmlspecialchars($p['birthdate']); ?></td>
                        <td><?php echo htmlspecialchars($p['species']); ?></td>
                        <td><?php echo htmlspecialchars($p['gender']); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($p['record'])); ?></td>
                        <td><?php echo htmlspecialchars($p['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>
</body>
</html>

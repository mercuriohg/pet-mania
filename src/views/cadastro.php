<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/assets/style/index.css">
        <link rel="shortcut icon" href="/assets/img/ico.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header id="container-header">
        <h1><img src="/assets/img/petmania.png" alt="Pet - Mania" height="150em"></h1>
        <ul id="menu">
            <li><a href="/">Inicio</a></li>
            <li><a href="/adocao">Projeto</a></li>
            <li><a href="/compra"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </header>
    <nav id="container-nav">
        <ul>
            <li><a href="/produtos">Produtos</a></li>
            <li><a href="/servico">Serviço de Pet</a></li>
            <li><a href="/sobre">Sobre</a></li>
        </ul>
    </nav>
    <main id="container-cadastro">
        <div id="cadastro-container">
            <form action="/cadastro_validate" method="post" id="cadastro-form">
                <h2>Cadastro</h2>
                <div id="user-box">
                    <label>Usuário:</label>
                    <input type="text" id="username" placeholder="Usuário" class="input-user" name="username">
                </div>
                <div id="email-box">
                    <label>Email:</label>
                    <input type="email" id="email" placeholder="Email" class="input-user" name="email">
                </div>
                <div id="password-box">
                    <label>Senha:</label>
                    <input type="password" id="password" placeholder="Senha" class="input-user" name="password">
                </div>
                <div id="button-box">
                    <input type="submit" value="Cadastrar" class="btn-cadastro">
                </div>
                <div class="labels">
                    <span id="error-message"></span>
                    <label class="style-label">Já tem uma conta? <a href="/login">Faça login</a></label>
                </div>
            </form>
        </div>
    </main>
       <footer id="container-footer" class="bg-light py-4">

    <div id="container-social" class="d-flex justify-content-between w-100 px-5 flex-wrap">

        <div class="contact-info text-start mb-3">
            <p>Email: contato@petmania.com</p>
            <p>Telefone: (11) 1234-5678</p>
            <p>Endereço: Rua dos Pets, 123 - São Paulo, SP</p>
        </div>

        <div class="configuration d-grid text-start mb-3">
            <a href="#" class="text-decoration-none">Configurações</a>
            <a href="#" class="text-decoration-none">Política de Privacidade</a>
            <a href="#" class="text-decoration-none">Termos de Uso</a>
            <a href="#" class="text-decoration-none">Ajuda</a>
            <a href="#" class="text-decoration-none">Sair</a>
        </div>

    </div>

    <div class="social-icons text-center mb-3">
        <a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
    </div>

    <p class="text-center mb-0">
        &copy; 2026 Pet Mania. Todos os direitos reservados.
    </p>

</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pet</title>
    <link rel="stylesheet" href="/assets/style/index.css">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="/assets/img/ico.png" type="image/x-icon">

</head>
<body id="container-adoption">
  <header id="container-header">
        <h1><img src="/assets/img/petmania.png" alt="Pet - Mania" height="150em"></h1>
        <ul id="menu">
            <li><a href="/login">Entrar / Cadastro</a></li>
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
    <main id="container-main">
        <form action="" method="POST">
            <h2>Cadastro de Pet</h2>
            <div class="style-form">
                <label for="nome">Nome do Pet:</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    required
                >
            </div>
            <div class="style-form">
                <label for="nascimento">Nascimento:</label>
                <input
                    type="date"
                    id="nascimento"
                    name="nascimento"
                    required
                >
            </div>
            <div class="style-form">
                <label for="especie">Espécie:</label>
                <select name="especie" id="especie" required>
                    <option value="">Selecione</option>
                    <option value="1">Cachorro</option>
                    <option value="2">Gato</option>
                    <option value="3">Coelho</option>
                    <option value="4">Pássaro</option>
                    <option value="5">Hamster</option>
                </select>
            </div>
            <div class="style-form">
                <label for="prontuario">Prontuário:</label>
                <textarea
                    id="prontuario"
                    name="prontuario"
                    rows="6"
                    cols="50"
                ></textarea>
            </div>
            <div class="style-form">
                <label>Gênero:</label>
            <div class="genero">
                <input
                    type="radio"
                    id="macho"
                    name="genero"
                    value="Macho"
                    required
                >
                <label for="macho">Macho</label>
            </div>
            <div class="genero">
                <input
                    type="radio"
                    id="femea"
                    name="genero"
                    value="Fêmea"
                >
                <label for="femea">Fêmea</label>
            </div>
            </div>
            <div class="button-container">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
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
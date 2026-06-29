<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet - Mania</title>
    <link rel="stylesheet" href="/assets/style/index.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="/assets/img/ico.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="container-index">
    <header id="container-header">
        <h1><img src="/assets/img/petmania.png" alt="Pet - Mania" height="150em"></h1>
        <ul id="menu">
            <li><a href="/login">Entrar / Cadastro</a></li>
            <li><a href="/adocao">Projeto</a></li>
            <li><a href="/compra"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
                <i id="menu-toggle" class="fas fa-bars"></i>

    </header>
    <nav id="container-nav">
        <ul class="p-0">
            <li><a href="/produtos">Produtos</a></li>
            <li><a href="/servico">Serviço de Pet</a></li>
            <li><a href="/sobre">Sobre</a></li>
        </ul>
    </nav>
   <main id="main-content" class="container my-5">

  <h2 class="text-center mb-4">🐾 Promoções PetMania</h2>

  <div class="row g-4">

    <!-- PRODUTO 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <span class="badge bg-danger position-absolute m-2">-25%</span>
        <img src="/assets/img/racao.png" class="card-img-top" alt="Ração">
        <div class="card-body text-center">
          <h5 class="card-title">Ração Premium 10kg</h5>
          <p class="card-text">Nutrição completa para cães adultos.</p>

          <p class="text-muted text-decoration-line-through">R$ 129,90</p>
          <h4 class="text-success">R$ 99,90</h4>

          <a href="#" class="btn btn-primary w-100">Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 2 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <span class="badge bg-warning text-dark position-absolute m-2">Combo</span>
        <img src="/assets/img/areia.png" class="card-img-top" alt="Areia">
        <div class="card-body text-center">
          <h5 class="card-title">Areia Higiênica Ultra</h5>
          <p class="card-text">Controle de odor e alta absorção.</p>

          <p class="text-muted text-decoration-line-through">R$ 49,90</p>
          <h4 class="text-success">R$ 34,90</h4>

          <a href="#" class="btn btn-primary w-100">Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 3 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <span class="badge bg-success position-absolute m-2">Oferta</span>
        <img src="/assets/img/mordedor.png" class="card-img-top" alt="Brinquedo">
        <div class="card-body text-center">
          <h5 class="card-title">Brinquedo Mordedor</h5>
          <p class="card-text">Diversão e saúde dental para pets.</p>

          <p class="text-muted text-decoration-line-through">R$ 59,90</p>
          <h4 class="text-success">R$ 44,90</h4>

          <a href="#" class="btn btn-primary w-100">Comprar</a>
        </div>
      </div>
    </div>

  </div>

  <!-- BANNER FINAL -->
  <div class="alert alert-success text-center mt-5">
    🚚 Frete grátis acima de R$ 150 | 🐶 Cupom PETMANIA10
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
<script src="/src/public/assets/js/Toogle.js"></script>
</body>
</html>
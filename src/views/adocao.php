<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pet</title>
    <link rel="stylesheet" href="/assets/style/index.css">
</head>
<body id="container-adoption">


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

</body>
</html>
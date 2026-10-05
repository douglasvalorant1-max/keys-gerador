 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Keys</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <main class="container">
        <section class="card">
            <h1>Gerador de Keys</h1>
            <p>Gere sua chave de acesso de forma rápida e segura.</p>

            <form id="keyForm">
                <label for="nome">Nome ou usuário</label>

                <input
                    type="text"
                    id="nome"
                    name="nome"
                    placeholder="Digite seu nome"
                    maxlength="80"
                    required
                >

                <button type="submit">Gerar Key</button>
            </form>

            <p id="mensagem"></p>

            <div id="resultado" class="resultado" hidden>
                <p>Sua key foi gerada:</p>
                <strong id="keyGerada"></strong>
                <button type="button" id="copiarKey">Copiar Key</button>
            </div>
        </section>
    </main>

    <script src="assets/script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav>
        <h2>Sistema Acadêmico</h2>
        <ul>
            <li><a href="index.php">Cadastrar Aluno</a></li>
            <li><a href="lista.php">Listar Alunos</a></li>
        </ul>
    </nav>

    <main>
        <h1>Cadastrar Aluno</h1>

        <form action="index.php" method="POST">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="campo">
                <label for="ra">RA:</label>
                <input type="text" id="ra" name="ra" required>
            </div>

            <div class="campo">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="">Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                    <option value="Prefiro não informar">Prefiro não informar</option>
                </select>
            </div>

            <div class="campo">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="18" max="120" required>
            </div>

            <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>

            <div class="campo">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>

            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </main>

</body>
</html>
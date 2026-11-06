<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
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
        <h1> Alunos Cadastrados </h1>
        <h2> Ordenados por RA </h2>

        <table>
            <thead>
                <tr>
                    <th>RA</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td> 123456 </td>
                        <td> Ana </td>
                        <td> Feminino </td>
                        <td> 19 </td>
                        <td> Fulano </td>
                        <td> (12) 1234 - 56789 </td>
                        <td> abc@dfg.com </td>
                    </tr>
                </tbody>
            </table>
    </main>

</body>
</html>
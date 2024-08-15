<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        nav {
            margin: 20px 0;
            padding: 10px 20px;
            border-radius: 5px;
        }

        nav a {
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Estilo para o formulário */
        form {
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        fieldset {
            border: none;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: inline-block;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    <title>DB App - PHP+MariaDB</title>
</head>

<body>
    <h1>Introdução a Banco de Dados no PHP</h1>
    <nav>
        <a href="./index.php">Cadastro</a> |
        <a href="./exibirUsuarios.php">Todos os Usuários</a>
    </nav>
    <form action="./cadastroUsuario.php" method="post">
        <fieldset>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome">
        </fieldset>
        <fieldset>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </fieldset>
        <fieldset>
            <label for="senha">Senha</label><br>
            <input type="text" name="senha" id="senha">
        </fieldset>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>
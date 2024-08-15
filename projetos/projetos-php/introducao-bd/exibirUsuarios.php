<?php
$usuarios = include("./listarUsuario.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
    <title>DB App - PHP+MariaDB</title>
</head>

<body>
    <h1>Introdução a Banco de Dados no PHP</h1>
    <nav>
        <a href="./index.php">Cadastro</a> |
        <a href="./exibirUsuario.php">Todos os Usuários</a>
    </nav>

    <?php if (!empty($usuarios)): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>STATUS</th>
            </tr>
            <?php foreach ($usuarios as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['codigo']) ?></td>
                    <td><?php echo htmlspecialchars($user['nome']) ?></td>
                    <td><?php echo htmlspecialchars($user['email']) ?></td>
                    <td><?php echo htmlspecialchars($user['senha']) ?></td>
                    <td><?php echo htmlspecialchars($user['status']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum usuário cadastrado!</p>
    <?php endif; ?>
</body>

</html>
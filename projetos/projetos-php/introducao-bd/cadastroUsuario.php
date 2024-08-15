<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $conDB = new mysqli("localhost", "root", "", "teste");

    if ($conDB->connect_error) {
        die("Falha na conexão: " . $conDB->connect_error);
    }

    $p_query = $conDB->prepare("SELECT codigo FROM usuario WHERE email = ?");

    if ($p_query) {
        $p_query->bind_param('s', $_POST['email']);
        $p_query->execute();

        $p_query->store_result();

        if ($p_query->num_rows() > 0) {
            echo "Email já cadastrado!";
        } else {
            $p_query->close();
            $prep_query = $conDB->prepare("INSERT INTO usuario (nome, email, senha, status) VALUES(?,?,?,?)");

            if ($prep_query) {

                $senharCripo = md5($_POST['senha']);
                $status = 1;

                $prep_query->bind_param('sssi', $_POST['nome'], $_POST['email'], $senharCripo, $status);

                if ($prep_query->execute()) {
                    echo "Usuário Cadastrado com sucesso.";
                } else {
                    echo "Falha em cadastrar o usuário: " . $prep_query->error;
                }

                $prep_query->close();
            }
        }
    }
} else {
    echo ("Tentativa de Acesso Indevido!");
}

<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);
    $cliente->setNome($_POST['nome']);
    $cliente->setCPF($_POST['cpf']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);

        if ($cliente->create()) {
            echo "Cliente cadastrado com sucesso!";
            header("Refresh:3;url=listarCliente.php");
        }else {
            echo"Erro ao cadastrar o cliente.";
        }
?>

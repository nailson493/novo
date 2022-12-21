<?php

function cadastrar($dados){
    include "_scripts/config.php";

    $nome = $dados['nome'];
    $endereco = $dados['endereco'];
    $bairro = $dados['bairro'];
    $cidade = $dados['cidade'];
    $estado = $dados['estado'];
    $cep = $dados['cep'];
    $horarioAbre = $dados['horarioAbre'];
    $horarioFecha = $dados['horarioFecha'];
    $sabadoAbre = $dados['sabadoAbre'];
    $sabadoFecha = $dados['sabadoFecha'];
    $telefone = $dados['telefone'];

    $sql = "INSERT INTO estabelecimento (nome,endereco,bairro,cidade,estado,cep,abre,fecha,sabadoAbre,sabadoFecha,telefone) VALUES ('$nome','$endereco','$bairro','$cidade','$estado','$cep','$horarioAbre','$horarioFecha','$sabadoAbre','$sabadoFecha','$telefone')";
    $query = $mysqli->query($sql);

    return $query;
}

function cadastrarEstilo($dados){
    include "_scripts/config.php";

    $estilo = $dados['estilo'];
    $valor = $dados['valor'];
    $tempo = $dados['tempo'];

    $sql = "INSERT INTO estilo (estilo,valor,tempo) VALUES ('$estilo','$valor','$tempo')";
    $query = $mysqli->query($sql);

    return $query;
}

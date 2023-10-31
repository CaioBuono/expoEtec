<?php

use Apple\Expotec\Database\Tabela;
use Apple\Expotec\Model\Participante;

require __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem.php';
include __DIR__ . '/includes/footer.php';

$validacao = isset($_POST['nome']) and isset($_POST['idade']) and 
isset($_POST['cidade']) and isset($POST['bairro']);

if($validacao){
    $obParticipante = new Participante;
    $obParticipante->nome = $_POST['nome'];
    $obParticipante->idade = $_POST['idade'];
    $obParticipante->cidade = $_POST['cidade'];
    $obParticipante->bairro = $_POST['bairro'];
    $obParticipante->genero = $_POST['gender'];
    
    $obParticipante->cadastrarPessoa();

    header('location: index.php?success=true');
    exit;
}
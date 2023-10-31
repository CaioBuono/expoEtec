<?php

$resultados = '';
  foreach ($participantes as $participante){
    $resultados .= '<tr>
                      <td>'.$participante->id.'</td>
                      <td>'.$participante->nome.'</td>
                      <td>'.$participante->idade.'</td>
                      <td>'.$participante->genero.'</td>
                      <td>'.$participante->cidade.'</td>
                      <td>'.$participante->bairro.'</td>
                      <td>'.$participante->data.'</td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                      <td colspan="7" class="text-center">
                                                        Nenhum participante encontrado...
                                                      </td>
                                                    </tr>';
?>

<div class="form" style="width: 800px">
    <div class="back-button">
        <button><a href="cadastrar.php"><- Novo cadastro</a></button>
    </div>
    <div class="lista-header">
        <div class="title">
            <h1>Usuarios cadastrados</h1>
        </div>
        <div class="image-logo">
            <img src="/img/centro-paula-souza-logo.svg" alt="teste">
        </div>
    </div>
    <div>
        <table>
            <thead>
                <tr">
                    <td>ID</td>
                    <td>NOME</td>
                    <td>IDADE</td>
                    <td>GÊNERO</td>
                    <td>CIDADE</td>
                    <td>BAIRRO</td>
                    <td>DATA</td>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </div>
</div>
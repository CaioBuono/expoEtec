<?php

namespace Apple\Expotec\Model;

use Apple\Expotec\Database\Tabela;
use PDO;

class Participante {

  /**
   * ID do participante
   *
   * @var int
   */
  public $id;

  /**
   * Nome do participante
   *
   * @var string
   */
  public $nome;

  /**
   * Idade do participante
   *
   * @var string
   */
  public $idade;

  /**
   * Genero do participante
   *
   * @var string | enum
   */
  public $genero;

  /**
   * Cidade do participante
   *
   * @var string
   */
  public $cidade;

  /**
   * Bairro do participante
   *
   * @var string
   */
  public $bairro;

  /**
   * Data do evento
   *
   * @var string | timestamp
   */
  public $data;

  /**
   * Metodo responsavel por cadastrar uma pessoa no banco
   * @method cadastrarPessoa
   * @return boolean
   */
  public function cadastrarPessoa(){
    //SETAR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSTANCIA O OBJETO
    $obTabela = new Tabela('registro_etec');

    //DEFINE OS VALORES DAS COLUNAS
    $this->id = $obTabela->insert($values = [
      'nome'   => $this->nome,
      'idade'  => $this->idade,
      'genero' => $this->genero,
      'cidade' => $this->cidade,
      'bairro' => $this->bairro,
      'data'   => $this->data
    ]);

    //RETORNA SUCESSO
    return true;
  }

  public static function getParticipantes($where = null, $order = null, $limit = null){
    return (new Tabela('registro_etec'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
  }

}
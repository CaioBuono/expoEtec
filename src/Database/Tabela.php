<?php

namespace Apple\Expotec\Database;

use PDO;
use PDOException;

class Tabela{

  /**
   * LOCAL ONDE O BANCO ESTA HOSPEDADO
   * 
   * @var string
   */
  const HOST = 'localhost';

  /**
   * NOME DO BANCO DE DADOS
   * 
   * @var string
   */
  const NAME = 'participacao';

  /**
   * USARIO PARA ACESSAR O BANCO
   * 
   * @var string
   */
  const USER = 'root';

  /**
   * SENHA DO USUARIO PARA ACESSAR O BANCO
   * 
   * @var string
   */
  const PASS = 'toor';

  /**
   * Nome da tabela no banco de dados
   *
   * @var string
   */
  private $table;

  /**
   * Conexao com o banco de dados
   *
   * @var PDO
   */
  private $connection;

  /**
   * Metodo responsavel por setar a tabela e definir a conexao com o banco
   * @method __construct
   * @param string $table
   * @return void
   */
  public function __construct($table){
    $this->table = $table;
    $this->setConnection();
  }

  /**
   * Metodo responsavel por setar a conexao com o banco de dados
   * @method setConnection
   * @return void
   */
  public function setConnection(){
    try{
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
       'ERROR: ' .$e->getMessage(); 
    }
  }

  /**
   * Metodo responsavel por executar as acoes no banco de dados
   * @method executarSQL
   * @param string $query
   * @param array $params
   * @return PDOStatement
   */
  public function executarSQL($query, $params = []){
    try{
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    }catch(PDOException $e){
       'ERROR: ' .$e->getMessage();
    }
  }

  /**
   * Metodo responsavel por inserir regitros no banco de dados
   * @method insert
   * @param array $values
   * @return boolean
   */
  public function insert($values = []){
    $fields = array_keys($values);
    $binds = array_pad([], count($fields), '?');

    $query = "INSERT INTO ".$this->table. " (".implode(',', $fields).") VALUES (".implode(',', $binds). ")";
    
    $this->executarSQL($query, array_values($values));

    return true;
  }

  public function select($where = null, $order = null, $limit = null, $fields = '*'){
    $where = isset($where) ? 'WHERE '.$where : '';
    $order = isset($order) ? 'ORDER BY ' .$order : '';
    $limit = isset($limit) ? 'LIMIT ' .$limit : '';

    $query = "SELECT ".$fields. " FROM ".$this->table." ".$where." ".$order." ".$limit;
    return $this->executarSQL($query);
  }

}
<?php 

class Conexao {

  private $host = 'localhost';
  private $database = 'php_pdo';
  private $user = 'root';
  private $pass = '';
  

  public function conectar(){
    try{

      $conexao = new PDO(
        "mysql:host=$this->host;dbname=$this->database",
        "$this->user",
        "$this->pass"
      );

      return $conexao;
      
    } catch(PDOException $e){
      echo '<p> Erro: ' . $e->getMessage() . '</p>';
    }
  }
}
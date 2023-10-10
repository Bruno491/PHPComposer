<?php

    namespace Php\Biblioteca\Model\DAO;

    use PDO;

    class DAO{
        private $conexao;

        public function __construct()
        {
            $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=banco_php","root","");
        }

        public function getConexao(){
            return $this->conexao;
        }
    }

?>
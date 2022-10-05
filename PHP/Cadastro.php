<?php 
    class Cadastro {
        private $mysql;

        public function __construct(mysqli $mysql)
        {
            $this->mysql = $mysql;
        }

        public function insereLogin($email, $senha){
            $cadastro = $this->mysql->prepare('INSERT INTO cadastro(email, senha) VALUES(?, ?)');
            $cadastro->bind_param('ss', $email, $senha);
            $cadastro->execute();
        }
    }
?>
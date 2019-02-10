<?php
    class BancoDeDados{

        private $host = "127.0.0.1";
        private $username = "root";
        private $password = "";
        private $dbname = "Mensagem1";
    
        public function ConectarBanco(){
            $Conexao=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
            mysqli_set_charset($Conexao,'utf-8');
            if(mysqli_connect_errno()){
                echo 'Erro ao conectar ao banco'.mysqli_connect_errno();
            }else{
                return $Conexao;
            }
        }
    }    
?>


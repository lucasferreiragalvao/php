<?php
    class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        //Métods Mágicos

        //Método é chamado quando é instaciada a Classe
        public function __construct($logradouro,$numero,$cidade){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }
        //Método é chamado quando a classe é destruida
        public function __destruct()
        {
            //var_dump("Destruir");
        }
        //Método quando é chamado a função echo na Classe
        public function __toString()
        {
            return $this->logradouro . ", ". $this->numero ." - ".$this->cidade;
        }


    }

    $meuEndereco = new Endereco("Rua Teste","2000","Franca");
    echo $meuEndereco;
    // var_dump(($meuEndereco));
    
    // unset($meuEndereco);
?>
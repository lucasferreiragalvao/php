<?php

    class Pessoa{

        //Livre acesso
        public $nome = "Rasmus Lerdof";
        //Somente acessa a própia classe ou que herda dessa classe
        protected $idade = 48;
        //Somente acessa a própia classe
        private $senha = "123456";

        public function verDados(){
            echo $this->nome. "<br>";
            echo $this->idade. "<br>";
            echo $this->senha. "<br>";
        }
    }

    $objeto = new Pessoa();
    //echo $objeto->senha. "<br>";
    $objeto->verDados();
?>
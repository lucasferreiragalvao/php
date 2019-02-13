<?php
     
     class Pessoa{

        //Atributo
        public $nome;

        //Método
        public function falar(){

            return "O meu nome é ". $this->nome;
        }
     }
     //Instanciando Classe
     $pessoa = new Pessoa();
     //Atribuindo valor ao Atributo
     $pessoa->nome = "Lucas Galvão";
     //Chamando o Método
     echo $pessoa->falar();
?>
<?php
     interface Veiculo{

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);
    }
    //Abstrata utilizada para definir o que os métodos 
    //já irão fazer , mais nunca deixa instanciar ela direto
    // E sim tenho que criar uma classe que extende dela
    //Diferença entre classe Abstrata e interface
    //Uma classe vai herdar somente de uma classe Absrata
    //Poŕem a mesma classe pode implementar várias interfaces
    abstract class Automovel implements Veiculo{

        public function acelerar($velocidade){
            echo "O veículo acelerou até ".$velocidade." KM/h";
        }
        public function frenar($velocidade){
            echo "O veículo frenou até ". $velocidade ." KM/h";
        }
        public function trocarMarcha($marcha)
        {
            echo "O veículo engatou a marcha ".$marcha;
        }
    }

    class DelRey extends Automovel{

        public function empurrar(){

        }
    }

    $carro = new DelRey();
    $carro->acelerar(200);
?>
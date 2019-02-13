<?php
    abstract class Animal{
        public function falar(){
            return "Som";
        }
        public function mover(){
            return "Anda";
        }
    }

    class Cachorro extends Animal{
        //Polimorfismo e ter métodos com o mesmo nome
        //na Classe Pai e na Classe Filho que tem comportamentos
        //diferentes
        public function falar(){
            return "Late";
        }
    }
    class Gato extends Animal{
        public function falar(){
            return "Mia";
        }
    }

    class Passaro extends Animal{
        public function falar(){
            return "Canta";
        }
        //Fazendo o polimorfismo e chamando a função mover da Classe Pai
        public function mover(){
            return "Voa e " . parent::mover();
        }
    }
    $pluto = new Cachorro();
    echo $pluto->falar();
    echo "<br>";
    echo $pluto->mover();
    echo "<br>";

    $garfield = new Gato();
    echo $garfield->falar();
    echo "<br>";
    echo $garfield->mover();
    echo "<br>";

    $ave= new Passaro();
    echo $ave->falar();
    echo "<br>";
    echo $ave->mover();
    echo "<br>";
?>
<?php

class miClass{

    public $atributo1;
    public $atributo2;
    private $correo;
    public static $uno = "Esto es un atributo estatico";
    const MI_CONSTANTE = 3.1416;

    public function metodo1(){
        echo "Esto es un metodo<br>";
    }


};

class miClass2{

    public function metodo2($parametro1, $parametro2){
        echo "Su nombre es: " . $parametro1 . 
        "<br>Su edad es: " . $parametro2 . "<br>";
    }


};

class miClass3{

    public $atributo1;
    public $atributo2;
    private $correo = "joseramonhernandezmunoz20@gmail.com";
    
    public function metodo3(){
        echo $this -> atributo1 . "<br>";
        echo $this -> atributo2 . "<br>";
        echo $this -> correo . "<br>";

    }


};

class miClass4{

    public function __construct($atributo1, $atributo2){
        $this -> uno = $atributo1;
        $this -> dos = $atributo2;
        $this -> tres = "Esto es un constructor";
    }

    public function metodo4(){
        echo $this -> uno . "<br>";
        echo $this -> dos . "<br>";
        echo $this -> tres . "<br>";
    }

    /*public function __destruct(){
        echo "Esto es un destructor del constructor principal de la clase";
    }*/

};

class miHerencia extends miClass4{
    public function metodoHerencia(){
        echo $this -> uno . "<br>";
        echo $this -> dos;
    }
};



//Herencia multiple (simulacio)
trait herenciaMultiple{
    public function multiple(){
        echo "Esto es una herencia multiple";
    }
};

class miClass6{
    use herenciaMultiple;
};

?>
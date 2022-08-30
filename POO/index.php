<?php

require_once "./clases.php";

// Objetos- instanciación
$objeto1 = new miClass;
$objeto2 = new miClass2;
$objeto3 = new miClass3;
$objeto4 = new miClass4("POO with", "PHP");
$objeto5 = new miHerencia("Ramón", "22 Añitos");
$objeto6 = new miClass6;

//Insercion de datos
$objeto1 -> atributo1 = "Ramón Hernández";
$objeto1 -> atributo2 = "22 years";

// Llamado a la función
$objeto1 -> metodo1();
$objeto2 -> metodo2("José Ramón Hdz Muñoz", 22);

//Llamado de datos
echo "<br>";
echo $objeto1 -> atributo1 . "<br>";
echo $objeto1 -> atributo2 . "<br>";
echo miClass:: $uno . "<br>";
echo miClass:: MI_CONSTANTE . "<br>";

echo "-----------------------------------<br><br>";

$objeto3 -> atributo1 = "name: José Ramón Hernández Muñoz";
$objeto3 -> atributo2 = "age: 22 years";
$objeto3 -> metodo3();

echo "<br><br>----------------------------------------<br><br>";
$objeto4 -> metodo4();

echo "<br><br>----------------------------------------<br><br>";
$objeto5 -> metodoHerencia();

echo "<br><br>----------------------------------------<br><br>";
$objeto6 -> multiple();

?>
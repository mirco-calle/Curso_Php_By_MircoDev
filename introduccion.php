<!-- php es un lenguaje de tipado:
 dinamico = no es necesario declarar el tipo de la variable,
 debil    = porque va intentar cambiar los tipos automaticamente
            puede sumar numero con cadena de texto
 graudal  = se puede indicar los tipos de las variables con (var_dump)
            (getType) que te dice el tipo de dato-->
<!-- php = php hipertext procesor  -->
<?php
//variables
$name='mirco';
$name2='eliot';
$isDev=true;
$age=15;
$age2=44;
$altura=1.7;

//mas ejemplos
$isOld =  $age >40;
$isOld2 =  $age2 >40;

//condicionales
if($isOld){
    echo "<h2>Eres viejo, lo siento</h2>";
}elseif($isDev){
    echo "<h2>No eres viejo, eres DEV</h2>";
} else{
    echo "<h2>Eres joven , Buenisimo</h2>";
};
//condiciones ternarias
$outputAge = $isOld
? 'Eres viejo, lo siento'
: 'eres jovena,FELICIDADES';
   
//constantes
define('logo','https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png');

//otras constantes son las estaticas, no funcionan en tiempo de ejecucion, solo funcionan en tiempo de complilacion , no funcionan en un bucle
const NOMBRE = 'eliorex';

//Esta función muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor
var_dump($name);
var_dump($isDev);
var_dump($age);

// interpolacion de cadenas,deben ser con comillas dobles "", para aniadir signos como comillas o dolar se pone \,
$output="hola $name2 ,con una edad de $age2";
//concatenacion con .=
$output .= " y altura de: $altura";

//match mejor que swich
$outputAge = match($age){
0,1,2 => "eresun bebe, $name 👶",
3,4,5,6,7,8,9,10 => "eres un niño, $name 👦",
default => "Eres adulto $name 👨"
};
//otra forma de hacer match
$outputAge = match(true){
$age<2  => "eres un bebe, $name2 👶",
$age<10 => "eres un niño, $name 👦",
$age<18 => "eres un adolecente, $name 👦",
$age<30 => "eres un adulto joven, $name 👨‍🦲",
default => "eres adultoooo $name2 👨"
};
//arrays
$bestLenguages = ["PHP","javascript","Python",1,2];
$bestLenguages[3] = "Java";
$bestLenguages[]= "TypeScript";

//crear un diccionario es similar a un objeto de Javascript
$person =[
"name"=> "miguel",
"age" => 78,
"isDev" => true,
"languages" => ["PHP","JavaScript","Python"]

]
?>
<!-- resultado de Arrarys -->

<h3>
    El mejor lenguaje es: <?=$bestLenguages[5]?>
</h3>

<!-- iteracion de Arrays -->
<ul>
    <?php foreach($bestLenguages as $key => $Lenguages) :?>
     <li><?=$key. " ". $Lenguages?></li>
    <?php endforeach;?>
</ul>



<!-- otra forma de llamar condicionales es: -->
<?php if ($isOld2) : ?>
    <h2>Eres viejo, lo siento segunda forma</h2>;
<?php elseif($isDev) :?>
    <h2>No Eres viejo, eres DEV</h2>;
<?php else : ?>;
    <h2>Eres joven felicidades</h2>;
<?php endif;?>

<!-- PARA LAS CONDICIONES TERNARIAS -->
 <h1><?=$outputAge?></h1>

<img src="<?=logo?>" alt="logo php" width="200px">
<h1>
    <?=
    $output
    ."<br/>"
    . NOMBRE;
    ?>
</h1>

<h1>
<?= "hola"
. $name 
. "<br/>con una dedad de "
. $age 
. '😁'.
"<script>alert('hola')</script>";
?>
</h1>

<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-content: center;
    }
</style>
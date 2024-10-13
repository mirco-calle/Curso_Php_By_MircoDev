<?php 
const API_URL = "http://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de cURL; ch=URL handle
#cURL es la forma mas basica para hacer llamados a las APIS
$ch = curl_init();

//indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_URL, "https://whenisthenextmcufilm.com/api");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// ejecutar la peticion y guardamos el resultado
$result = curl_exec($ch);

//una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una api

$data = json_decode($result,true);
curl_close($ch);

var_dump($data);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pelicula de Marvel</title>
    <!-- Centered viewport -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
<body>
    

    <main>
        <h2>la proxima pelicula de marvel hola</h2>
        <pre>
            <?php var_dump($data);?>
        </pre>
        <section>
           <img src="<?= $data["poster_url"];?> width="300" alt="Poster de <?=$data["title"]?>">
        </section>
        <hgroup>

            <h3><?=$data["title"]?> se estrena en <?=$data["days_until"]?> dias</h3>
            <p>fecha de estreno <?=$data["release_date"]?> </p>
            <p>La siguiente es: <?=$data["following_production"]["title"]?> </p>
        </hgroup>
    </main>
    
    
    <style>
        :root{
            color-scheme: dark;
        }
        body{
            display: grid;
            place-content: center;
        }
        section{
            display: grid;
            place-content: center;
            text-align: center;
        }
        hgroup{
            display: flex;
            flex-direction: column;
            text-align: center;
        }
    </style>


</body>
</html>
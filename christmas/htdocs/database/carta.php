<?php

$servername = "sql111.epizy.com";
$username = "epiz_30734474";
$password = "R0V3IFp0cExu";
$base = "epiz_30734474_navidad";

// Create connection
$conex = mysqli_connect($servername, $username, $password, $base);

/*
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/



if (isset($_POST['enviarcarta'])) {
    //Test
    /*
    $carta = "hola";
    $firma = "prueba";
    */
    $carta = trim($_POST['papanoel']);
    $firma = trim($_POST['firma']);

    if (strlen($_POST['papanoel']) >= 1 && strlen($_POST['firma']) >= 1) {

        $consulta = "INSERT INTO carta(carta, firma) VALUES ('$carta','$firma')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            echo' <h3>Tu carta ha sido enviada a Papa Noel</h3>';
       
        } else {
      
            echo'<h3>Ha ocurrido un error!, Habla con Gabriel para que te lo arregle</h3>';
   
        }
    } else {
        
        echo'<h3>Rellena todos los campos por favor</h3>';

    }
}
?>
<script>
    function redirigir(){

        window.location.href = 'https://navidad.great-site.net/card.html#h';
    }
    setTimeout(redirigir, 3000);

    </script>




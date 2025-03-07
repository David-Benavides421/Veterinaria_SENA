<link rel="stylesheet" type="text/css" href="estilo.css">
<div id="Resultado">
<?php
        $mascota = $_POST['mascota'];
        $edad = $_POST['edad'];
        $raza = $_POST['raza'];
        $cita = $_POST['cita'];
        $hora = $_POST['hora'];
        $dueno = $_POST['dueno'];

        echo "La cita de su mascota: ".$mascota." queda para el día: ".$cita." a las ".$hora;
        if ($edad < 3) {
            echo "<br>"."La cita cuesta $50.000";
        } else 
            echo "<br>"."La cita cuesta $100.000";
?>
</div>

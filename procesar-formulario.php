<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = test_input($_POST["nombre"]);
    $correo = test_input($_POST["correo"]);
    $telefono = test_input($_POST["telefono"]);
    $mensaje = test_input($_POST["mensaje"]);

    // Aquí puedes realizar acciones adicionales, como enviar un correo electrónico o almacenar en una base de datos.

    // Ejemplo de cómo mostrar los datos (en un entorno de producción, no deberías hacer esto)
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo Electrónico: " . $correo . "<br>";
    echo "Número de Teléfono: " . $telefono . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
} else {
    // Acceso directo al archivo, redirigir o manejar según sea necesario
    header("Location: index.html");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

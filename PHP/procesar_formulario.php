<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "id21804423_juliocesar";
$password = "Best2203,...";
$dbname = "id21804423_visitantes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

// Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO formulario_contacto (nombre, fecha, telefono, email, comentario)
VALUES ('$nombre', '$fecha', '$telefono', '$email', '$comentario')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
  echo "Los datos se almacenaron correctamente en la base de datos.";
  header("Location: index.html");
} else {
  echo "Error al almacenar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

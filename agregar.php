<?php include 'conexion.php'; ?>

<html>
<head>
    <title>Agregar Registro</title>
</head>
<body>
    <h1>Agregar Registro</h1>
    <form action="agregar.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Email: <input type="email" name="email" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        <input type="submit" value="Agregar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO registros (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro agregado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>
</body>
</html>

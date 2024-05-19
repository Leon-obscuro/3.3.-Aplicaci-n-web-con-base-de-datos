<?php include 'conexion.php'; ?>

<html>
<head>
    <title>Eliminar Registro</title>
</head>
<body>
    <h1>Eliminar Registro</h1>
    <?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM registros WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <p>¿Estás seguro de eliminar el registro de <?php echo $row['nombre']; ?>?</p>
    <form action="eliminar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Eliminar">
    </form>
    <?php
        } else {
            echo "No se encontró el registro";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];

        $sql = "DELETE FROM registros WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro eliminado correctamente";
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    }
    $conn->close();
    ?>
</body>
</html>

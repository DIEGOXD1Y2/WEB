<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bienesraices";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vender'])) {
    $propiedad_id = $_POST['propiedad_id'];
    $comprador = $_POST['comprador'];

    echo "Datos recibidos:";

    $stmt = $conn->prepare("INSERT INTO propiedadesVendidas (propiedad_id, comprador) VALUES (?, ?)");
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("is", $propiedad_id, $comprador);

    if ($stmt->execute()) {
        echo "¡Propiedad vendida registrada exitosamente!";
    } else {
        echo "Error al registrar la venta: " . $conn->error;
    }
    $stmt->close();
}

$sql = "SELECT * FROM propiedades";
$result = $conn->query($sql);
?>

    <div class="container">
        <h1>Registrar Venta de Propiedad</h1>
        <form method="POST" action="index.php">
            <label for="propiedad_id">Selecciona la Propiedad Vendida:</label>
            <select name="propiedad_id" id="propiedad_id" required>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <option value="<?php echo $row['id']; ?>">
                        <?php echo $row['titulo'] . " - $" . number_format($row['precio'], 2); ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <label for="comprador">Nombre del Comprador:</label>
            <input type="text" name="comprador" id="comprador" required>

            <button type="submit" name="vender">Registrar Venta</button>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
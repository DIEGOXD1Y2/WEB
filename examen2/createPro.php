<?php include "includes/header.php";

require "includes/Folder/conn.php";
$db = connect();
$query_seller = "select id, name from sele";
$sellers = mysqli_query($db, $query_seller);

$id =$_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$img = $_POST['img'];
$description = $_POST['description'];
$room = $_POST['room'];
$wc = $_POST['wc'];
$garage = $_POST['garage'];
$time = $_POST['time'];
$sell = $_POST['id_seller'];

$query = "INSERT INTO Propietys(title,price,img,description,room,wc,garage,time,id_sale) VALUES('".$id."', '".$title."', '".$price."', imagen, '".$description."', '".$room."', '".$wc."', '".$garage."', '".$time."', '".$sell."', );";
$result  = mysqli_query($db,$query);


?>

<section>
    <h2>Agregar propiedad</h2>
    <div>
        <form action="createPro.php" method="post" enctype="multipart/form-data">
            <legend>Fill All</legend>
            <div>
                <label for="id">ID</label>
                <input type="number" id="id" name="id" required>
            </div>
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div>
                <label for="img">Image</label>
                <input type="file" id="img" name="img" accept="image/*" required>
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" required>
            </div>
            <div>
                <label for="room">Rooms</label>
                <input type="number" id="room" name="room" required>
            </div>
            <div>
                <label for="wc">WC</label>
                <input type="number" id="wc" name="wc" required>
            </div>
            <div>
                <label for="garage">Garage</label>
                <input type="number" id="garage" name="garage" required>
            </div>
            <div>
                <label for="time">Timelapse</label>
                <input type="date" id="time" name="time" required>
            </div>
            <div>
                <label for="sell">Seller</label>
                <select name="id_seller" id="id_seller" required>
                    <?php while ($sellers = mysqli_fetch_assoc($sellers)): ?>
                        <option value="<?php echo $sellers['id']; ?>" > <?php echo $sellers['name']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

<?php include "includes/footers.php"; ?>
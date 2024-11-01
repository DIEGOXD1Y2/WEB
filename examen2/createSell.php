<?php include "includes/header.php";

require "includes/Folder/conn.php";
$db = connect();
var_dump($_POST);
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO sele(name, email, phone) VALUES ('".$name."', '".$email."', '".$phone."');";
$res = mysqli_query($db,$query);
if($res){
    echo "sele se creo";
}else{
    echo "sele no se creo";
}


?>
<section>
    <h1>Select form</h1>
    <div>
        <form action="createSell.php" method="post">
            <fieldset>
                <div>
                    <legend name="id">Fill form</legend>
                    <label for="id"> Seller</label>
                    <input type="number" id="id" name="id">                    
                </div>
                <div>
                    <label name="name">name</label>
                    <input type="text" id="name" name="name">  
                </div>
                <div>
                    <label name="name">email</label>
                    <input type="text" id="email" name="email">  
                </div>
                <div>
                    <label name="name">phone</label>
                    <input type="number" id="phone" name="phone">  
                </div>
                <div>
                    <button type="submit">Crear</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php  include "includes/footers.php" ?>
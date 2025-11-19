<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $conn->query("UPDATE users SET name='$name', birthdate='$birthdate', address='$address' WHERE id=$id");
    header("Location: index.php");
}
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>
<form method="POST">
    Nome: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Data de Nascimento: <input type="date" name="birthdate" value="<?= $row['birthdate'] ?>"><br>
    Endereço: <input type="text" name="address" value="<?= $row['address'] ?>"><br>
    <input type="submit" value="Atualizar">
</form>

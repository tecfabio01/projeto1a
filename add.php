<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name, birthdate, address) VALUES ('$name', '$birthdate', '$address')";
    $conn->query($sql);
    header("Location: index.php");
}
?>
<form method="POST">
    Nome: <input type="text" name="name"><br>
    Data de Nascimento: <input type="date" name="birthdate"><br>
    Endereço: <input type="text" name="address"><br>
    <input type="submit" value="Cadastrar">
</form>
1~<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name, birthdate, address) VALUES ('$name', '$birthdate', '$address')";
    $conn->query($sql);
    header("Location: index.php");
}
?>
<form method="POST">
    Nome: <input type="text" name="name"><br>
    Data de Nascimento: <input type="date" name="birthdate"><br>
    Endereço: <input type="text" name="address"><br>
    <input type="submit" value="Cadastrar">
</form>

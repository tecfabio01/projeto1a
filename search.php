<?php include 'db.php'; ?>
<?php
$q = $_GET['q'];
$result = $conn->query("SELECT * FROM users WHERE name LIKE '%$q%'");
?>
<h1>Resultado da Busca</h1>
<?php while($row = $result->fetch_assoc()): ?>
    <p><?= $row['id'] ?> - <?= $row['name'] ?> - <?= $row['birthdate'] ?> - <?= $row['address'] ?></p>
<?php endwhile; ?>
<a href="index.php">Voltar</a>

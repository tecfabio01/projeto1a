<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Usuários</title></head>
<body>
<h1>Usuários</h1>
<a href="add.php">Adicionar Usuário</a>
<form method="GET" action="search.php">
    <input type="text" name="q" placeholder="Buscar por nome...">
    <input type="submit" value="Buscar">
</form>
<table border="1">
<tr><th>ID</th><th>Nome</th><th>Data Nasc.</th><th>Endereço</th><th>Ações</th></tr>
<?php
$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['birthdate']}</td>
            <td>{$row['address']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Editar</a> |
                <a href='delete.php?id={$row['id']}'>Excluir</a>
            </td>
          </tr>";
}
?>
</table>
</body>
</html>

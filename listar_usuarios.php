<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>
<body>
    <h1>Listar Usuários</h1>
    <?php 
        include("config.php");
        $sql = "SELECT id, nome, email FROM usuarios";
        $res = $conn->query($sql);

        if ($res) {
            while ($row = $res->fetch_assoc()) {
    ?>         
                <div>
                    <span>ID: <?php echo $row["id"]; ?></span>
                    <span>Nome: <?php echo $row["nome"]; ?></span>
                    <span>Email: <?php echo $row["email"]; ?></span>
                </div>
    <?php 
            }
        } else {
            echo "<p>Erro ao listar usuários.</p>";
        }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>

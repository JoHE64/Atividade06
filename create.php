

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>

    <form method="POST" action="create.php">
        <label for="text">Nome:</label>
        <input type="text" name="name" required>
        <label for="text">Email:</label>
        <input type="text" name="email" required>
        <input type="submit" value="Adcionar">
        <br>
        <br>
    </form>



    </form>
</body>
</html>

<?php
    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users(user, email) value('$name','$email')";

        if($conn -> query($sql) === true){
            echo "Novo registro adcionado com sucesso!";
        }else{
            echo "Erro $sql <br>".$conn -> error;
        }
    }
?>
<?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $nomeAntigo = $_POST['nomeAntigo'];
        $emailAntigo = $_POST['emailAntigo'];
        $nomeNovo = $_POST['nomeNovo'];
        $emailNovo = $_POST['emailNovo'];

        $sql = "UPDATE users SET user = '$nomeNovo', email = '$emailNovo'  where user = '$nomeAntigo'";

        if($conn -> query($sql) === true){
            echo "Novo registro adcionado com sucesso!";
        }else{
            echo "Erro $sql <br>".$conn -> error;
        }
    }
  
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST" action="updade.php">
        <label for="text">Digite o nome antigo:</label>
        <input type="text" name="nomeAntigo" required>
        <label for="text">Digite o email antigo:</label>
        <input type="text" name="emailAntigo" required>
        <br>
        <label for="text">Digite o nome novo:</label>
        <input type="text" name="nomeNovo" required>
        <label for="text">Digite o email novo:</label>
        <input type="text" name="emailNovo" required>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>


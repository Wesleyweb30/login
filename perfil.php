<? include 'protect.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
</head>
<body>
    <h1>Meu perfil</h1>

    <?php 
    $email =  $_SESSION['email'];
    echo "<p>Email: $email </p>"
    ?>
    <a href="logout.php">Sair</a>
    
</body>
</html>
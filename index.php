
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        main{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .container-form{
            background-color: cornsilk;
            height: 400px;
            width: 400px;
            margin: 0 auto;
        }
        form{
            display: flex;
            flex-direction: column;
            text-align: center;
        }
    
    </style>
</head>
<body>
    <main>
        <div class="container-form">
                <form action="validarUser.php" method="post">
                    <label for="email">Email</label>
                        <input type="text" name="email">
                        <hr>
                        <label for="senha">Senha</label>
                        <input type="text" name="password">
                        <hr>
                    <input type="submit" value="Entrar">
                </form>
        </div>
    </main>
</body>
</html>

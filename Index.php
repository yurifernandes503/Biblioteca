<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #008080;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #008080;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        a:hover {
            background-color: #006666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à Biblioteca Virtual</h1>
        <ul>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</body>
</html>

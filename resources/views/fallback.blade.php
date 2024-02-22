<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Fallback</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #d9534f; /* Vermelho escuro */
        }

        p {
            font-size: 16px;
            margin-top: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Oops! Algo deu errado.</h1>
    <p>Nós pedimos desculpas pelo inconveniente. Volte para pagina inicial clicando <a href='{{route('site.register')}}'>AQUI</a>.</p>
    <img src="caminho-para-sua-imagem-de-fallback.jpg" alt="Imagem de Fallback">
</body>
</html>

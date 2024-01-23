<?php require_once("config.php"); // Inclui Banco de Dados ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Documentation -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- W3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FavIcon -->
    <link rel="shortcut icon" href="../imagens/icons/atual/cadastro.ico" type="image/x-icon">

    <title>Carrinho</title>

    <style>
        * {
            font-family: 'sans-serif';
            /* Tahoma, Geneva, Verdana, sans-serif, Segoe UI */
        }
    </style>
</head>

<?php include_once("../formularios/heade.php");?>

<body>
    <div class="container">
        <h2>Carrinho</h2>
        <p>Seu produto será enviado para o WhatsApp para a realização da compra...</p>
    </div>
</body>

<?php include_once("../formularios/footer.php");?>

</html>

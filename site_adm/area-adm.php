<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!--FavIcon--> <link rel="shortcut icon" href="../conteudos/imagens/icons/atual/cadastro.ico" type="image/x-icon">
    <title>Página de Administração</title>
    <style>
        
        *{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}


        header {
            background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
            padding: 1em;
            text-align: center;
            height: 190px;
        }

        .logo {
            position: relative;
            bottom: 15px;
            width: 240px;
            height: 250px;
        }

        .admin-panel {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


.position-registro-produtos {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }



    form {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);     
      padding: 20px;
      border-radius: 8px;
      width: 450px;
    }
  
    .imgadm {
  background-image: url(../site/conteudos/imagens/Img-Ref/Atual/atual\ -\ fundo\ principal\ melhoradas.png);
  background-size: cover;
  background-position: center; /* Adiciona esta linha para posicionar no centro */
  background-attachment: fixed; /* Adiciona esta linha se quiser que a imagem seja fixa durante o scroll */
  width: 100%;
  height: 115%;
}

    </style>
</head>
<body class="imgadm">
    <!-- =============================================Header=========================================================================-->
    <header>
        <div class="navbar navbar-expand-md text-black-80 container-fluid">
            <a class="animate-img w3-animate-left" target="_self">
                <img src="../site/conteudos/imagens/img-ref/atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></h5>
                </div>

                <div class="offcanvas-body">
                   
                          <a href="#">
                            <img src="../site/conteudos/imagens/icons/atual/home-vector-icon-removebg-preview.png" alt="home" style="height: 30px; width:auto;" class="nav-link active" aria-current="page">
                          </a>

                          <a href="#">
                            <img src="../site/conteudos/imagens/icons/atual/carrinho-removebg-preview (1).png" alt="home" style="height: 20px; width:auto;" class="nav-link active" aria-current="page">
                          </a>
                </div>
            </div>
        </div>
    </header>

    <div class="position-registro-produtos">

        <form class="row g-3" action="registrar_produtos.php" method="post" enctype="multipart/form-data">
        <h2>Registro dos Produtos</h2>

          <div class="col-md-6">
            <label for="nome" class="form-label">Descrição: </label>
            <input type="text" class="form-control" name="descricao" placeholder="Descrição">
          </div>

          <div class="col-md-6">
            <label for="nome" class="form-label">Imagem: </label>
            <input type="file" class="form-control" name="imagem" placeholder="Caminho da Imagem">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-">
                Enviar
            </button>
          </div>
        </form>

    </div>
</body>
<?php include("../site/footer.php");?>
</html>
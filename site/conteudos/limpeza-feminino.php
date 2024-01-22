<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uniformes Feminino Limpeza</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f5f5f5;
    }

    header {
      color: #fff;
      text-align: center;
      padding: 350px;
      background-image: url('../conteudos/imagens/Img-Ref/Atual/limpeza-feminina.png');
      /* Imagem de fundo adicionada */
      background-size: cover;
    }

    .principal {
      text-align: center;
      padding: 20px;
    }

    .image-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .image-container>div {
      text-align: center;
      margin: 20px;
      background-color: #fff;
      /* Fundo branco para destacar as imagens e descrições */
      padding: 15px;
      border-radius: 8px;
      /* Cantos arredondados */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      /* Sombra suave */
      transition: transform 0.3s ease;
      /* Efeito de transição suave */
    }

    .image-container>div:hover {
      transform: scale(1.05);
      /* Aumenta ligeiramente ao passar o mouse */
    }

    .image-container img {
      width: 100%;
      height: auto;
      max-width: 200px;
      border-radius: 8px;
      /* Cantos arredondados para as imagens */
    }

    .image-container .description {
      width: 100%;
      margin-top: 10px;
    }

    @media screen and (max-width: 768px) {
      header {
        font-size: 18px;
        /* Reduz a fonte no cabeçalho para dispositivos menores */
      }

      .image-container>div {
        width: 90%;
        /* Utiliza a largura máxima para dispositivos menores */
      }
    }
  </style>
</head>

<body>
<?php include_once("heade.php");?>
  <header></header>
  <div class="principal">
    <h1>Uniformes de Limpeza Feminina</h1>
    <p>Explore nossa linha de uniformes de limpeza feminina, projetados para profissionais que se dedicam à manutenção e higiene de ambientes com estilo e conforto.</p>
    <p>Nossos uniformes combinam praticidade e elegância, proporcionando um visual profissional enquanto realiza suas tarefas de limpeza com eficiência.</p>
</header>
<body>
  <div class="image-container">
    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-1.png" alt="Product 1">
      <p>   </p>
      <br>
      <label for="quantity1">Quantidade:</label>
      <input type="number" id="quantity1" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-2.png" alt="Product 2">
      <p>    </p>
      <br>
      <label for="quantity2">Quantidade:</label>
      <input type="number" id="quantity2" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-3.png" alt="Product 3">
      <p>  </p>
      <br>
      <label for="quantity3">Quantidade:</label>
      <input type="number" id="quantity3" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-4.png" alt="Product 4">
      <p>   </p>
      <br>
      <label for="quantity4">Quantidade:</label>
      <input type="number" id="quantity4" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-5.png" alt="Product 5">
      <p>  </p>
      <br>
      <label for="quantity5">Quantidade:</label>
      <input type="number" id="quantity5" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-6.png" alt="Product 6">
      <p>  </p>
      <br>
      <label for="quantity6">Quantidade:</label>
      <input type="number" id="quantity6" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-7.png" alt="Product 7">
      <p>   </p>
      <br>
      <label for="quantity7">Quantidade:</label>
      <input type="number" id="quantity7" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-8.png" alt="Product 8">
      <p>   </p>
      <br>
      <label for="quantity8">Quantidade:</label>
      <input type="number" id="quantity8" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-9.png" alt="Product 9">
      <p>   </p>
      <br>
      <label for="quantity9">Quantidade:</label>
      <input type="number" id="quantity9" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-10.png" alt="Product 10">
      <p>   </p>
      <br>
      <label for="quantity10">Quantidade:</label>
      <input type="number" id="quantity10" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-11.png" alt="Product 11">
      <p>  </p>
      <br>
      <label for="quantity11">Quantidade:</label>
      <input type="number" id="quantity11" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-limpeza-12.png" alt="Product 12">
      <p>  </p>
      <br>
      <label for="quantity12">Quantidade:</label>
      <input type="number" id="quantity12" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">+</button>
      <span class="cart-counter"> </span>
    </div>
  </div>
</body>
<?php include_once("footer.php");?>
</html>

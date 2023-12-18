<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro_usuario.css">
   <!-- Design Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="shortcut icon" href="../imagens/icons/atuais/logodeluxunipro-remaster.ico" type="image/x-icon">
 <style>
	body {
  font-family: sans-serif;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: rgb(106,255,111);
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
  color: white;
  padding: 10px;
}

header a {
  color: white;
  text-decoration: none;
  padding: 5px;
}

header a:hover {
  background-color: #3366CC;
}

nav li {
  display: inline-block;
  margin-right: 15px;
}

.formulário {
  margin: 0 auto;
  width: 400px;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 5px;
  background: rgb(106,255,111);
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
}

.formulário h2 {
  text-align: center;
  margin-bottom: 20px;
}

.meio {
  text-align: center;
  margin-bottom: 15px;
}

.meio label {
  display: block;
  margin-bottom: 5px;
}

.meio input {
  width: 80%;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

.meio input[type="submit"] {
  background-color: #4285F4;
  color: white;
  border: none;
  cursor: pointer;
  padding: 10px;
}

.meio input[type="submit"]:disabled {
  background-color: #ddd;
  cursor: not-allowed;
}
</style>
</head>
<body>
  <!--Inclusão do Banco de Dados da página Cadastro de Usuarios-->
  <?= require_once("../site/deluxuniformespro-bd"); ?>
<!--  
<header>
  <a href=""> DeLux Uniformes Profissionais</a>
	<nav>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="login.php" >Login</a></li>
    <li><a href="cadastro_usuario.php">Cadastro</a></li>
    <li><a href="sobre.php">Sobre</a></li></li>
	</nav>
</header>
-->
<div class="formulário">
	
  
	<h2 class="text-white">Cadastro</h2>
  <hr>
    <form action="../controller/cadastrar.php" method="POST">

        <div class="meio">
        <label>Nome:</label>
        <input type="text" name="nome" required="">
        
        </div>

       <div class="meio">
       <label>Email:</label> 
       <input type="email" name="email" required="">
        
       </div>    
       
       <div class="meio">
       <label>Endereço:</label>
       <input type="text" name="endereco" required="">
      
       </div>    
       
       <div class="meio">
       <label>Cidade:</label>
       <input type="text" name="cidade" required="">
    
       </div>    
       
       <div class="meio">
       <label>Estado:</label>
       <input type="text" name="estado" required="">
    
       </div>    
       
       <div class="meio">
       <label>Senha:</label>
       <input type="password" name="senha" required="" id="senha" oninput="noway()">
     
       </div>   

  
        <input type="submit" name="enviar" value="Enviar" class="btn border-opacity-10">
     </form>
       
</div>
      <script>

      function get(id){
        return document.getElementById(id);
      }

      function noway(){
        let senha = get('senha').value.length;
        let submit = get('submit');
        let getsenha = senha;

      
      if (getsenha < 6 || getsenha.value ==""){
        submit.disabled = true;
        submit.style.cursor = "not-allowed";
      
      }else{
        submit.disabled = false;
        submit.style.cursor = "pointer";
      } 
      
     }
   </script>

</body>
</html>
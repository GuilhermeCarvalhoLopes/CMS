<?php
header("Content-type:text/html; charset=utf8");
// recuperar arquivo da classe
require_once "cadusuario.php";
//criar um objeto do tipo cargo
$cadusuario = new cadusuario();

// chamar a funcao para inserir testando se foi clicado no botao salvar
if(isset($_GET['salvar'])){
    $cadusuario->inserir();
}
?>

<!DOCTYPE html>
<html>
<title>Blog Computador</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 12px;
  background: #a6af13;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field2 {
    width: 100%;
    padding: 14.5px;
    outline: none;
}

.input-field3 {
  width: 100%;
  padding: 7px;
  outline: none;
}
.input-field button{
    height: 10px;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn2 {
    background-color: red;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: url("images/fundo.jpg");
        background-repeat: no-repeat;
        font-family: sans-serif;
    }
    .title{
        text-align: center;
        padding: 50px 0 20px;
    }
    .title h1{
        margin: 0;
        padding: 0;
        color: #262626;
        text-transform: uppercase;
        font-size: 36px;
    }
    .container{
        width: 60%;
        height: 500px;
        background: #fff;
        margin: 0 auto;
        border: 2px solid #fff;
        box-shadow: 0 15px 40px rgba(0,0,0,.5);
    }
    .container .left{
        float: left;
        width: 50%;
        height: 496px;
        background: url("images/fundo2.jpg");
        background-size: cover;
        box-sizing: border-box;
    }
    .container .right{
        float: right;
        width: 50%;
        height: 400px;
        box-sizing: border-box;
    }
    .formBox{
        width: 100%;
        padding: 80px 40px;
        box-sizing: border-box;
        height: 400px;
        background: #fff;
    }
    .formBox h2{
        margin-top: -10%;
    }
    .formBox i{
        height: 40px;
    }
    .formBox p{
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: #a6af13;
    }
    .formBox input{
        width: 100%;
        margin-bottom: 20px;
    }
    .formBox input[type='text'],
    .formBox input[type='password']{
        border: none;
        border-bottom: 2px solid #a6af13;
        outline: none;
        height: 40px;
        margin-left: 1%;
    }
    .formBox input[type='text']:focus,
    .formBox input[type='password']:focus{
        border-bottom: 2px solid #262626;
    }
    .formBox button[type='submit']{
        border: none;
        outline: none;
        width: 100%;
        height: 40px;
        color: #fff;
        background: #262626;
        cursor: pointer;
    }
    .formBox button[type='submit']:hover{
        background: #a6af13;
    }
    .formBox button[type='submit']{
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        background: #262626;
        cursor: pointer;
    }
    .formBox button[type='submit']:hover{
        background: #a6af13;
    }
    .formBox a{
        color: #262626;
        font-size: 12px;
        font-weight: bold;
    }
    .foto{
        height: 40px;
    }



</style>
<body>
<div class="title"><h1>Cadastro de Usuário</h1></div>
<div class="container">
    <div class="left"></div>
    <div class="right">
        <div class="formBox">
            <form action="cadastro.php" method="get">
                <center><h2>Cadastro Usuário</h2></center>
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="nome" placeholder="   Nome de Usuário">
                </div>

                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field2" type="text" placeholder="Email" name="email">
                </div>

                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field2" type="password" placeholder="Senha" name="senha">
                </div>

                <div class="input-container">
                    <i class="fa fa-photo icon fotoicon"></i>
                    <button class="foto" style=" background-color: white;width: 500px;"><input class="input-field3" type="file" placeholder="foto" name="foto"></button>
                </div>

                <button type="submit" name="salvar" placeholder="Salvar">Salvar</button><br><br>

            </form>
                <a href="index.php"><button  class="btn2" href="index.php">Voltar</button>
                </a>
        </div>
    </div>
</div>
</body>
</html>

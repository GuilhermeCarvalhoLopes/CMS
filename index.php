
<!DOCTYPE html>
<head>
    <title>Blog Computador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        width: 50%;
        height: 400px;
        background: #fff;
        margin: 0 auto;
        border: 2px solid #fff;
        box-shadow: 0 15px 40px rgba(0,0,0,.5);
    }
    .container .left{
        float: left;
        width: 50%;
        height: 400px;
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
    .formBox input[type='email'],
    .formBox input[type='password']{
        border: none;
        border-bottom: 2px solid #a6af13;
        outline: none;
        height: 40px;
    }
    .formBox input[type='text']:focus,
    .formBox input[type='password']:focus{
        border-bottom: 2px solid #262626;
    }
    .formBox input[type='submit']{
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        background: #262626;
        cursor: pointer;
    }
    .formBox input[type='submit']:hover{
        background: #a6af13;
    }
    .formBox a{
        color: #262626;
        font-size: 12px;
        font-weight: bold;
    }



</style>
<body>
<br><br>
<div class="title"><h1>Login</h1></div>
<div class="container">
    <div class="left"></div>
    <div class="right">
        <div class="formBox">
            <form method="post" action="autenticacao.php">
                <p>Usuário</p>
                <input type="email" name="email" placeholder="Email do Usuário">
                <p>Senha</p>
                <input type="password" name="senha" placeholder="Digite a sua senha">
                <input type="submit" name="" placeholder="Logar">
            </form>
                <a href="#">Esqueceu sua senha</a><br><br>
                <a href="cadastro.php">Criar Conta</a>
        </div>
    </div>
</div>
</body>
</html>

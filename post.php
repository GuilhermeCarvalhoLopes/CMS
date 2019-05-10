<?php

// se enviou um formulario com o conteudo do arquivo
if ( !empty($_POST['conteudo']) ) {

    file_put_contents("jogos.html", $_POST['conteudo'] );

}

if ( !empty($_FILES["arquivo"]) ){

    move_uploaded_file( $_FILES["arquivo"]["tmp_name"], basename($_FILES["arquivo"]["name"]) );
}


header("Content-type:text/html; charset=utf8");
// recuperar arquivo da classe
require_once "cadusuario.php";
//criar um objeto do tipo cargo
$cadusuario = new cadusuario();

$lista = $cadusuario->listarAll();

// chamar a funcao para inserir testando se foi clicado no botao salvar
if(isset($_GET['salvar'])){
    $cadusuario->imagem();
}

if(isset($_GET["codigo"])){
    $cadusuario-> excluir($_GET["codigo"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">


    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>


</head>
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    body{background-color: #00c6ff}

    .col-md-5  input{
        background-color: #fff;
    }
    .col-md-5 .salvar{
        width: 637px;
        height: 45px;
        background-color: #fff;
        border-radius: 10px;
    }
    .col-md-5 .upload{
        width: 132px;
        height: 45px;
        background-color: #fff;
        border-radius: 10px;
    }
</style>
<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-5" style="background-color:transparent;">

            <!-- w3-content defines a container for fixed size centered content,
            and is wrapped around the whole page content, except for the footer in this example -->
            <div class="w3-content" style="max-width:1400px">

                <!-- Header -->
                <header class="w3-container w3-center w3-padding-32">
                    <h1><b>MY BLOG</b></h1>
                    <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
                </header>

                <!-- Grid -->
                <div class="w3-row">

                    <!-- Blog entries -->
                    <div class="w3-col 10 s12">
                        <!-- Blog entry -->
                        <div class="w3-card-2 w3-margin w3-white">
                            <div class="w3-container">
                                <br><br>
                                <?php echo file_get_contents("jogos.html"); ?>
                        </div>

                        </div>
                        <hr>

                        <!-- Labels / tags -->


                        <!-- END Introduction Menu -->
                    </div>

                    <!-- END GRID -->
                </div><br>

                <!-- END w3-content -->
            </div>



            </body>
            </html>

        </div>
        <div class="col-md-5" style="background-color:transparent;">


            <form action="" method="post">
                <br><br>

                <textarea name="conteudo"> <?php echo  file_get_contents("jogos.html"); ?><?php
                    if($lista) : ?>
                        <?php foreach ($lista as $cadusuario) : ?><br>
                            <img style="margin-bottom: 10px;" width="170px;" height="150px;" src="../cms/images/<?php echo $cadusuario->foto; ?>">
                        <?php endforeach; ?>
                    <?php endif; ?> </textarea><br>

                <button class="salvar" type="submit">Salvar</button>

            </form><br>


            <script>
                CKEDITOR.replace( 'conteudo' );
            </script>

                <form method="get" action="post.php">
                    <button class="salvar" style=" background-color: white;width: 500px;"><input class="input-field3" type="file" placeholder="foto" name="foto"></button>
                    <button class="upload" type="submit" name="salvar" placeholder="Salvar">Salvar</button>
                </form>


        </div>

        <div class="col-md-2">
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Fotos Recentes</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <?php
                        if($lista) : ?>
                        <?php foreach ($lista as $cadusuario) : ?><br>
                                <img style="margin-bottom: 10px;" width="170px;" height="150px;" src="../cms/images/<?php echo $cadusuario->foto; ?>">
                                <a style="margin-bottom: 10px; width: 170px;" href="post.php?codigo=<?php echo $cadusuario->codigo; ?>" class="btn btn-danger">Excluir</a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
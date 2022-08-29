<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <script src="js/updateMark.js" defer></script>
    <script src="js/book.js" defer></script>
</head>
<body>
    <header class="p-relative">
        <aside class="p-absolute">
            <form action="">
                <div class="form-group">
                    <label for="txt_email">e-mail</label>
                    <input type="email" name="txt_email"
                        id="txt_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txt_senha">Senha</label>
                    <input type="password" name="txt_senha"
                        id="txt_senha" class="form-control">
                </div>
                <a href="#">Esqueci a senha</a>
                <div class="form-group">
                    <input type="button" value="Login"
                        class="btn btn-primary">
                    <input type="button" value="Cadastre-se"
                        class="btn btn-primary">
                </div>
            </form>
        </aside>
        <h1>
            <?= "Books" ?>
        </h1>
        <h2>
            <?php 
            echo "Os mais temidos";
            ?>
        </h2>
    </header>
    <main>
        <form action="" class="form-inline">
            <div class="form-group">
                <input type="text" name="txt_livro"
                    class="form-control" id="txt_livro">
                <input type="button" value="Salvar"
                    class="btn btn-primary" id="btn_salvar">
            </div>
        </form>
        <div id="livros">
            <?php
            require_once "model/Conexao.php";

            $sql = "select * from book;";

            if(!Conexao::execWithReturn($sql)){
                echo Conexao::getErro();
                exit(1);
            }
            //print_r(Conexao::getData());
            $dados = Conexao::getData();
            //print_r($dados);
            //foreach($dados as $livro){
            foreach($dados as $livro):
            
            ?>
            <section class="d-flex">
                <div class="livro-imagem">
                    <img src="img/livro.webp" alt="Imagem do livro">
                </div>
                <div class="livro-contexto">
                    <p class="livro-dados">
                        Livro:
                        <span id="livro-nome">
                            <?= $livro["nome"]; ?>
                        </span>
                    </p>
                    <p class="livro-dados">
                        Páginas:
                        <span id="livro-paginas">
                            <?= $livro["paginas"]; ?>
                        </span>
                    </p>
                    <p class="livro-dados">
                        Autor/a/as/es:
                        <span id="livro-autores">
                            <?= $livro["autor"]; ?>
                        </span>
                    </p>
                </div>
                <div class="livro-marcos">
                    <div onclick="updateMark(this)">
                        <span class="material-icons">
                            book
                        </span>
                        <span class="round">
                            12
                        </span>
                    </div>
                    <div onclick="updateMark(this)">
                        <span class="material-icons">
                            favorite
                        </span>
                        <span class="round">
                            12
                        </span>
                    </div>
                </div>
            </section>
            <?php
            //}//foreach
            endforeach;
            ?>
        </div>
    </main>
</body>
</html>
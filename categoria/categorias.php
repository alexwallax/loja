<?php
require_once "../classes/dao/Conexao.php";
require_once "../classes/modelo/Categoria.php";
require_once "../classes/dao/CategoriaDAO.php";

$categoria = new Categoria();
$categoriaDAO = new CategoriaDAO();

if (isset($_POST['cadastrar'])) {
    $categoria = new Categoria();
    $categoria->setId($_POST['categoria']);


    if ($categoria->getId() == "") {
        $categoriaDAO->inserir($categoria);
    } else {
        $categoriaDAO->editar($categoria);
    }
    
    $categoria = new Categoria();
}

if (isset($_POST['editar'])) {
    $categoria = $categoriaDAO->buscarPorId($_POST['id']);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        
        <!--cabecalho-->
        <?php
            require_once '../assets/cabecalho.php';
        ?>
        <!--fim cabecalho-->
        
        <div class="container conteudo">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Categorias</legend>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dao = new CategoriaDAO();
                                $categorias = $dao->listarTodos();
                                foreach ($categorias as $categoria) {
                                    ?>
                                    <tr>
                                        <td><?= $categoria->getId() ?></td>
                                        <td><?= $categoria->getNome() ?></td>
                                        
                                        <td>
                                            <form action="remove-categoria.php" method="post">
                                                <input type="hidden" name="id" value="<?= $categoria->getId() ?>">
                                                <button type="submit" class="btn btn-danger">remover</button>
                                            </form>
                                        </td>                                       
                                        
                                        <!--
                                        <td>
                                            <form action="categorias.php" method="post">
                                                <input type="hidden" name="id" value="<?= $categoria->getId() ?>">
                                                <button type="submit" class="btn btn-primary" name="editar">editar</button>
                                            </form>
                                        </td>
                                        -->

                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend>Nova categoria</legend>
                        <form action="insere-categoria.php" method="post">
                            <div class="form-group">
                                <label for="nome">Categoria</label>
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
        
        <?php
            require_once '../assets/rodape.php';
        ?>

    </body>
</html>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        
        <?php
            require_once './assets/cabecalho.php';
        ?>
        
        <div class="container conteudo02">
            
            <div class="row">
                
            <div class="col-sm-3 conteudo"></div>
                
                <div class="col-sm-6 conteudo">
                    
                    <br/>
                    <br/>
                    <br/>
            
                    <form action="valida.php" method="post">
                        <label for="login">Login:</label>
                        <input type="text" id="login" class="btn-block" name="login">
                        <br><br>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" class="btn-block" name="senha">            
                        <br><br>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                    
                </div><!--fim col-sm-6--> 
                
                <div class="col-sm-3 conteudo"></div>
                
            </div><!--fim row--> 
            
        </div><!--fim container-->    
        
        
        <?php
            require_once './assets/rodape.php';
        ?>
        
        <!-- ------------------------------ -->   
        
            
    </body>
    
</html>
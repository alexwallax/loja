<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        
        <!-- cabeçalho -->    
        <header>
            <div class="cabecalho container">
                <div class="row">
                    

                    
                    <div id="cabecalho" class="col-sm-12">
                    
                        <div class="col-sm-6 logo">
                            LOGO
                        </div><!--Fim logo-->
                        
                        <div class="col-sm-6 menu">
                            
                            <ul>
                                <li>MENU-1</li>
                                <li>MENU-2</li>
                                <li>MENU-3</li>
                            </ul>
                            
                        </div><!--Fim menu-->
                        
                    </div><!--Fim cabecalho-->
                    

                    
                    
                </div><!--Fim row-->
            </div>
        </header>
        <!-- fim do cabeçalho -->   
        
        
        
        <div class="container">
            
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
        
        
        <!-- rodape -->   
        <footer>
            <div class="rodape container">
                <div class="row">
                    <div class="col-sm-12 rodape_1">
                        RODAPE
                    </div>
                </div>
            </div>
        </footer>
        <!-- fim do rodape -->        
        
        <!-- ------------------------------ -->   
        
            
    </body>
    
</html>
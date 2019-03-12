<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" media="screen" href="Sistema/index/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-4">
                    <img class="indexImage" src="../Php/Sistema/Img/ImpressãoCapa.png">
                    <form method="post" action="valida_acesso.php"  class="formulario">
                        <div class="form-group">
                                <label>Login:</label><br>
                                <input type="text" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form">
                                <label >Password:</label><br>
                                <input type="password" name="senha" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary button">Submit</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    <body>
</html>

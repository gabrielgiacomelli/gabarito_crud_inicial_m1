<?php
session_start();
include("components/sessao.php");
include("../infra/db/connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <?php 
    include("components/header.php"); 
    ?>

<div style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
    
    <hr>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4">   
            <h4>Cadastro de Novo Usuário: </h4>
            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Usuário:</label>
                    <input type="text" name="usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha:</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                <?php
                
                    if(isset($erro)){
                        echo "<div class='alert alert-danger'>$erro</div>";
                    };

                ?>

                <button type="submit" class="btn btn-primary w-100">
                    Cadastrar
                </button>
            </form>
        </div>
    <hr>
</div>
<?php include("components/footer.php") ?>
</body>
</html>
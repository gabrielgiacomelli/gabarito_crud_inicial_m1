<?php
session_start();
include("components/sessao.php");

include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = $conn -> query($sql);
$usuario = $resultado -> fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];

    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id";

    if($conn -> query($sqlUpdate) === TRUE){
        header("Location: home.php");
        exit();
    }


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<?php include("components/header.php"); ?>
<div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4 w-25">   
            <h4>Editar Usuário: </h4>
            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Novo Usuário:</label>
                    <input type="text" name="usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nova Senha:</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                <?php
                
                    if(isset($erro)){
                        echo "<div class='alert alert-danger'>$erro</div>";
                    };

                ?>

                <button type="submit" class="btn btn-primary w-100">
                    EDITAR
                </button>
            </form>
    <?php include("components/footer.php") ?>
</body>
</html>
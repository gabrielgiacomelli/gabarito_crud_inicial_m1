<?php
    session_start();

    include("infra/db/connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">

        <div class="card shadow p-4" style="width: 400px;">

            <h1 class="text-center mb-4 fs-3">Login</h1>

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
                    Entrar
                </button>

            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
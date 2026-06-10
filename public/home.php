<?php
session_start();
include("components/sessao.php");
include("../infra/db/connect.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <?php 
    include("components/header.php"); 
    ?>
    <div class="container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>
    <?php
    
    include("components/table.php")

    ?>

<?php include("components/footer.php") ?>


</body>
</html>
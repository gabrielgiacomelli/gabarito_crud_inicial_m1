<?php
session_start();
include("components/sessao.php");

include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = " DELETE FROM usuarios WHERE id = $id ";

if($conn->query($sql) === TRUE){
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("components/footer.php") ?>
</body>
</html>
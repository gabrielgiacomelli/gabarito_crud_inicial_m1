<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td><a href='editar.php?id=" . $linha['id'] . "' class='btn btn-sm btn-primary'>Editar</a></td>
                    <td><a href='excluir.php?id=" . $linha['id'] . "' class='btn btn-sm btn-danger'>Excluir</a></td>
                </tr>
        ";

    }
    
    ?>

    


</table>
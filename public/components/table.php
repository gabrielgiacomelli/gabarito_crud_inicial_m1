<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Usuários Cadastrados</h4>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-primary">
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 40%;">Usuário</th>
                            <th style="width: 20%;" class="text-center">Senha</th>
                            <th style="width: 15%;" class="text-center">Editar</th>
                            <th style="width: 15%;" class="text-center">Excluir</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        $sqlTodosUsuarios = "SELECT * FROM usuarios";
                        $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

                        while ($linha = $resultadoTodosUsuarios->fetch_assoc()) {

                            $senhaOculta = str_repeat('•', strlen($linha['senha']));

                            echo "
                            <tr>
                                <td>{$linha['id']}</td>

                                <td>{$linha['usuario']}</td>

                                <td class='text-center'>
                                    {$senhaOculta}
                                </td>

                                <td class='text-center'>
                                    <a href='editar.php?id={$linha['id']}'
                                       class='btn btn-primary btn-sm'>
                                        Editar
                                    </a>
                                </td>

                                <td class='text-center'>
                                    <a href='validacao.php?id={$linha['id']}'
                                       class='btn btn-danger btn-sm'>
                                        Excluir
                                    </a>
                                </td>
                            </tr>";
                        }

                        ?>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="titulo">Excluir Registro</div>

<?php

require_once "conexao.php";

$sql = "SELECT id, nome, email, nascimento FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
 ?>

 <table class="table table-hover table-bordered">
     <thead>
         <th>ID</th>
         <th>Nome</th>
         <th>E-mail</th>
         <th>Nascimento</th>
         <th>Ações</th>
     </thead>
     <tbody>
         <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <?= 
                date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir&excluir=<?= $registro['id']?>"
                     class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
     </tbody>
 </table>
 <style>
    table > * {
        font-size: 1.1rem;
    }
</style>
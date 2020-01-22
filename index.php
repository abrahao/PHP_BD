<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>PHP - BD</title>
</head>
<body>
    <header class="cabecalho">
        <h1>PHP & Banco de Dados</h1>
        <h2>Integrando Banco de Dados com PHP</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <!-- <div class="modulo azul">
                    <h3>13. Formulário</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=formulario&file=formulario">Formulário</a></li>
                    </ul>
                </div> -->
                <div class="modulo laranja">
                    <h3>CRUD</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=criar_banco">Criar Banco</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=criar_tabela">Criar Tabela</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=inserir">Inserir Registro</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=consultar">Consultar Registros</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=excluir">Excluir Registros</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=alterar">Alterar Registros</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Abrahão Eneias © <?= date('Y'); ?>
    </footer>
</body>
</html>
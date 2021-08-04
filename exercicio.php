<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets\css\style.css">
  <link rel="stylesheet" href="assets\css\exercicio.css">

  <title>Exercício</title>
</head>

<body class="exercicio">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
  </header>

  <nav class="navegacao">
    <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"; ?> class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
  </nav>

  <main class="principal">
    <div class="conteudo">     
      <?php 
        //  OPÇÃO 1 - INCLUDE 
       //include("teste/teste.php") 

        // OPÇÃO 2 - http://localhost/exercicio.php?dir=teste 
        //include($_GET['dir'] . "/teste.php"); 

        // OPÇÃO 3 - http://localhost/exercicio.php?dir=teste&file=teste    NÃO CONSEGUI FAZER FUNCIONAR
        //include($_GET['dir'] . "/" . $_GET['file'] . "php");
        
        //OPÇÃO 4 - http://localhost/exercicio.php?dir=teste&file=teste
        include("{$_GET['dir']}/{$_GET['file']}.php");       

        //OPÇÃO 5 - TB NÃO CONSEGUI FAZER FUNCIONAR
        //include(_DIR_."/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
    </div>
  </main>

  <footer class="rodape">
    <p>Curso PHP by Cod3r @ Udemy <?= date('Y'); ?></p>
  </footer>

</body>

</html>
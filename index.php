<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets\css\style2.css">

  <title>Curso PHP - Cod3r</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
  </header>

  <main class="principal">
    <div class="conteudo">
      <nav class="modulos">
        <div class="modulo verde">
          <h3>Módulo 01 - Básico</h3>
          <ul>            
            <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li> 
            <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li> 
            <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>          
            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>    
            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>    
          </ul>
        </div> 
      </nav>
    </div>
  </main>

  <footer class="rodape">
    <p>Curso PHP by Cod3r @ Udemy <?= date('Y'); ?></p>
  </footer>

</body>

</html>
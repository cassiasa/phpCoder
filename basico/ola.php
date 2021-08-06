<div class="titulo">Olá PHP</div>

<h2>Exemplo A</h2>
<?php 
echo 'Olá <br>';
// OBS: para quebra de linhas no PHP, utilizar 
//     echo "\n"  (com aspas duplas)
//porém como essas informações daqui não serão executadas no PHP, mas sim inseridas no HTML principal, utiliza-se a tag <br> 
echo 'Mundo!';
?>

<h2>Exemplo B</h2>
<?= "Outra forma de me 'expressar'" ?>  

<?php
phpinfo();

//OBS: Quando tentei executar no VSCode utilizando o atalho CTRL + ALT + N, apareceu a seguinte mensagem de erro:

// 'php' n�o � reconhecido como um comando interno ou externo, um programa oper�vel ou um arquivo em lotes.

// SOLUÇÃO: adicionar o path do MAMP (mais ou menos como explicado aqui https://qastack.com.br/programming/31291317/php-is-not-recognized-as-an-internal-or-external-command-in-command-prompt):
// Meu Computador-> propriedades -> Configuração avançada do sistema -> Variáveis ​​de Ambiente -> Path -> Edit -> new
// C: \ MAMP \ bin \ php \ php7.4.1

<div class="titulo" center>Integração CSS</div>

<h1 center>
<?php 
echo 'Olá';
echo '<small>';
echo ' Mundo!'; //não se esqueça do espaço ao fim de 'olá' ou antes de 'mundo'
echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'</div>" ?>  

<br>
<div center><button dobro><?= "Legal" ?></button></div>

<style>
  button {
    padding: 5px <?= 2 * 10 ?>px;
    background-color: #4286f4;
    color: #eee;
    font-weight: bold;
    border-radius: 10px;
  }

[center] {
  display: flex;
  justify-content: center;
}

<?= "[azul]" ?> /*tem que ser entre aspas pq vai ser escrito no html*/ {
  color: #4286f4;
}

[dobro] {
  font-size: <?= 10 - 5 ?>rem;
}

</style>
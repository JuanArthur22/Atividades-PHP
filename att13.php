<?php
$produtos = [
   "Maça" => ["preco" => "2"],
   "Banana" => ["preco" => "3"],
   "Laranja" => ["preco" => "2"]
   ];

   $media = 0;

   foreach ($produtos as $produtoNome => $produtoPreco) {
    echo"Nome: ". $produtoNome ."<br>";
    echo"Preço: ". $produtoPreco['preco'] ."<br>";

   }
?>

<?php
$alunos = [
   "Juan" => ["nota" => "9.7"],
   "Bruna" => ["nota" => "10"],
   "Jubru" => ["nota" => "9"]
   ];

   $media = 0;

   foreach ($alunos as $alunoNome => $alunoNota) {
    echo"Nome: ". $alunoNome ."<br>";
    echo"Nota: ". $alunoNota['nota'] ."<br>";

    $media += $alunoNota['nota'] / 3;

   }
echo "Média dos alunos foram: " . number_format(num: $media, decimals: 2) . "<br>";
?>

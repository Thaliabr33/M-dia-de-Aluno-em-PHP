<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Fundamentos do PHP </title>
   <link rel="stylesheet" href="exerc1.css">
</head>

<body>
   <h1> Fundamentos do PHP - resposta do servidor </h1>

   <?php
   //recebendo os dados do formulário no servidor
   $aluno = $_POST["aluno"];
   $nota1 = $_POST["nota1"];
   $peso1 = $_POST["peso1"];
   $nota2 = $_POST["nota2"];
   $peso2 = $_POST["peso2"];

   //calculando a média ponderada do aluno
   $media = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);

   /*Utilizando formatação numérica em PHP */
   $mediaFormatada = number_format($media, 1, ',', '.');


   /*Exibição dos resultados */
   echo "<p> Resultado do processamento das notas do aluno: <br>
        Nome do aluno: <span> $aluno </span> <br>
        Média final do aluno: <span> $mediaFormatada </span> <br>  
   
   </p>";

   ?>

</body>

</html>
<html>
<body>
<?php
   #echo('agora é php');
   $var1 = 2.0;
   $var2 = 'a';
   $var3 = 5;
   $vetor = array(1,2,3,4,5,6,7);
   $float = 1;

   $v1 = array(
      'img' => 'https://www.grancursosonline.com.br/upload/projeto/thumbnail/ifbaiano-instituto-federal-de-educacao-ciencia-e-tecnologia-baiano.png?1486039037',
      'nome' => 'ifbaiano',
      'local' => 'gbi',
      'cursos' => array('info', 'agro', 'agri','zoo'),
   );

   $resultado_de_uma_consulta = array(
      'alunos' => array('joao','maria','pedro'),
      'notas' => array(9,10,6),
      'local' => 'ifbaiano',
      'ano' => 2020
   );

   echo($resultado_de_uma_consulta['alunos'][1] . ' tirou ' . $resultado_de_uma_consulta['notas'][1]);
   echo('<br>');
#   print_r($resultado_de_uma_consulta);

   echo(10/3);
   echo('<br>');   
   echo(gettype($var1));

   echo('<br>');
   // comentário de uma linha
   # comentário de uma linha
   /*
     Comentário de 
     varias 
     Linhas
   */
  echo(gettype($float));
  echo('<br>');
   echo(gettype($vetor));
   echo('<br>');
   echo(gettype($var1));   
   echo('<br>');
   echo(gettype($var2));   
#   echo((float) $var1 + (float) $var2);
#   echo($var1 + $var2);
   echo('<br>');
   echo('Isso vai ficar '.'junto'.' '.'disso');



   echo('<img src=' . $v1['img'] .'>');





?>




</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>знакомство с php</title>
</head>
<body>
  <table border="1" rules='none'>
      <?
        $operators = ['+', '-', '*', '/']; //массив для получения случайных мат. знаков

        for($i=1; $i<35; $i++){
            echo'<tr>';
            for($j=1; $j<=5; $j++){
              
              $operator = $operators[rand(0, 3)];
              $num1 = rand(1,20);
              $num2 = rand(1,20);
              
              if($operator=='/' and $num1%$num2!==0 or //если не целое
                 $operator=='-' and $num1-$num2<0 or
                 $num1*$num2>100 and $num1*$num2<0
                )
              {
                --$j; // декремент стоб не терять ячейки
                continue;
              }  
              /*else if($operator=='-' and $num1-$num2<0){
                --$j; // декремент чтоб не терять ячейки
                continue;
              }
              else if($operator=='*' and $num1*$num2>100){
                --$j; // декремент чтоб не терять ячейки
                continue;
              }*/
              else 
                echo"<td align='right'> $num1$operator$num2= ______ </td>";
          }
          echo'</tr>'; 
        }
      ?>
       
      </table>
</body>
</html>

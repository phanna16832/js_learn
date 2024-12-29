<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>តារាងគណនាតម្លៃទំនិញ</h1>
  <table>
    <th>
      <td>តម្លទំនិញ</td>
      <td>តម្លៃទំនិញជា $ </td>
      <td></td>
      <td></td>
      <td></td>
    </th>
  </table>


<?php
$i = 1;

while ($i < 10){  // Loop from 1 to 9
  $i+=1;
  if($i===6){
    echo("<h1>it is 6</h1>");
  }else{
    echo"<br/>";
    echo ($i);
  }
}
?>

  
</body>
</html>


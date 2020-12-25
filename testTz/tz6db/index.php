<?php
    require_once 'connection.php';

    $sql = 'SELECT user.id, user.name, user.age, position.position, user.salary
    FROM users user
    LEFT OUTER JOIN positions position ON user.id_position = position.id';
    $query = $pdo->query($sql); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="600" border="1">
   <tbody align="right">
    <tr>
     <th>ID</th>
     <th>Имя</th> 
     <th>Возраст</th> 
     <th>Должность</th> 
     <th>Зарплата</th> 
    </tr> 
    <?php while ($row = $query->fetch()):?>
    <tr>
     <td><?echo $row['id']?></td>
     <td><?echo $row['name']?></td> 
     <td><?echo $row['age']?></td>
     <td><?echo $row['position']?></td>
     <td><?echo $row['salary']?></td> 
    </tr> 
    <?php endwhile;?>
   </tbody>
  </table> 
</body>
</html>
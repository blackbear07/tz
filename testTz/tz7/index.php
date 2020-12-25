<?php
    require_once 'connection.php';

    $sql = 'SELECT user.id, user.name, user.age, position.position, user.salary
    FROM users user
    LEFT OUTER JOIN positions position ON user.id_position = position.id';
    $query = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Ajax Upload</title>
    </head>
    <body>
    <div id="wrapper">
    <h1>Image upload</h1>
    <form method="post" enctype="multipart/form-data" id="form-file-ajax" action="">
        <input type="file" id="file" name="file" required>
        <br/>
        <button type="submit" id="btn-file-upload">Загрузить</button>
        </div>
    </form>
    <div id="jsonParser"></div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="script/ajax.js"></script>
    </div>
</body>
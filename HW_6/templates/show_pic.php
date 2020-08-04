<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = (int)($_GET['id']);

        $sql = "SELECT alt, name, adress, views FROM `gallery` WHERE id = '$id'";
        $pic = getAssocResult($sql);
        echo '<img class="gallery__img" src=" ../public' .$pic[0]["adress"].$pic[0]["name"]. '" alt="' .$pic[0]["alt"]. '"/>';
        echo '<p>Просмотры: '.($pic[0]["views"] + 1).'</p>';

        $sqlUpdate = "UPDATE `gallery` SET views = views + 1 WHERE id = '$id'";
        
        $db = mysqli_connect('127.0.0.1', 'root', '', 'my_test_bd');
        $result = mysqli_query($db, $sqlUpdate);
        mysqli_close($db);
       
    ?>
</body>
</html>
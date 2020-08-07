<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // получаем id
    $id = (int)($_GET['id']);

    function getAssocResult($sql){

        $db = mysqli_connect('127.0.0.1', 'root', '', 'my_test_bd');
    
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        $result = mysqli_query($db, $sql);
    
        $array_result = array();
        while($row = mysqli_fetch_assoc($result)) {
            $array_result[] = $row;
        }
    
        mysqli_close($db);
        
        return $array_result;
        }
        // запрос для бд
        $sql = "SELECT alt, name, adress, views FROM `gallery` WHERE id = '$id'";
        $pic = getAssocResult($sql);
        echo '<img class="gallery__img" src=" ../public' .$pic[0]["adress"].$pic[0]["name"]. '" alt="' .$pic[0]["alt"]. '"/>';
        echo '<p>Просмотры: '.($pic[0]["views"] + 1).'</p>';
        // запрос на апгрейд бд
        $sqlUpdate = "UPDATE `gallery` SET views = views + 1 WHERE id = '$id'";
        
        $db = mysqli_connect('127.0.0.1', 'root', '', 'my_test_bd');
        $result = mysqli_query($db, $sqlUpdate);
        //mysqli_close($db);
    ?>
</body>
</html>
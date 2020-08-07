<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>
    {{CATALOG}}
    <form class="form" method="POST" enctype="multipart/form-data">
        <label for="id">ID товара </br>
            <input class="form__input" type="text" name="id" id="id"></label>
        <label for="name">Название товара </br>
            <input class="form__input" type="text" name="name" id="name"></label>
        <label for="description">Описание товара </br>
            <input class="form__input" type="text" name="description" id="description"></label>
        <label for="price">Цкена товара </br>
            <input class="form__input" type="text" name="price" id="price"></label>
        <label for="image">Файл картинки</br>
            <input class="form__input" type="file" name="image" id="image"></label>
        <label for="image_small">Файл миниатюры</br>
            <input class="form__input" type="file" name="image_small" id="image_small"></label>    
        <label for="options">Опции</br>
            <input class="form__input" list="dl_options" name="options" id="options" ></label>
        <input class="form__input" type="submit" name="operation" value="ОТПРАВИТЬ">
        
        <datalist id="dl_options">
            <option label="Добавить" value="add">
            <option label="Править" value="upd">   
            <option label="Удалить" value="del">    
        </datalist>
    </form>
    <h2>{{RESULT}}</h2>
</body>
</html>

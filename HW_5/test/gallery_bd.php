<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Галерея из БД</title>
    <link rel="icon" href="data:;base64,=">
    <link rel="stylesheet" href="../public/css/gallery.css" />
    <link rel="stylesheet" href="../public/css/lightbox.min.css">
    <script src="../public/js/lightbox-plus-jquery.min.js"></script>
  </head>
<body>
    <h1>Галерея из БД</h1>
    <div class="gallery">
   
   <?php 
   
   function getAssocResult($sql){
	// подключаем бд
	$db = mysqli_connect('127.0.0.1', 'root', '', 'my_test_bd');

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	// выполняем запрос к БД
	$result = mysqli_query($db, $sql);

	// создаем массив для результата
	$array_result = array();
	//в цикле извлекаем ряд и записываем в массив
	while($row = mysqli_fetch_assoc($result)) {
		$array_result[] = $row;
	}
	// закрываем поток
	mysqli_close($db);
	
	return $array_result;
    }
   
	// запрос для бд и упорядочить по убыванию
	$sql = "SELECT * FROM `gallery` ORDER BY `views` DESC";

	$imgs = getAssocResult($sql);
	foreach ($imgs as $key => $value) {
		echo '<div class="gallery__box">';
		echo '<a href="show_pic.php?id=' .$value["id"]. '"><img class="gallery__img" src=" ../public' .$value["adress"].$value["name"]. '" alt="' .$value["alt"]. '"/></a>';
		echo '<p class="gallery__text">просмотров: '.$value["views"].'</p>';
		echo '</div>';
	}
   ?>
   </div>
</body>
</html>
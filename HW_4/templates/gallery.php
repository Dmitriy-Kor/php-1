
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galary</title>
    <link rel="stylesheet" href="../public/css/gallery.css" />
    <link rel="stylesheet" href="../public/css/lightbox.min.css">
    <script src="../public/js/lightbox-plus-jquery.min.js"></script>
  </head>
  <body>
    <h1>Image Gallery</h1>
    <div class="gallery">
      <?php 
        function removeUnnecessaryFiles($fiels){
          $filteredFiles = [];
          foreach ($fiels as $key => $value) {
            if (is_dir($value) != true && $value != "control") {
              array_push($filteredFiles, $value);
            }
          }
          return $filteredFiles;
        }
        

        $dirImg = "../public/img/"; //путь к директории
        $imgFiels = scandir($dirImg); // получаю файлы
        $imgFiels = removeUnnecessaryFiles($imgFiels); //исключаем лишние файлы

        foreach ($imgFiels as $key => $value) {
        echo '<a class="gallery__link" href="'.$dirImg.$value.'" data-lightbox="gallery_spb"><img class="gallery__img" src="'.$dirImg.$value.'" alt="view of St. Petersburg" /></a>';
        }
      ?> 
      <!-- <a class="gallery__link" href="../public/img/1.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/1.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/2.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/2.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/3.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/3.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/4.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/4.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/5.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/5.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/6.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/6.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/7.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/7.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/8.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/8.jpg" alt="view of St. Petersburg" /></a>
      <a class="gallery__link" href="../public/img/9.jpg" data-lightbox="gallery_spb"><img class="gallery__img" src="../public/img/9.jpg" alt="view of St. Petersburg" /></a>   -->
    </div>
  </body>
</html>

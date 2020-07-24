<?php
require_once('../config/config.php');

$gallery = file_get_contents("../templates/gallery.php");

require $gallery
//render($gallery);

?>
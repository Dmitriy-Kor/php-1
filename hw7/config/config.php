<?php
define('SITE_ROOT', "../");
define('WWW_ROOT', SITE_ROOT . '/public');

/* DB config */
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('DB', 'my_test_bd');

define('DATA_DIR', SITE_ROOT . 'data');
define('LIB_DIR', SITE_ROOT . 'engine');
define('TPL_DIR', SITE_ROOT . 'templates');
define('IMG_DIR', SITE_ROOT . 'img');

define('SITE_TITLE', 'Лекция 7');

require_once(LIB_DIR . '/functions.php');
require_once(LIB_DIR . '/db.php');


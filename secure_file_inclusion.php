<?php
$allowed_pages = ['home', 'about', 'contact'];
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (in_array($page, $allowed_pages)) {
    include($page . '.php');
} else {
    die('Invalid page');
}
?>

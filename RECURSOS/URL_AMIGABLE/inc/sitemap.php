<?php
if(!isset($_GET['p'])) {
    $title = 'Home';
    $content = 'inc/home.php';
}

else if ($_GET['p'] == 'about') {
    $title = 'About';
    $content = 'inc/about.php';
}

else if ($_GET['p'] == 'service') {
    $title = 'Service';
    $content = 'inc/service.php';
}

else if ($_GET['p'] == 'contact') {
    $title = 'Contact';
    $content = 'inc/contact.php';
}
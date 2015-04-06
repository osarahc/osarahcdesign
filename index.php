<?php
ini_set('display_errors', 1);
include 'model/config.php';

if (isset($_POST['action'])){
    $action = $_POST['action'];
}else if (isset($_GET['action'])){
    $action = $_GET['action'];
}else {
    $action = 'home';
}

switch($action){
    case 'home':
        include('home.php');
       break;
       case 'work':
           include('mainnav/work.php');
           break;
           case 'skills':
               include('mainnav/skills.php');
               break;
               case 'aboutme':
                   include ('mainnav/aboutme.php');
                   break;
                   case 'contact':
                       include ('mainnav/contact.php');
                       break;
}
<?php

/* 
 * Controller for the Functions Exam
 */

// Bring the model.php page into the scope of the controller
include 'model.php';
//could use include once, or require once, or require

$sunday = 'I love resting';
$monday = 'Back to work';

if($sunday === $monday){
  // This shouldn't do anything
} else {
// call the function from the model
  $navigation = buildNav();
  include 'view.php';
  exit;
}

<ul>
    <?php
       <li>
            <a href= "?action=view_navigation= <?phpecho $navigation[$username];?> "></a>
         ?>
       </li>
       </ul>       
?>
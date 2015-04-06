<?php
/* ***************************************
 * DB and SQL Exam model
 * **************************************/

/* ***************************************
 * Get access to the database connection
 * **************************************/
include 'model.php';
global $db
        

/* ***************************************
 * Get navigation items from database
 * **************************************/
function getNavigation() {
   $guitar1 = ;
  try {
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
    $stmt = $guitar1->prepare($sql);
    $stmt->execute();
    $navList = $stmt->fetchAll();
    $stmt->closeCursor();
  } catch (PDOException $exc) {
    header('location: ./error.php');
    exit;
  }
  if (!empty($navList)) {
    return $navList;
  } else {
    return FALSE;
  }
}

/* ***************************************
 * Get the list of items by category
 * **************************************/
function getCategoryItems($category) {
  

  try {
      $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
        $statement = $db->prepare($sql);
        $statement->execute();
        $navList = $statement->fetchAll();
        $statement->closeCursor();
  } catch (PDOException $e, Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Get item based on its key
 * **************************************/
function getItem($productid) {


  try {
      $sql = 'SELECT DISTINCT item.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
        $statement = $db->prepare($sql);
        $statement->execute();
        $navList = $statement->fetchAll();
        $statement->closeCursor();

  } catch (PDOException$e, Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Build the navigation menu list
 * **************************************/
function buildNav(){
  $navItems = getNavigation();
  if(is_array($navItems)){
    $navigation = '<ul>';
    foreach ($navItems as $item) {
      $navigation .= "<li><a href='/dbsqlexam?action=q&amp;category=$item[0]' title='View our $item[1]'>$item[1]</a></li>";
    }
    $navigation .= '</ul>';
  } else {
    $navigation = 'Sorry, a critical error occurred.';
  }
  return $navigation;
}
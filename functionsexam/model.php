<?php

/* 
 * Function Exam model
 */

/*  Get the Guitar1 database connection before anything else */
/*
$servername = "mysql.osarahcdesign.com";
$username = "osarahc";
$password = "Tripoli12!";

try {
    $conn = new PDO("mysql:host=$mysql.osarahcdesign.com;dbName=osrahcdesign_guitar1", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection complete"; 
    }
catch(PDOException $e)
    {
    echo "Did not connect: " . $e->getMessage();
    }
 * This is what I did
*/
/*
 * Write the first function using the following SQL to query the Guitar1 database
 
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
 
 * Use a try - catch block to handle exceptions
 * Use a prepared statement inside the try to execute the query
 * The result of the query should be an array
 * Be sure to return the array if it has data or 'FALSE' if no data was retrieved
 */
function getNavigation(){
    global$db;
    $navList = '';
    try{
        $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
        $statement = $db->prepare($sql);
        $statement->execute();
        $navList = $statement->fetchAll();
        $statement->closeCursor();              
    }catch(PDOException$e){
        error_log("there was a porblem with the database:$e");
    }
    if(! empty($navList)){
        return $navList;
    } else{
        return FALSE;
    }
}


/* 
 * Write the second function following this comment block
 
 * The function should be named "buildNav" and retrieve the needed 
 * information by calling the first function.
 
 * Then, the function should build an unordered list
 * placing each item retrieved from the database in an anchor element in a list item.
 * The entire list should be stored in a variable named $navigation.
 
 * If nothing is retrieved from the database, use the same $navigation variable 
 * to store an error message.
 
 * Finally, return $navigation (it was called in the controller).
 */
   /* function get_conn(){
        global $db;
        $query = 'SELECT * FROM navigation'
        $navigation = $db->query($query);
        return $navigation;
    }
    * This is what I did
    */
function buildNav(){
    $navItems = getNavigation();
    $navigation = '';
    
    if (is_array($navItems)){
        $navigation .= '<ul>';
        
        foreach(navItems as $item){
            $navigation .= '<li><a href="/index.php?action=showcategory?categoryID=' .$item['categoryID']. '" title= "View item">' . $item['categoryName']. '</a></li>';
        }       
        
        $navigation .= '</ul>';
    }
    if (empty ($navItems)){
        $navigation = "Sorry, we couldn't get the navigation items";
    }
    return $navigation;
    
}
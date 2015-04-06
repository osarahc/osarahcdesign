<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tip of the Day</title>
    </head>
    <body>
        <header><nav>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </nav>    
        </header>
    <main>      
                <h1>Tip of the Day!</h1>
                <p>When adding an image in your website make sure to add an "alt" attribute so that a page reader will read off the
                description to the seeing impaired!</p><br>
                <h4>Example</h4>
                &lt;img src="windycity.jpg" alt="Image of Chicago. The Windy city."/&gt;
                <p>In the above example the an impaired viewer would hear the description of an image of Chicago which is called the windy city.</p>
    if (isset($_SESSION['logged_in'])){
    if (isset($_POST['title'], $_POST['content'])){
        $title = $_POST['title'];
        $content = nl2br($_POST['content']);
        
        if (empty($title) or empty($content)){
            $error = "Please enter your Title and Tip";
        }else {
            $query = $pdo->prepare('INSERT INTO tips (tips_title, tips_content, tips_timestamp) VALUES(?, ?, ?)');
            
            $query->bindValue(1, $title);
            $query->bindValue(2, $content);
            $query->bindValue(3, time());
            
            $query->execute();
            
            header('Location: index.php');
        }
       
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OsarhaC Tips</title>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
        <div class="container">
            <a href="index.php" id="logo">OsarahCDesign</a>
            <br />
            
            <h2>
                Add Tip
            </h2>
            <?php if (isset($error)){?>
            <small style="color:#aa0000;"><?php echo $error; ?></small>
            <?php } ?>
            <br />
            <form action="add.php" method="post">
                <input type="text" name="title" placeholder="Title" /> <br />
                <textarea rows="20" cols="30" placeholder="Content" name="content"></textarea>
                <input type="submit" value="Add Tip" />
            </form>
            
        </div>
    </body>
    </html>
    <?php

?>
            </main><br>
    <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
        
    </body>
</html>
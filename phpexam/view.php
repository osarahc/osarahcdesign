<?php
    ('database.php')
// Do NOT alter the original array on line 4, use it as is
  array=>alpha('Home','Europe', 'Africa', 'North America', 'Antarctica', 'Asia', 'South America', 'Oceania');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View | PHP Travel Site</title>
  </head>
  <body>
    <header>
      <h1>PHP Travel Site</h1>
    </header>
    <nav>
      <?php
        // The navigation bar (step 2) will display here in the browser
        // Do NOT alter this code block
      	echo $navbar;
      ?>
    </nav>
    <main>
      <?php
        <ul>
        foreach ($content as $content){ //$content stores the value of each element
                $message .= $content. '|'; //the loop executes once for each element
                }
        <ul>        
        }
        <a href="index.php?action =view" title="Go to the view page">View</a>
        // The content from the controller (step 3) will display here in the browser
        // Do NOT alter this code block
      	echo $content;
      ?>
    </main>
    <footer>

	</footer>
  </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>osarahcdesign.com</title>
    </head>
    <body>
        <header><nav>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
                </nav>
            </header>
            <main>
                <h2>Lesson 10: Deliberate Practice Journal</h2>
        <h3>L10 Deliberate practice journal</h3>
        <p> this week I spent about 1 hour working on getting my navigation bar right and redoing my links. I looked up how to make a floating navigation bar and how to take off the line under the links and change the color and show when the link has been clicked on and make it a different color when hovered over. </p><br> 
          <h3>my links and navigation:</h3>
          <p>a:link {<br />
    text-decoration: none;<br />
    color: #000000;<br />
}<br />
<br />
a:visited {<br />
    text-decoration: none;<br />
}<br />
<br />
a:hover {<br />
    text-decoration: underline;<br />
}<br />
<br />
a:active {<br />
    text-decoration: underline;<br />
}<br />
#navigation li{<br />
   float:left;<br />
   margin:0 10px;<br />
   list-style-type:none;<br />
   padding:4px;<br />
   <br />
}</p>
            </main>         
                <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>
        
    </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSS</title>
    </head>
    <body>
        <header><nav>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </nav>    
        </header>
    <main>
        <h1>Examples of CSS I've coded:</h1> 
                #header<br/>
{<br/>
	float: right;<br/>
	width: 100%;<br/>
}<br/>
<br/>
#header ul<br/>
{<br/>
	margin: 0;<br/>
	padding: 0;<br/>
}<br/>
<br/>
#header ul li<br/>
{<br/>
	list-style-type: none;<br/>
	display: inline;<br/>
}<br/>
<br/>
#header li a<br/>
{<br/>
	display: block;<br/>
	float: right;<br/>
	padding: 5px 10px;<br/>
	color: orangered;<br/>
	text-decoration: none;<br/>
}<br/>
<br/>
#header li a:hover { background: #708090; }<br/>
#header img{<br/>
display: block;<br/>
    margin-left: auto;<br/>
    margin-right: auto;<br/>
}<br/>
<br/>
h5{<br/>
font-size:25px;<br/>
color:orangered;<br/>
display:inline-block;<br/>
text-align:center;<br/>
}<br/>
h1{<br/>
font-size:75px;<br/>
color:slategray;<br/>
display:inline-block;<br/>
margin-left:230px;<br/>
border-bottom:4px solid orangered;<br/>
}<br/>
#colored{<br/>
color:silver;<br/>
font-size:35px;<br/>
border: 3px solid orangered;<br/>
list-style-type: none;<br/>
}<br/>
#colored li a:hover { <br/>
background: #708090;<br/>
 }<br/>
#colored li a{<br/>
color:silver;<br/>
}<br/>
#pros{<br/>
color:silver;<br/>
font-size:35px;<br/>
border: 3px solid orangered;<br/>
}<br/>
p{<br/>
font-size:18px;<br/>
padding:5px 15px;<br/>
}<br/>
#titles{<br/>
font-size:50px;<br/>
color:slategray;<br/>
display:inline-block;<br/>
font-size:35px;<br/>
border-bottom:3px solid orangered;<br/>
}<br/>
#about{<br/>
color:steelblue;<br/>
display:block;<br/>
font-size:35px;<br/>
margin-left: auto;<br/>
margin-right: auto;<br/>
}<br/>
#container{<br/>
margin: 0 75px;<br/>
background-color: #F0FFF0;<br/>
border:100px solid #E0FFFF;<br/>
padding:5px 7px;<br/>
}<br/>
#footer<br/>
{<br/>
	text-align: right;<br/>
	padding: 20px;<br/>
	height: 1%;<br/>
}<br/>
<br/>

            </main>
    <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
        
    </body>
</html>

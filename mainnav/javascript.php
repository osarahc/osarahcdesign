<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Javascript</title>
    </head>
    <body>
        <header><nav>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </nav>    
        </header>
    <main>
        <h2>Examples of Javascript I've coded:</h2> 
                &lt;!DOCTYPE HTML&gt;<br />
&lt;html lang="en-us"&gt;<br />
&lt;head&gt;<br />
&lt;meta charset="utf-8"&gt;<br />
&lt;title&gt;Multiply Numbers&lt;/title&gt;<br />
&lt;!--<br />
Defining Table:<br />
<br />
Input:<br />
A number to be multiplied by<br />
Processing:<br />
The number input will be run through the array and multiplied<br />
Output:<br />
Multiplied array by the number input<br />
--&gt;<br />
&lt;!--Write a function to multiply each element in an array by some value. <br />
The function must have this signature:function multiply(list, multiplier)<br />
--&gt;<br />
<br />
&lt;script type="text/JavaScript"&gt;<br />
function multiplierFunction()<br />
{<br />
var multiplier = document.getElementById('multiplier').value;<br />
var list = new Array(10,20,30,40,50,60,70,80,90,100);<br />
var theMultiplier = multiply(list, multiplier);<br />
var div = document.getElementById('displayoriginal');<br />
div.innerHTML = 'Original Array: ' + list; <br />
}<br />
function multiply(list, multiplier)<br />
{<br />
var multipliedArray = new Array();<br />
var length = list.length;<br />
for (var m = 0; m &lt; length; m++)<br />
{<br />
var calculate = list[m] * multiplier; <br />
	multipliedArray[m] = calculate;<br />
}<br />
var div = document.getElementById('displaynew');<br />
div.innerHTML = 'New Array Multiplied By ' + multiplier + ' : ' + multipliedArray; <br />
}<br />
&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;p&gt;Enter a number to multiply by &lt;input type="text" id="multiplier"&gt;&lt;/p&gt;<br />
&lt;p&gt; &lt;button type="button" onclick="multiplierFunction()"&gt;Click&lt;/button&gt; &lt;/p&gt;<br />
&lt;div id="displayoriginal"&gt;&lt;/div&gt;<br />
&lt;div id="displaynew"&gt;&lt;/div&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;
            </main><br>
    <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
        
    </body>
</html>
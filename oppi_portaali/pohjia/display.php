<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS DISPLAY & POSITION</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header><h1>Display & Position & Images</h1></header>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <main>
    <h2>Display</h2>
    <p>Display a list of links as a horizontal menu:</p>
    <ul class="display-inline">
        <li><a href="" target="_blank">display: inline;</a></li>
        <li><a href="" target="_blank">display: inline;</a></li>
        <li><a href="" target="_blank">display: inline;</a></li>
    </ul>

    <p>Display span elements as block elements</p>
    <span class="display-block">display: block;</span><span class="display-block">display: block;</span><span class="display-block">display: block;</span>
    <h2>Position</h2>
    <div class="position-relative">
        position: relative; left: 30px; border: 3px solid #73AD21;
    </div>
    <div class="position-fixed">
        position: fixed;<br>
        bottom: 0;<br>
        right: 0;<br>
        width: 300px;<br>
        border: 3px solid #73AD21;
    </div>
    <br>
    <div class="position-relative-2">
        position: relative;<br>
        width: 400px;<br>
        height: 200px;<br>
        border: 3px solid #73AD21;
        <div class="position-absolute">
            position: absolute;<br>
            top: 80px;<br>
            right: 0;<br>
            width: 200px;<br>
            height: 110px;<br>
            border: 3px solid #73AD21;
        </div>
    </div>
    <br>
    <div class="position-sticky">
        position: -webkit-sticky;<br>
        position: sticky;<br>
        top: 0;<br>
        padding: 5px;<br>
        background-color: #cae8ca;<br>
        border: 2px solid #4CAF50;
    </div>
    <br>
    <h2>Overflow</h2>
    <div class="overflow">
        background-color: coral;<br>
        width: 200px;<br>
        height: 65px;<br>
        border: 1px solid black;<br>
        oveflow: auto;
    </div>
    <h2>Float</h2>
    <p><img class="float-right" src="images/pineapple.jpg">
        float: right;<br>
        width: 170px;<br>
        height: 170px;<br>
        margin-left: 15px;
    </p>
    <p><img class="float-left" src="images/pineapple.jpg">
        float: left;<br>
        width: 170px;<br>
        height: 170px;<br>
        margin-right: 15px;
    </p>
    <footer></footer>
</body>
</html>
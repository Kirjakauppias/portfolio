<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header><h1>Background & Borders & Margins & Padding & Box Model</h1></header>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <main>
        <!--Background-->
        <h2>Background</h2>
        <div class="opacity-background">background-color: cadetblue; opacity: 0.6; 
            When using the opacity property to add transparency to the background of an element, 
            all of its child elements inherit the same transparency. 
            This can make the text inside a fully transparent element hard to read.
        </div><br>
        <div class="rgba-background">
            background: rgba(0, 128, 0, 0.3); If you do not want to apply opacity to child elements, 
            like in our example above, use RGBA color values. The following example sets the opacity 
            for the background color and not the text.
        </div><br>
        <div class="image-background">
            background-image: url(images/img_tree.png);<br>
            background-repeat: no-repeat;<br>
            background-position: right top;<br>
            background-attachment: fixed;<br>
            The background-attachment property specifies whether the background image should scroll or be fixed (will not scroll with the rest of the page).<br>
            height: 20rem;<br><br>
            Use the shorthand property to set the background properties in one declaration:<br>
            background: #ffffff url(images/img_tree.png) no-repeat right top;<br>
            When using the shorthand property the order of the property values is:<br>
            <ul>
                <li>background-color</li>
                <li>background-image</li>
                <li>background-repeat</li>
                <li>background-attachment</li>
                <li>background-position</li>
            </ul>
        </div><br>
        <div id="multiple-backgrounds">
            <h3>Multiple backgrounds</h3>
            <p>back-ground-image: url(images/img_flwr.gif), url(images/paper.gif);<br>
                background-position: right bottom, left top;<br>
                background-repeat: no-repeat, repeat;<br>
                padding: 15px;
            </p>
        </div><br>
        <div class="hero-image-background">
            <div class="hero-text">
                <h1 style="font-size: 50px;">I am Mikko Lepistö</h1>
                <h3>And I am a software designer</h3>
                <button>Hire me</button>
            </div>
        </div><br>
        <div class="gradient-background">
            background-color: red; /* For browsers that do not support gradients */<br>
            background-image: linear-gradient(red, yellow);<br>
            height: 200px;
        </div><br>
        <div class="gradient-background-to-right">
            background-color: red; /* For browsers that do not support gradients */<br>
            background-image: linear-gradient(to right, red, yellow);<br>
            height: 200px;
        </div><br>
        <div class="gradient-background-transparency">
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));<br>
            height: 200px;<br>
            To add transparency, we use the rgba() function to define the color stops. 
            The last parameter in the rgba() function can be a value from 0 to 1, 
            and it defines the transparency of the color: 0 indicates full transparency, 
            1 indicates full color (no transparency).
        </div><br>
        <!--Borders-->
        <h2>Borders</h2>
        <p class="border-dotted">border-style: dotted; <br>border-width: 5px; <br>border-color: red;</p>
        <p class="border-dashed">border-style: dashed; <br>border-width: medium; <br>border-color: green;</p>
        <p class="border-solid">border-style: solid; <br>border-width: thick; <br>border-color: blue;</p>
        <p class="border-double">border-style: double; <br>border-width: 15px;</p>
        <p class="border-width">border-style: solid; <br>border-width: 15px 10px 4px 35px; <br>border-color: red green blue yellow;</p>
        <p class="border-sides">border-top-style: dotted; <br>
                               border-right-style: dashed;<br>
                               border-bottom-style: solid;<br>
                               border-left-style: double;
        </p>
        <p class="border-normal">border: 2px solid red;
        <p class="border-round1">border: 2px solid red;<br>border-radius: 5px;</p>
        <p class="border-round2">border: 2px solid red;<br>border-radius: 8px;</p>
        <p class="border-round3">border: 2px solid red;<br>border-radius: 12px;</p>
        <div id="border-corner-1">
            background: #73AD21;<br>
            width: 200px;<br>
            height: 150px;<br> 
            padding: 20px; <br>
            border-radius: 15px 50px 30px 5px;
        </div><br>
        <div id="border-corner-2">
            background: #73AD21;<br>
            width: 200px;<br>
            height: 150px;<br> 
            padding: 20px; <br>
            border-radius: 15px 50px;
        </div><br>
        <h3>Box shadow</h3>
        <div class="border-box-shadow">
            <div class="border-box-shadow-header">
                <p>text-align: center;<br>
                    width: 250px;<br>
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), <br>0 6px 20px 0 rgba(0, 0, 0, 0.19);</p>
            </div>
            <div class="border-box-shadow-container">
                <p>padding: 10px;</p>
            </div>
        </div><br>
        <div id="border-corner-box-shadow">
            background: #73AD21;<br>
            width: 200px;<br>
            height: 150px;<br> 
            padding: 20px; <br>
            border-radius: 15px 50px;<br>
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        </div><br>
        <!--Margins-->
        <h2>Margins</h2>
        <div class="margin-70">
            margin: 70px;<br>
            border: 1px solid #4CAF50;
        </div><br>
        <div class="margin-100-100-150-80">border: 1px solid black;<br>
        margin-top: 100px;<br>
        margin-right: 150px;<br>
        margin-bottom: 100px;<br>
        margin-left: 80px;<br>
        background-color: lightblue;<br>
        shorthand: margin: 100px 150px 100px 80px;
        </div><br>
        <div class="margin-auto">
            width: 300px;<br>
            margin: auto;<br>
            border: 1px solid red;
        </div><br>
        <div class="margin-inherit">
            margin-left: 100px;<br>
            border: 1px solid red;
            <p class="margin-inherit-p">margin-left: inherit;</p>
        </div>
        <!--Padding-->
        <h2>Padding</h2>
        <div class="padding-70">
            padding: 70px;<br>
            border: 1px solid #4CAF50;
        </div><br>
        <div class="padding-50-30-50-80">
            padding-top: 50px;<br>
            padding-right: 30px;<br>
            padding-bottom: 50px;<br>
            padding-left: 80px;<br>
            shorthand: padding: 50px 30px 50px 80px;<br>
            border: 1px solid #4CAF50; 
        </div><br>
        <div class="padding-width-1">
            width: 300px;<br>
            background-color: yellow;
        </div><br>
        <div class="padding-width-2">
            width: 300px;<br>
            padding: 25px;<br>
            background-color: lightblue;
        </div><br>
        <div class="padding-border-box">
            width: 300px;<br>
            padding: 25px;<br>
            box-sizing: border-box;<br>
            background-color: lightblue;
        </div>
        <h2>Box model</h2>
        <div class="box-model">
            background-color: lightgrey;<br>
            width: 300px;<br>
            margin: 20px;<br>
            padding: 50px;<br>
            border: 15px solid green;
        </div><br>
        <img src="images/klematis4_big.jpg" alt="Klematis" width="350" height="263">
        <div class="box-model-width">
            (IMG: width="350" height="263")<br>
            width: 320px;<br>
            height: auto;<br>
            margin: 0;<br>
            padding: 10px;<br>
            border: 5px solid gray;<br>
            <hr>
            320px (width of content area)<br>
            + 20px (left padding + right padding)<br>
            + 10px (left border + right border)<br>
            = 350px (total width)
        </div>
        <!--Outline-->
        <h2>Outline</h2>
        <p class="outline">
            margin: auto;<br>
            padding: 20px;<br>
            border: 2px solid black;<br>
            outline: #4CAF50 solid 10px;<br>
            text-align: center;
        </p>
    </main>
</body>
</html>
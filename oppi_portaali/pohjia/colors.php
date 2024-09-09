<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS COLORS & TEXT & FONTS</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header><h1>Colors & Text & Fonts</h1></header>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <main>
        <h2>Colors</h2>
        <h3 class="rgb">rgb(255,99,71)</h3>
        <h3 class="hex">#ffa500</h3>
        <h3 class="hue">hsl(300, 76% 72%)</h3>
        <a href="https://www.w3schools.com/css/css_colors_rgb.asp" alt="css-colors" target="_blank">Värivalitsin</a>
        <h2>Text</h2>
       <h3 class="text-align-center">text-align: center;</h3> 
       <h3 class="text-align-right">text-align: right;</h3>     
       <h3 class="text-align-left">text-align: left;</h3>
       <div class="text-align-justify">
           width: 200px;<br>
           height: auto;<br>
           padding: 10px;<br>
           border: 1px solid black;<br>
           text-align: justify;<br>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione accusamus laboriosam placeat animi atque, ipsam voluptate nisi tenetur non delectus cupiditate est consequatur, doloribus ipsa amet commodi molestiae quod?</p>
       </div>
       <h3 class="text-decoration-overline">text-decoration: overline; text-decoration-color: red;</h3>
       <h3 class="text-decoration-line-through">text-decoration: line-through; text-decoration-color: red; text-decoration-style: double; text-transform: uppercase;</h3>
       <h3 class="text-decoration-underline">text-decoration: underline; text-decoration-color: red; text-decoration-style: dotted; text-transform: lowercase;</h3>
       <h3 class="text-decoration-overline-underline">text-decoration: overline underline; text-decoration-color: red; text-decoration-style: dashed; text-transform: capitalize;</h3>
       <h3 class="text-letter-spacing">border: 1px solid #4CAF50; letter-spacing: 5px; word-spacing: 10px;<br>
           line-height: 1.8;<br>
           text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;</h3>
        <h2>Font</h2>
        <p class="font-family-times">font-family: "Times New Roman", Times, serif;</p>
        <p class="font-family-arial">font-family: Arial, Helvetica, sans-serif; font-style: italic;</p>
        <p class="font-family-courier">font-family: "Lucida Console", "Courier New", monospace; font-style: oblique; font-weight: bold;</p>
        <p class="font-variant">font-variant: small-caps; font-size: 2.5em;</p>
        <p class="font-shorten">font: italic small-caps bold 12px/30px Georgia, serif;<br>
            The font property is a shorthand property for:<br></p>
            <ul class="font-shorten">
                <li>font-style</li>
                <li>font-variant</li>
                <li>font-weight</li>
                <li>font-size/line-height</li>
                <li>font-family</li>
            </ul>
        <p class="font-shorten">Note: The font-size and font-family values are required. If one of the other values is missing, their default value are used.</p>  
    
    </main>
</body>
</html>
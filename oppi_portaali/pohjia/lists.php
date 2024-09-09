<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header><h1>Links & Lists & Tables</h1></header>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <main>
        <h2>Links</h2>
    <a class="link" href="links.php" target="_blank">link{color:red;} visited {color:green;} hover {color: hotpink;} active {color:blue;}</a><br><br>
        <a class="link-button" href="links.php" target="_blank">link, visited:<br>
                                                                (background-color: #f44336;<br>
                                                                color: white;<br>
                                                                padding: 14px 25px;<br>
                                                                text-align: center;<br>
                                                                text-decoration: none;<br>
                                                                display: inline-block;) <br>
                                                                hover, active:<br>
                                                                (background-color:red;)
        </a><br><br>
        <a class="link-button-2" href="links.php" target="_blank">link, visited:
                                                                (background-color: white;<br>
                                                                color: black;<br>
                                                                border: 2px solid green;<br>
                                                                padding: 10px 20px;<br>
                                                                text-align: center;<br>
                                                                text-decoration: none;<br>
                                                                display: inline-block;)<br>
                                                                hover, active:<br>
                                                                (background-color: green;<br>
                                                                color: white;)
        </a>
        <h2>Lists</h2>
        <ol class="list-ol">
            <li>background: #ff9999;</li>
            <li>padding: 20px;</li>
            <li>background: #ffe5e5;</li>
            <li>color: darkred;</li>
            <li>padding: 5px;</li>
            <li>margin-left: 35px;</li>
        </ol>
        <ul class="list-ul">
            <li>background: #3399ff;</li>
            <li>padding: 20px;</li>
            <li>background: #cce5ff;</li>
            <li>color: darkblue;</li>
            <li>margin: 5px;</li>
        </ul>
        <h2>Tables</h2>
        <table class="table-border">
            <tr>
                <th>border:</th>
                <th>width:</th>
                <th>border-collapse:</th>
            </tr>
            <tr>
                <td>1px solid;</td>
                <td>100%;</td>
                <td>collapse;</td>
            </tr>
        </table>
    </main>
    <footer></footer>
</body>
</html>
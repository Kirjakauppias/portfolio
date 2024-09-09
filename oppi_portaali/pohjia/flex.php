<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header><h1>CSS</h1></header>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <main>
        <!--Flexbox-->
        <h2>Flex box</h2>
        <h3>Flex box horizontal</h3>
        <p>display: flex;</p>
        <div class="flex-container-horizontal">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        <h3>Flex box -vertical</h3>
        <p>display: flex;<br>
            flex-direction: column;</p>
        <div class="flex-container-vertical">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        <h3>Flex wrap</h3>
        <p>display: flex;<br>
        flex-wrap: wrap;</p>
        <div class="flex-container-wrap">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
            <div>7</div>
            <div>8</div>
            <div>9</div>
            <div>10</div>
            <div>11</div>
            <div>12</div>
        </div>
        <h3>Flex justify content center</h3>
        <p>display: flex;<br>
        justify-content: center;</p>
        <div class="flex-container-wrap-justify-center">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        <h3>Flex flex end</h3>
        <p>display: flex;<br>
        justify-content: flex-end;</p>
        <div class="flex-container-wrap-flex-end">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        <h3>Flex space around</h3>
        <p>display: flex;<br>
        justify-content: space-around;</p>
        <div class="flex-container-wrap-space-around">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        <h3>Flex space between</h3>
        <p>display: flex;<br>
        justify-content: space-between;</p>
        <div class="flex-container-wrap-space-between">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div><h3>Flex align center</h3>
        <p>display: flex;<br>
        align-items: center;</p>
        <div class="flex-container-align-items-center">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
    </main>
    <footer></footer>
</body>
</html>
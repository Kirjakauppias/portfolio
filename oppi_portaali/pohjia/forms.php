<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms

    </title>
    <link rel="stylesheet" href="styles/formstyle.css">
    <link rel="stylesheet" href="styles/imagestyle.css">
</head>
<body>
    <nav>
        <?php 
            include "navigation-links.php";
        ?>
    </nav>
    <h1>Forms & Images & Buttons</h1>
    <h2>Responsive form</h2>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-25">
                    <label for="email">
                        Email
                    </label>
                </div><!--col-25-->
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email..">
                </div><!--col-75-->
            </div><!--row-->
            <div class="row">
            <div class="col-25">
                    <label for="password">
                        Password
                    </label>
                </div><!--col-25-->
                <div class="col-75">
                    <input type="password" id="password" name="password" placeholder="Your password..">
                </div><!--col-75-->
            </div><!--row-->
            <div class="row">
                <input type="submit" value="Submit">
            </div><!--row-->
        </form>
    </div><!--Container-->
    <h2>Buttons</h2>
    <button class="button-animated">Click Me</button>
    <h2>Images</h2>
    <img id="image-rounded" src="images/paris.jpg" alt="paris">
    <p>border-radius: 8px;</p>
    <img id="image-circled" src="images/paris.jpg" alt="paris">
    <p>border-radius: 50%;</p>
    <h3>Masked image</h3>
    <div class="image-mask">
        <img src="images/img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
    </div>
    </main>
</body>
</html>
<?php
require_once './main-components/head.php';
?>

<body>
    <div class="section">
        <div class="inner-section">
            <div class="index-section">
                <div class="login-section">
                    <h1 id="login-header">Travelgram</h1>
                    <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] === "emptyfields"){
                            echo "<p id='contact-error-sign'>The fields are empty</p>";
                        }

                        else if ($_GET['error'] === "nouser"){
                            echo "<p id='contact-error-sign'>user does not exist</p>";
                        }

                        
               }

                    ?>
                    <form id="login-form" action="includes/login-process.php" method="post">
                        <input class="login-input" type="text" name="mailuid" placeholder="username or email">
                        <input class="login-input" type="password" name="pwd" placeholder="password">
                        <button class="login-input" type="submit" name="login-submit">login</button>
                    </form>
                </div>
                <div class="signup-section">
                    <p id="signup-p">Don't have an account? <a href="signup.php">sign up</a></p>
                </div>
            </div>
        </div>

        <div class="opacity"></div>
    </div>
    
    <div class="main-city-section">
        <div class="inner-main-city-section">
            <div class="london">
                <div class="inner-london-top">
                    <h3 id="london-header">london</h3>
                </div>
                <div class="inner-london-bottom">
                    <div>
                        <img class="london-img" src="img/london2.jpg" alt="">
                    </div>
                    <div>
                        <img class="london-img" src="img/london.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="paris">
                <div class="inner-paris-top">
                    <h3 id="paris-header">paris</h3>
                </div>
                <div class="inner-paris-bottom">
                    <div>
                        <img class="paris-img" src="img/paris.jpg" alt="">
                    </div>
                    <div>
                        <img class="paris-img" src="img/paris2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="newyork">
                <div class="inner-newyork-top">
                    <h3 id="newyork-header">new york</h3>
                </div>
                <div class="inner-newyork-bottom">
                    <div>
                        <img class="newyork-img" src="img/newyork.jpg" alt="">
                    </div>
                    <div>
                        <img class="newyork-img" src="img/newyork2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="toronto">
                <div class="inner-toronto-top">
                    <h3 id="toronto-header">toronto</h3>
                </div>
                <div class="inner-toronto-bottom">
                    <div>
                        <img class="toronto-img" src="img/toronto.jpg" alt="">
                    </div>
                    <div>
                        <img class="toronto-img" src="img/toronto2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <a class="footer-links" href="about.php">about</a>
        <a class="footer-links" href="contact.php">contact</a>
    </div>
    <div class="bottom-footer">
        <p>&copy; Created by Ismail Mohamed</p>
    </div>
</body>
</html>
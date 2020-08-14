<?php
require_once './main-components/head.php';
?>


<body>
    <div class="signup-page-section">
        <div class="inner-signup-page-section">
            <h1 id="signup-header">Sign Up</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signup-error">please enter in all fields!</p>';
                }

                else if ($_GET['error'] == "invaliduidmail") {
                    echo '<p class="signup-error">invalid username and email?</p>';
                }

                else if ($_GET['error'] == "invaliduid") {
                    echo '<p class="signup-error">invalid username!</p>';
                }

                else if ($_GET['error'] == "invalidmail") {
                    echo '<p class="signup-error">invalid email!</p>';
                }

                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="signup-error">Your passwords do not match!</p>';
                }

                else if ($_GET['error'] == "usertaken") {
                    echo '<p class="signup-error">username is already taken!!</p>';
                }

                else if ($_GET['signup'] == "success") {
                    echo '<p class="signup-error">signup successful!</p>';
                }
            }
            ?>
            <form id="signup-form" action="includes/signup-process.php" method="post">
                <input class="signup-input" type="text" name="uid" placeholder="username">
                <input class="signup-input" type="text" name="mail" placeholder="E-mail">
                <input class="signup-input" type="password" name="pwd" placeholder="password">
                <input class="signup-input" type="password" name="pwd-repeat" placeholder="repeat password">
                <button id="signup-black-btn" class="signup-input" type="submit" name="signup-submit">submit</button>
            </form>
        </div>

        <div class="login-signup-page-section">
            <p id="login-sigup-page-p">Have an account? <a href="index.php">login</a></p>
        </div>
        
        <div class="opacity"></div>

        <div class="footer-signup">
            <a class="footer-links-signup" href="about.php">about</a>
            <a class="footer-links-signup" href="contact.php">contact</a>
        </div>
    </div>
    

</body>
</html>
<?php
require_once './main-components/head.php';
?>

<body>
<div class="contact-body">
    <div class="contact-section">
        <div class="inner-contact-section">
            <h1 id="contact-header">Contact Us</h1>
           <?php if(isset($_GET['error'])){
                    if($_GET['error'] === "emptyFields"){
                        echo "<p id='contact-error-sign'>The fields are empty</p>";
                    }
                    else if ($_GET['error'] === "invalidEmail"){
                        echo "<p id='contact-error-sign'>invalid email</p>";
                    }
                    else if ($_GET['error'] === "enterName"){
                        echo "<p id='contact-error-sign'>please enter name</p>";
                    }
                    else if ($_GET['error'] === "enterName"){
                        echo "<p id='contact-error-sign'>please enter name</p>";
                    }
                    else if ($_GET['error'] === "enterSubject"){
                        echo "<p id='contact-error-sign'>please enter subject</p>";
                    }
                    else if ($_GET['error'] === "enterMessage"){
                        echo "<p id='contact-error-sign'>please enter message</p>";
                    }
           } else{
                if($_GET['success'] === "submitted"){
                    echo "<p id='contact-error-sign'>Thank you for the enquiry!</p>";
                }
           }
               ?>
            <form action="includes/contact-process.php" method="post" class="contact-form">
                <input class="contact-input" type="text" name="contactName" placeholder="Name">
                <input class="contact-input" type="text" name="contactEmail" placeholder="E-mail">
                <input class="contact-input" type="text" name="contactSubject" placeholder="Subject">
                <textarea class="contact-input" name="contactMessage" placeholder="... message"></textarea>
                <button id="contact-btn" type="submit" name="contact-submit">Send</button>
            </form>
        </div>
        <div class="newsletter">
            <h1 id="newsletter-header">Newsletter</h1>
            <?php if(isset($_GET['email'])){
                    if($_GET['email'] === ""){
                        echo "<p style='color: white; text-transform: uppercase; margin-top: 10px;'>invalid email</p>";
                    }
                    else if($_GET['email'] === "%40"){
                        echo "<p style='color: white; text-transform: uppercase; margin-top: 10px;'>You are now subcribed!</p>";
                    }
           } 
               ?>
            <form action="" class="newsletter-form">
                <input class="newsletter-input" type="text" name="email" placeholder="E-mail">
                <button id="newsletter-btn">subscribe</button>
            </form>
        </div>
    </div>
</div>
    <div class="footer-contact">
            <a class="footer-links-contact" href="about.php">about</a>
            <a class="footer-links-contact" href="contact.php">contact</a>
            <a class="footer-links-contact" href="index.php">login</a>
        </div>
</body>
</html>

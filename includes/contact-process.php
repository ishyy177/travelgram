<?php



    if(isset($_POST['contact-submit'])){

        $name = $_POST['contactName'];
        $email = $_POST['contactEmail'];
        $subject = $_POST['contactSubject'];
        $message = $_POST['contactMessage'];

        if(empty($name) || empty($email) || empty($subject) || empty($message)) {
            header("location: ../contact.php?error=emptyFields");
            exit();
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("location: ../contact.php?error=invalidEmail");
                exit();
            } else {
                if(empty($name)){
                    header("location: ../contact.php?error=enterName");
                    exit();
                }
                else {
                    if(empty($subject)){
                        header("location: ../contact.php?error=enterSubject");
                        exit();
                    }
                    else {
                        if(empty($message)){
                            header("location: ../contact.php?error=enterMessage");
                            exit();
                        }
                        else{
                            $to = "98102uk@saeinstitute.edu";
                            $email_info = "";
                        
                            $email_info .= "From: ".$name. "\r\n";
                            $email_info .= "Email: ".$email. "\r\n";
                            $email_info .= "Message: ".$message. "\r\n";
                    
                            mail($to,$subject,$email_info);
                            header("location: ../contact.php?success=submitted");
                            exit();
                        }
                    }
                }
            }

        }
    }
    else{
        header("location: ../contact.php");
    }

    
    
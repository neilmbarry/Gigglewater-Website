<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name2"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email2"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message2"]);
    $address = trim($_POST["address2"]);
    $phone = trim($_POST["phone2"]);
    

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: delivery.php?success=-1");
        exit;
    }

    

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "cocktails@projectgigglewater.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message: $message\n\n";
    $email_content .= "\n";
    $email_content .= "FOR PICK UP";
    


    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: delivery.php?success=1");

?>
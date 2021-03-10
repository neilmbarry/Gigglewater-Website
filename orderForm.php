<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    // $cart = trim($_POST["cart"]);
    $cart = $_POST["cart"];
    $address = trim($_POST["address"]);
    $phone = trim($_POST["phone"]);
    $type = trim($_POST["type"]);
    $price = trim($_POST["price"]);
    $tip = trim($_POST["tip"]);
    $preference = trim($_POST["preference"]);
    $recipName = trim($_POST["recip-name"]);
    $recipPhone = trim($_POST["recip-phone"]);
    $message = trim($_POST["message"]);
    

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?success=-1");
        exit;
    }

    

    // Set the recipient email address. Update this to YOUR desired email address.
    // $recipient = "cocktails@projectgigglewater.com";
    $recipient = "neilbarry3@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name for $type";

    // Build the email content.
    $email_content = "Name:\n $name\n";
    $email_content .= "Email:\n $email\n\n";
    $email_content .= "Phone:\n $phone\n\n";
    $email_content .= "Address:\n $address\n\n";
    $email_content .= "Cart:\n $cart\n\n";
    $email_content .= "Price:\n $price\n\n";
    $email_content .= "Tip:\n $tip\n\n";
    $email_content .= "Type:\n $type\n\n";
    $email_content .= "Preference:\n $preference\n\n";
    $email_content .= "Recipient:\n $recipName\n\n";
    $email_content .= "Recipient Phone:\n $recipPhone\n\n";
    $email_content .= "Personal Message:\n $message\n\n";
    $email_content .= "\n";
    
    


    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: index.php?success=1");

?>
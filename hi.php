<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $linkedin = $_POST['linkedin'];
    $contact = $_POST['contact'];

    // Email information
    $to = "mjprabhat906@gmail.com"; // Change this to your email address
    $subject = "New Registration Form Submission";
    $message = "Name: $name\n";
    $message .= "Course: $course\n";
    $message .= "Email: $email\n";
    $message .= "Batch: $batch\n";
    $message .= "Company: $company\n";
    $message .= "Role: $role\n";
    $message .= "LinkedIn: $linkedin\n";
    $message .= "Contact: $contact\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "<script>alert('Thank you for your submission. We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}
?>

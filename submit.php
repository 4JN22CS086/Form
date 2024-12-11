<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $founderName = htmlspecialchars($_POST['founderName']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $country = htmlspecialchars($_POST['country']);
    $ship = htmlspecialchars($_POST['ship']);
    $build = htmlspecialchars($_POST['build']);
    $process = htmlspecialchars($_POST['process']);
    $gc = htmlspecialchars($_POST['gc']);
    $ram = htmlspecialchars($_POST['ram']);
    $aes = htmlspecialchars($_POST['aes']);
    $add = htmlspecialchars($_POST['add']);

    // Construct the response message
    echo "
        <h2>Submission Successful!</h2>
        <p><strong>Full Name:</strong> $founderName</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Contact:</strong> $contact</p>
        <p><strong>State:</strong> $country</p>
        <p><strong>Shipping Address:</strong> $ship</p>
        <p><strong>Build Purpose:</strong> $build</p>
        <p><strong>Processor:</strong> $process</p>
        <p><strong>Graphic Card:</strong> $gc</p>
        <p><strong>RAM:</strong> $ram</p>
        <p><strong>Aesthetic Preference:</strong> $aes</p>
        <p><strong>Addition Requirements:</strong> $add</p>
    ";
} else {
    echo "<p>Invalid request. Please submit the form correctly.</p>";
}
?>
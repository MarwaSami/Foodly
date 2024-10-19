<?php
// connect to database
require_once("config.php");

// Initialize error messages
$errors = array();

// Validation
if (empty($_POST["name"])) {
    $errors[] = "Please enter a Name";
}

if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid Email";
}

if (empty($_POST["password"])) {
    $errors[] = "Invalid Password";
}

// Check for validation errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    // Redirect back to add_cust_form.php
    // header("Location: ../views/customers/add_cust_form.php");
    // exit();
} else {
    // Prepare variables
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $phone = $_POST["phone"];
    $subscription = $_POST["subscription"];

    // Store data
    $sql = "INSERT INTO customers(name, email, password, phone, subscription) VALUES ('$name', '$email', '$password', '$phone', '$subscription')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Redirect to another page
    header("Location: ../views/customers/");
    exit();
}

?>

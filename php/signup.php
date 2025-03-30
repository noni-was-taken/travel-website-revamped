<?php
    session_start();
    include("../php/dbconn.php");

    $errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = clean_input($_POST['firstName']);
    $lastName = clean_input($_POST['lastName']);
    $email = clean_input($_POST['email']);
    $password = $_POST['password'];
    $termsAgreed = isset($_POST['termsCheck']) ? 1 : 0;

    if (empty($firstName)) $errors[] = "First name is required";
    if (empty($lastName)) $errors[] = "Last name is required";
    if (empty($email)) $errors[] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($password)) $errors[] = "Password is required";
    elseif (strlen($password) < 8) $errors[] = "Password must be at least 8 characters";
    if (!$termsAgreed) $errors[] = "You must agree to the terms";

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $errors[] = "Email already exists";
        }
        $stmt->close();
    }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, password, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $hashedPassword, $email);
        
        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['first_name'] = $firstName;
            header("Location: ../pages/index.php");
            exit();
        } else {
            $errors[] = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    
    if (!empty($errors)) {
        $_SESSION['signup_errors'] = $errors;
        $_SESSION['signup_form_data'] = $_POST;
        exit();
    }
}

$conn->close();
?>
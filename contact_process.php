<?php

// **CRITICAL STEP:** Replace 'C:/YOUR/PATH/' with the exact path to your 'portfolio-xampp' folder.
// Use forward slashes (/) instead of backslashes (\).
// Example: 'C:/xampp/htdocs/portfolio-xampp/'
$absolute_path = 'C:/xampp/htdocs/portfolio-xampp/'; // <-- EDIT THIS LINE

// Define the full path for the log file
$log_file_name = 'message_log.txt';
$full_log_path = $absolute_path . $log_file_name;


// ==============================================================================
// 2. FORM PROCESSING LOGIC
// ==============================================================================

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Define the email address (used for validation, even if not sending mail)
    $recipient = "spoorthia589@gmail.com"; 

    // Collect and sanitize form data
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
    
    // Validation check
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // If validation fails, redirect with an error.
        header("Location: index.php?success=0#contact");
        exit;
    }

    // Prepare the log entry content
    $log_entry = "--- " . date("Y-m-d H:i:s") . " ---\n";
    $log_entry .= "From: $name ($email)\n";
    $log_entry .= "Message:\n$message\n\n";

    // ==============================================================================
    // 3. VERIFICATION (File Logging)
    // ==============================================================================
    
    // Log the message using the absolute path to guarantee file creation.
    // This is the definitive proof of PHP execution.
    if (file_put_contents($full_log_path, $log_entry, FILE_APPEND | LOCK_EX)) {
        // Success: File was written. Redirect back to the main page.
        header("Location: index.php?success=1#contact");
    } else {
        // Failure: Could not write to the file (check file permissions/path again).
        header("Location: index.php?success=0#contact");
    }

} else {
    // If accessed directly, deny access.
    http_response_code(403);
    echo "Access denied.";
}
?>
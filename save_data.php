<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $number = $_POST['number'];
    // $qualification = $_POST['qualification'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO student_information (name, number, email, Address) VALUES (?, ?, ?, ?)");
    
    // Bind the actual values to the placeholders
    $stmt->bind_param("ssss", $name, $number, $email, $Address);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to request_dashboard.php after successful insertion
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

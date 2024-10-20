<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking - Confirmation</title>
</head>
<body>
    <h2>Ticket Confirmation</h2>
    <p>Thank you for booking! Your ticket has been confirmed.</p>

    <?php
    include 'db.php'; // Include database connection
    session_start();
    $email = $_SESSION['email']; // Get the email from session

    $sql = "SELECT full_name, email, phone, seat_number, ticket_number FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p><strong>Full Name:</strong> " . $row["full_name"]. "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
            echo "<p><strong>Phone:</strong> " . $row["phone"]. "</p>";
            echo "<p><strong>Seat Number:</strong> " . $row["seat_number"]. "</p>";
            echo "<p><strong>Ticket Number:</strong> " . $row["ticket_number"]. "</p>";
        }
    } else {
        echo "<p>No confirmation found.</p>";
    }

    $conn->close();
    ?>
    <a href="home.html">Back to Home</a>
</body>
</html>

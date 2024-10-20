<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking - User Details</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <div id="selected-seats-info"></div>
    
    <form id="detailsForm" action="submit.php" method="POST">
        <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
        <select id="sex" name="sex" required>
            <option value="" disabled selected>Select Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
        <input type="hidden" id="seatNumber" name="seatNumber" value="">
        <button type="submit">Proceed</button>
    </form>

    <script>
        const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
        const seatsInfoContainer = document.getElementById('selected-seats-info');

        if (selectedSeats && selectedSeats.length > 0) {
            seatsInfoContainer.innerHTML = `<p>Selected Seats: ${selectedSeats.join(', ')}</p>`;
            document.getElementById('seatNumber').value = selectedSeats.join(', '); // Set hidden seatNumber
        } else {
            seatsInfoContainer.innerHTML = `<p>No seats selected.</p>`;
        }
    </script>
</body>
</html>

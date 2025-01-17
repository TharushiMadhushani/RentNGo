<?php
require_once 'connection/connection.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in to book a vehicle.'); window.location.href = 'login.php';</script>";
    exit;
}

$vehicle_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch vehicle details
$sql = "SELECT * FROM vehicles WHERE id = $vehicle_id";
$result = mysqli_query($connection, $sql);
$vehicle = mysqli_fetch_assoc($result);

if (!$vehicle) {
    echo "<script>alert('Vehicle not found!'); window.location.href = 'vehicles.php';</script>";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $booking_date = $_POST['booking_date'];
    $return_date = $_POST['return_date'];
    $price_per_day = $vehicle['price_per_day'];
    $total_days = (strtotime($return_date) - strtotime($booking_date)) / (60 * 60 * 24);
    $total_price = $total_days * $price_per_day;

    // Save booking in the database
    $sql = "INSERT INTO bookings (user_id, vehicle_id, booking_date, return_date, total_price) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("iissd", $user_id, $vehicle_id, $booking_date, $return_date, $total_price);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful! Your confirmation number is: " . $stmt->insert_id . "'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Booking failed. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Vehicle - RentNGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Book Vehicle: <?php echo $vehicle['name']; ?></h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $vehicle['image_url']; ?>" class="img-fluid" alt="<?php echo $vehicle['name']; ?>">
                </div>
                <div class="col-md-6">
                    <p><strong>Type:</strong> <?php echo $vehicle['type']; ?></p>
                    <p><strong>Price per Day:</strong> Rs. <?php echo $vehicle['price_per_day']; ?></p>
                    <p><strong>Details:</strong> <?php echo $vehicle['details']; ?></p>

                    <!-- Booking Form -->
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="booking_date" class="form-label">Booking Date</label>
                            <input type="date" name="booking_date" id="booking_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="return_date" class="form-label">Return Date</label>
                            <input type="date" name="return_date" id="return_date" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Confirm Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
require_once 'connection/connection.php';
session_start();

$vehicle_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch vehicle details
$sql = "SELECT * FROM vehicles WHERE id = $vehicle_id";
$result = mysqli_query($connection, $sql);
$vehicle = mysqli_fetch_assoc($result);

if (!$vehicle) {
    echo "<script>alert('Vehicle not found!'); window.location.href = 'vehicles.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details - RentNGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4"><?php echo $vehicle['name']; ?></h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $vehicle['image_url']; ?>" class="img-fluid" alt="<?php echo $vehicle['name']; ?>">
                </div>
                <div class="col-md-6">
                    <p><strong>Type:</strong> <?php echo $vehicle['type']; ?></p>
                    <p><strong>Price per Day:</strong> Rs. <?php echo $vehicle['price_per_day']; ?></p>
                    <p><strong>Details:</strong> <?php echo $vehicle['details']; ?></p>

                    <!-- Booking Form -->
                    <h4 class="mt-4">Book This Vehicle</h4>
                    <form method="POST" action="book_vehicle.php">
                        <input type="hidden" name="vehicle_id" value="<?php echo $vehicle['id']; ?>">
                        <div class="mb-3">
                            <label for="booking_date" class="form-label">Booking Date</label>
                            <input type="date" name="booking_date" id="booking_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="return_date" class="form-label">Return Date</label>
                            <input type="date" name="return_date" id="return_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_price" class="form-label">Total Price (Rs.)</label>
                            <input type="number" name="total_price" id="total_price" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        const bookingDateInput = document.getElementById('booking_date');
        const returnDateInput = document.getElementById('return_date');
        const totalPriceInput = document.getElementById('total_price');

        const pricePerDay = <?php echo $vehicle['price_per_day']; ?>;

        function calculateTotalPrice() {
            const bookingDate = new Date(bookingDateInput.value);
            const returnDate = new Date(returnDateInput.value);
            const timeDiff = returnDate - bookingDate;
            const days = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

            if (days > 0) {
                totalPriceInput.value = days * pricePerDay;
            } else {
                totalPriceInput.value = 0;
            }
        }

        bookingDateInput.addEventListener('change', calculateTotalPrice);
        returnDateInput.addEventListener('change', calculateTotalPrice);
    </script>
</body>
</html>

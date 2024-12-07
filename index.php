<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentNGo - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section text-left py-5" style="background: url('home.jpg') no-repeat center center; background-size: cover;">
        <div class="container text-light">
            <h1>Find Your Perfect Ride with RentNGo</h1>
            <p class="lead">Rent cars, scooters, vans, and more. Simple. Affordable. Convenient.</p>
            <a href="vehicles.php" class="btn btn-lg btn-primary">Browse Vehicles</a>
        </div>
    </section>

    <!-- Featured Vehicles -->
    <section class="featured-vehicles py-5">
        <div class="container">
            <h2 class="text-center text-dark mb-4">Featured Vehicles</h2>
            <div class="row">
                <!-- Car/Van -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="car_van.jpeg" class="card-img-top" alt="Car/Van">
                        <div class="card-body">
                            <h5 class="card-title">Car/Van</h5>
                            <p>From Rs. 200/day</p>
                            <a href="vehicle-details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Scooter -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="Scooter.jpg" class="card-img-top" alt="Scooter">
                        <div class="card-body">
                            <h5 class="card-title">Scooter</h5>
                            <p>From Rs. 100/day</p>
                            <a href="vehicle-details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Pickup Truck -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="truck.jpeg" class="card-img-top" alt="Pickup Truck">
                        <div class="card-body">
                            <h5 class="card-title">Pickup Truck</h5>
                            <p>From Rs. 300/day</p>
                            <a href="vehicle-details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p>RentNGo is your trusted partner for all your vehicle rental needs.</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Details</h5>
                    <p>Email: support@rentngo.com</p>
                    <p>Phone: +123 456 789</p>
                </div>
                <div class="col-md-3">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Terms and Conditions</a></li>
                        <li><a href="#" class="text-light">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <p><a href="#" class="text-light">Facebook</a></p>
                    <p><a href="#" class="text-light">Instagram</a></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">© 2024 RentNGo. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

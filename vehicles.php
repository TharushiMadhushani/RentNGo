<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles - RentNGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Available Vehicles</h2>
            <div class="row mb-4">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Search vehicles...">
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option value="">Sort by</option>
                        <option value="price">Price</option>
                        <option value="type">Type</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Scooter.jpg" class="card-img-top" alt="Scooter">
                        <div class="card-body">
                            <h5 class="card-title">Scooter</h5>
                            <p>From Rs. 100/day</p>
                            <a href="vehicle-details.php" class="btn btn-primary">Rent Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add more vehicles as needed -->
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-4">
        <div class="text-center">© 2024 RentNGo. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

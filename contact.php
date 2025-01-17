<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RentNGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Simulate sending the message (replace with email or database logic)
        echo "<script>alert('Thank you, $name! Your message has been received.');</script>";
    }
    ?>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <form method="POST" action="contact.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <!-- Contact Details -->
                <div class="col-md-6">
                    <h4>Contact Details</h4>
                    <p>Email: <a href="mailto:support@rentngo.com">support@rentngo.com</a></p>
                    <p>Phone: +123 456 789</p>
                    <p>Address: 123 RentNGo Street, Cityville, Country</p>
                    <h4>Follow Us</h4>
                    <p>
                        <a href="#" class="text-decoration-none">Facebook</a> |
                        <a href="#" class="text-decoration-none">Instagram</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-4">
        <div class="text-center">© 2024 RentNGo. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

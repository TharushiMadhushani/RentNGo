<?php
    require_once 'connection/connection.php';
?>
<?php
    session_start();
    if(isset($_POST["login"])){
        $mail = mysqli_real_escape_string($connection,$_POST["mail"]);
        $pswd = mysqli_real_escape_string($connection,$_POST["pswd"]);

        if($mail != "" && $pswd != ""){
            $sql1 = "SELECT * FROM users WHERE mail='{$mail}' AND pswd='{$pswd}'";

            $result_set1 = mysqli_query($connection,$sql1);

            if(mysqli_num_rows($result_set1) == 1){
                $row = mysqli_fetch_assoc($result_set1);

                $_SESSION['user_id'] = $row['userid'];
                header("Location: index.php");
            }        
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RentNGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Login</h2>
            <form action="index.php" method="POST" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3">Don't have an account? <a href="register.php">Register Here</a></p>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-light py-4">
        <div class="text-center">© 2024 RentNGo. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

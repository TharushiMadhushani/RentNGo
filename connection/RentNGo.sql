-- Use the database
USE rentngo;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the vehicles table
CREATE TABLE IF NOT EXISTS vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    price_per_day DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

-- Create the bookings table
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    vehicle_id INT NOT NULL,
    booking_date DATE NOT NULL,
    return_date DATE NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(id)
);

-- Insert sample data into vehicles table
INSERT INTO vehicles (name, type, price_per_day, image_url)
VALUES
('Honda Civic', 'Car', 200.00, 'images/hondacivic.jpeg'),
('Yamaha Scooter', 'Scooter', 100.00, 'images/yamahascooter.jpg'),
('Pickup Truck', 'Truck', 300.00, 'images/truck.jpeg'),
('Mini Van', 'Van', 220.00, 'images/mini-van.jpeg'),
('KDH', 'Van', 320.00, 'images/kdb-white.jpg'),
('KDH', 'Van', 320.00, 'images/kdbBlack.webp'),
('Toyota', 'Van', 300, 'images/toyotavan.jpeg'),
('Truck', 'Truck', 320.00, 'images/truck.jpeg'),
('Truck', 'Truck', 320.00, 'images/truck1.jpeg'),
('Honda CGL', 'Van', 170.00, 'images/hondaCGL.jpeg'),
('Demo', 'Truck', 110.00, 'images/demo.jpg'),
('Truck', 'Truck', 150.00, 'images/mitsubishi.jpg');









-- Insert sample user data
INSERT INTO users (username, email, password)
VALUES
('admin', 'admin@rentngo.com', '$2y$10$E19mS3bfXOQv1xVzT7G7DeRlgVO7zH7JZFmDDh9Cr7Rc9B/dRcABu'); -- password: admin123

<?php
    // user_details table
    $user_details_table = "CREATE TABLE IF NOT EXISTS user_details (
        user_id INT PRIMARY KEY AUTO_INCREMENT,
        user_name VARCHAR(50) NOT NULL,
        user_password VARCHAR(255) NOT NULL,
        user_email VARCHAR(100) UNIQUE,
        user_address TEXT,
        user_nid VARCHAR(20) UNIQUE,
        user_full_name VARCHAR(100),
        user_dob DATE,
        user_phn VARCHAR(15),
        user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($connection, $user_details_table);

    // employee_details table
    $employee_details_table = "CREATE TABLE IF NOT EXISTS employees (
        employee_id INT PRIMARY KEY AUTO_INCREMENT,
        employee_full_name VARCHAR(100) NOT NULL,
        employee_email VARCHAR(100) UNIQUE,
        employee_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        employee_address TEXT,
        employee_nid VARCHAR(20) UNIQUE,
        employee_dob DATE,
        employee_phn VARCHAR(15),
        employee_role VARCHAR(50) DEFAULT 'receptionist'
    )";
    mysqli_query($connection, $employee_details_table);

    // room_details table
    $room_details_table = "CREATE TABLE IF NOT EXISTS room_details (
        room_id INT PRIMARY KEY AUTO_INCREMENT,
        room_number VARCHAR(10) UNIQUE NOT NULL,
        room_type VARCHAR(50) NOT NULL,
        room_price DECIMAL(10, 2) NOT NULL,
        room_availability BOOLEAN DEFAULT TRUE
    )";
    mysqli_query($connection, $room_details_table);

    // package_details table
    $package_details_table = "CREATE TABLE IF NOT EXISTS package_details (
        package_id INT PRIMARY KEY AUTO_INCREMENT,
        package_name VARCHAR(50) NOT NULL UNIQUE,
        package_type VARCHAR(50) NOT NULL,
        package_price DECIMAL(10, 2) NOT NULL,
        package_availability BOOLEAN DEFAULT TRUE
    )";
    mysqli_query($connection, $package_details_table);

    // events_details table
    $events_details_table = "CREATE TABLE IF NOT EXISTS events_details (
        events_id INT PRIMARY KEY AUTO_INCREMENT,
        events_name VARCHAR(100) NOT NULL,
        event_date DATE NOT NULL,
        event_amount DECIMAL(10, 2),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($connection, $events_details_table);

    // bookings table
    $bookings_table = "CREATE TABLE IF NOT EXISTS bookings (
        booking_id INT PRIMARY KEY AUTO_INCREMENT,
        events_id INT,
        user_id INT NOT NULL,
        room_id INT,
        package_id INT,
        check_in DATE NOT NULL,
        check_out DATE NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (events_id) REFERENCES events_details(events_id) ON DELETE SET NULL,
        FOREIGN KEY (user_id) REFERENCES user_details(user_id) ON DELETE CASCADE,
        FOREIGN KEY (room_id) REFERENCES room_details(room_id) ON DELETE SET NULL,
        FOREIGN KEY (package_id) REFERENCES package_details(package_id) ON DELETE SET NULL,
        CONSTRAINT check_dates CHECK (check_out > check_in)
    )";
    mysqli_query($connection, $bookings_table);

    // payments_details table
    $payments_details_table = "CREATE TABLE IF NOT EXISTS payments_details (
        payments_id INT PRIMARY KEY AUTO_INCREMENT,
        user_id INT NOT NULL,
        booking_id INT NOT NULL,
        amount DECIMAL(10, 2) NOT NULL,
        payment_status ENUM('paid', 'pending', 'failed') DEFAULT 'pending',
        payments_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES user_details(user_id) ON DELETE CASCADE,
        FOREIGN KEY (booking_id) REFERENCES bookings(booking_id) ON DELETE CASCADE
    )";
    mysqli_query($connection, $payments_details_table);
?>

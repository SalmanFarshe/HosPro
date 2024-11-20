<?php
    // Table creation queries
    $user_details_table = "CREATE TABLE IF NOT EXISTS user_details (
        user_id VARCHAR(10) PRIMARY KEY,
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

    $employee_details_table = "CREATE TABLE IF NOT EXISTS employee_details (
        employee_id VARCHAR(10) PRIMARY KEY,
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

    $room_details_table = "CREATE TABLE IF NOT EXISTS room_details (
        room_id VARCHAR(10) PRIMARY KEY,
        room_number VARCHAR(10) UNIQUE NOT NULL,
        room_type VARCHAR(50) NOT NULL,
        room_price DECIMAL(10, 2) NOT NULL,
        room_availability BOOLEAN DEFAULT TRUE
    )";
    mysqli_query($connection, $room_details_table);

    $room_package_table = "CREATE TABLE IF NOT EXISTS room_package_details (
        room_package_id VARCHAR(10) PRIMARY KEY,
        room_package_name VARCHAR(50) NOT NULL UNIQUE,
        room_package_details TEXT NOT NULL,
        room_package_type VARCHAR(50) NOT NULL,
        room_package_price DECIMAL(10, 2) NOT NULL,
        room_package_availability BOOLEAN DEFAULT TRUE
    )";
    mysqli_query($connection, $room_package_table);

    $food_package_table = "CREATE TABLE IF NOT EXISTS food_package_details (
        food_package_id VARCHAR(10) PRIMARY KEY,
        food_package_name VARCHAR(50) NOT NULL UNIQUE,
        food_package_details TEXT NOT NULL,
        food_package_type VARCHAR(50) NOT NULL,
        food_package_price DECIMAL(10, 2) NOT NULL,
        food_package_availability BOOLEAN DEFAULT TRUE
    )";
    mysqli_query($connection, $food_package_table);

    $events_details_table = "CREATE TABLE IF NOT EXISTS events_details (
        events_id VARCHAR(10) PRIMARY KEY,
        events_name VARCHAR(100) NOT NULL,
        event_date DATE NOT NULL,
        event_amount DECIMAL(10, 2),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($connection, $events_details_table);

function generateID($table, $prefix, $id_column, $connection) {
    $query = "SELECT MAX($id_column) AS last_id FROM $table";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // If no ID exists, start from 1
    $last_id = $row['last_id'] ?? null;
    $new_number = $last_id ? intval(substr($last_id, strlen($prefix))) + 1 : 1;

    // Generate ID with prefix and padded number
    return $prefix . str_pad($new_number, 2, '0', STR_PAD_LEFT);
}


    // Insert example data into room_details
    $new_room_id = generateID('room_details', 'RM-', 'room_id', $connection);
    $insert_room_query = "INSERT INTO room_details (room_id, room_number, room_type, room_price, room_availability) 
                        VALUES ('$new_room_id', '101', 'Deluxe', 100.00, TRUE)";
    if (mysqli_query($connection, $insert_room_query)) {
        echo "Room record inserted successfully with ID: $new_room_id\n";
    } else {
        echo "Error: " . mysqli_error($connection) . "\n";
    }

    // Insert example data into food_package_details
    $new_food_id = generateID('food_package_details', 'FD-', 'food_package_id', $connection);
    $insert_food_query = "INSERT INTO food_package_details (food_package_id, food_package_name, food_package_details, food_package_type, food_package_price, food_package_availability) 
                        VALUES ('$new_food_id', 'Continental Breakfast', 'Coffee, juice, and croissants', 'Breakfast', 15.00, TRUE)";
    if (!mysqli_query($connection, $insert_food_query)) {
        echo "Error: " . mysqli_error($connection) . "\n";
    }
?>

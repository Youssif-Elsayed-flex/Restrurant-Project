<?php
require 'config/db.php';

try {
    // Connect without DB name to create it if needed
    $pdo_setup = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
    $pdo_setup->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbname = DB_NAME;
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo_setup->exec($sql);
    echo "Database created successfully or already exists.<br>";

    $pdo_setup->exec("USE $dbname");

    // Users Table
    $sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) UNIQUE,
        email VARCHAR(255) UNIQUE,
        password_hash VARCHAR(255),
        role ENUM('admin','user') DEFAULT 'admin',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo_setup->exec($sql);
    echo "Users table created.<br>";

    // Categories Table
    $sql = "CREATE TABLE categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo_setup->exec($sql);
    echo "Categories table created.<br>";

    // Posts Table
    $sql = "CREATE TABLE posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category_id INT,
        title VARCHAR(255),
        body TEXT,
        image VARCHAR(255),
        status ENUM('published','draft') DEFAULT 'draft',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        views INT DEFAULT 0,
        user_id INT,
        FOREIGN KEY (category_id) REFERENCES categories(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
    )";
    $pdo_setup->exec($sql);
    echo "Posts table created.<br>";

    // Comments Table
    $sql = "CREATE TABLE comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        post_id INT,
        username VARCHAR(255),
        email VARCHAR(255),
        body TEXT,
        status ENUM('approved','rejected','pending') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (post_id) REFERENCES posts(id)
    )";
    $pdo_setup->exec($sql);
    echo "Comments table created.<br>";

} catch (PDOException $e) {
    die("DB Setup failed: " . $e->getMessage());
}
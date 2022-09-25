<?php

$MIGRATION = [
    /**
     * Create users table
     */

    "
    CREATE TABLE IF NOT EXISTS users (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role INT UNSIGNED NOT NULL,
        token LONGTEXT
    );
    ",

    /**
     * Create reference table
     */
    // "
    // CREATE TABLE IF NOT EXISTS reference (
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(20) NOT NULL
    // );
    // ",
    
    /**
     * Create application table
     */
    "
    CREATE TABLE IF NOT EXISTS application (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL UNIQUE,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        full_name VARCHAR(255) NOT NULL,
        dob date,
        phone VARCHAR(20) NOT NULL UNIQUE,
        address_line_1 VARCHAR(255),
        address_line_2 VARCHAR(255),
        city VARCHAR(255),
        state VARCHAR(255),
        pincode INT(6) UNSIGNED,
        skills LONGTEXT NOT NULL,
        certification LONGTEXT,
        experience INT UNSIGNED,
        reference_id int UNSIGNED NOT NULL,
        comment TEXT,
        resume TEXT,
        FULLTEXT (skills),
        FULLTEXT (certification),
        FOREIGN KEY (user_id) REFERENCES users(id) /*,
        FOREIGN KEY (reference_id) REFERENCES reference(id)*/
    );
    ",

    /**
     * Create Migrations
     */
    "
    DROP procedure IF EXISTS maxExperience;
    ",

    "CREATE PROCEDURE maxExperience(IN y int)
        BEGIN 
            SELECT *, 
            (SELECT email FROM users WHERE id = application.user_id) AS email
            FROM application
            WHERE experience < y;
        END;
    ",
];
CREATE DATABASE blog;
USE blog;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

-- Przykładowy admin (hasło: admin123)
INSERT INTO admins (username, password)
VALUES ('admin', '$2y$10$rZH...'); -- użyj `password_hash('admin123', PASSWORD_DEFAULT)`

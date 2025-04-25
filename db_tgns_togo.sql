-- Table des voitures
CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    mileage INT DEFAULT 0,
    engine_type VARCHAR(50),
    engine_capacity VARCHAR(50),
    horsepower INT,
    transmission VARCHAR(50),
    fuel_type VARCHAR(50),
    seats INT DEFAULT 5,
    doors INT DEFAULT 4,
    color VARCHAR(50),
    air_conditioning BOOLEAN DEFAULT TRUE,
    gps BOOLEAN DEFAULT FALSE,
    camera BOOLEAN DEFAULT FALSE,
    bluetooth BOOLEAN DEFAULT FALSE,
    insurance_included BOOLEAN DEFAULT TRUE,
    availability ENUM('available', 'rented', 'sold') DEFAULT 'available',
    price_per_day DECIMAL(10, 2),
    price_sale DECIMAL(10, 2),
    caution_fee DECIMAL(10, 2),
    image_url VARCHAR(255),
    gallery TEXT,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Galerie photo complète pour chaque fiche voiture
CREATE TABLE car_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE CASCADE
);

-- Table des services
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    icon_class VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des réservations
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_id INT NOT NULL,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(50),
    rental_start_date DATE NOT NULL,
    rental_end_date DATE NOT NULL,
    total_price DECIMAL(10, 2),
    status ENUM('pending', 'confirmed', 'completed', 'canceled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (car_id) REFERENCES cars(id)
);

-- Table des messages de contact
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('unread', 'read') DEFAULT 'unread',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Ajout d’un compte admin par défaut (login : admin / mot de passe : admin123)
INSERT INTO admins (username, password)
VALUES ('admin', '$2y$10$OB1xOhYACvzyIBvYrOBujOFq7HQ53ALDO4xz78V4HZwguKygJDuhG'); 
-- Le mot de passe est haché avec password_hash('admin123', PASSWORD_DEFAULT)

-- Tworzenie tabeli "countries"
CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    iso_code VARCHAR(2) NOT NULL,
    currency VARCHAR(50) NOT NULL,
    area_km2 DECIMAL(10,2),
    official_language VARCHAR(100) NOT NULL
);

-- Tworzenie tabeli "tours"
CREATE TABLE tours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    continent VARCHAR(100) NOT NULL,
    duration_days INT,
    description TEXT,
    price DECIMAL(10,2),
    image_name VARCHAR(255),
    country_id INT,
    FOREIGN KEY (country_id) REFERENCES countries(id)
);

CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    from_city VARCHAR(100),
    to_city VARCHAR(100),
    flight_date DATE,
    passengers INT
);

CREATE TABLE car_rentals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pickup_location VARCHAR(100),
    return_location VARCHAR(100),
    pickup_date DATE,
    return_date DATE,
    car_type VARCHAR(50)
);

CREATE TABLE airport_taxis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pickup_address VARCHAR(255),
    airport VARCHAR(100),
    pickup_time DATETIME,
    passengers INT
);

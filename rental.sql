-- Buat database "rental_dvd" jika belum ada
CREATE DATABASE IF NOT EXISTS rental;

-- Gunakan database "rental_dvd"
USE rental;

-- Buat tabel "dvds" dengan kolom "id", "judul", "genre", dan "stok"
CREATE TABLE IF NOT EXISTS vcds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    stok INT NOT NULL
);
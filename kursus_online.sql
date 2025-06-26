-- Buat database
CREATE DATABASE IF NOT EXISTS kursus_online;
USE kursus_online;

-- Tabel kursus
CREATE TABLE kursus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    biaya INT NOT NULL
);

-- Tabel materi
CREATE TABLE materi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kursus_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    FOREIGN KEY (kursus_id) REFERENCES kursus(id) ON DELETE CASCADE
);

-- Tabel peserta
CREATE TABLE peserta 
ALTER TABLE peserta MODIFY kursus_id INT NULL;
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    usia INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    kursus_id INT NOT NULL,
    waktu_daftar DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (kursus_id) REFERENCES kursus(id) ON DELETE CASCADE
);

-- Insert data awal ke tabel kursus
INSERT INTO kursus (nama, biaya) VALUES
('Web Development', 2000000),
('Data Science', 2500000),
('UI/UX Design', 1800000);

-- Insert data awal ke tabel materi
INSERT INTO materi (kursus_id, nama) VALUES
(1, 'HTML'),
(1, 'CSS'),
(1, 'JavaScript'),
(1, 'PHP'),
(2, 'Python'),
(2, 'Pandas'),
(2, 'Machine Learning'),
(3, 'Figma'),
(3, 'UI Patterns'),
(3, 'Prototyping');

-- Contoh peserta (opsional)
INSERT INTO peserta (nama, usia, email, kursus_id) VALUES
('Andi', 21, 'andi@email.com', 1),
('Budi', 25, 'budi@email.com', 2);

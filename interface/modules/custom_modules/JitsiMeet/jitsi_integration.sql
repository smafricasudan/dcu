CREATE TABLE IF NOT EXISTS `jitsi_meetings` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `patient_id` INT NOT NULL,
    `room_name` VARCHAR(255) NOT NULL,
    `meeting_link` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

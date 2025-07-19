CREATE TABLE `admissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100),
  `dob` date,
  `course` varchar(100),
  `phone` varchar(20),
  `email` varchar(100),
  `photo` varchar(255),
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
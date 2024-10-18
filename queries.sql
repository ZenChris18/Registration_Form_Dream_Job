CREATE TABLE software_engineers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    tech_stack VARCHAR(255) NOT NULL,
    years_of_exp INT NOT NULL,
    highest_education VARCHAR(255) NOT NULL,
    portfolio_url VARCHAR(255) NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO software_engineers (fullname, email, tech_stack, years_of_exp, highest_education, portfolio_url, date_added) VALUES
('Alex Johnson', 'alex.johnson@example.com', 'Python', 5, 'Bachelor\'s in Computer Science', 'https://alexjohnson.dev', NOW()),
('Maria Garcia', 'maria.garcia@example.com', 'JavaScript', 3, 'Master\'s in Software Engineering', 'https://mariagarcia.dev', NOW()),
('David Smith', 'david.smith@example.com', 'Java', 4, 'Bachelor\'s in Information Technology', 'https://davidsmith.dev', NOW()),
('Emma Brown', 'emma.brown@example.com', 'PHP', 2, 'Associate\'s Degree in Web Development', 'https://emmabrown.dev', NOW()),
('James Wilson', 'james.wilson@example.com', 'Other', 6, 'Master\'s in Computer Science', 'https://jameswilson.dev', NOW());

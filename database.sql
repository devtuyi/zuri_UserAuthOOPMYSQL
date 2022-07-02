CREATE TABLE IF NOT EXISTS students (
    id int NOT NULL AUTO_INCREMENT,
    full_names varchar(255) NOT NULL,
    country varchar(50) NOT NULL,
    email varchar(255) NOT NULL,
    gender varchar(6) NOT NULL,
    password varchar(25) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email)
);

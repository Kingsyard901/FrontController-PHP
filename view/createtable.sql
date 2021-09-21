-- Användes för att skapa datat i mysql från tutorial
CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

-- Använder denna för att mata in nya användare antingen via kod eller direkt i mysql MariaDB.
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Henrik', 'Ekelund', 'test@mail.com', 'Admin', '123');

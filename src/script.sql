DROP DATABASE IF EXISTS hackaton_character;
​
CREATE DATABASE hackaton_character;
​
USE hackaton_character;
​
CREATE TABLE characters (
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(255) NOT NULL,
    image TEXT NULL,
    description TEXT NULL,
    loveStyle INT NOT NULL,
    food INT NOT NULL,
    ethic INT NOT NULL,
    partyMonster INT NOT NULL,
    matchRate float NOT NULL,
    PRIMARY KEY (id)
);
​
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Janet Weiss', 22, 'Female', 'https://vignette.wikia.nocookie.net/rockyhorror/images/6/66/Janetport.png/revision/latest?cb=20160802162926', 'Dammit Janet', 10, 20, 100, 60, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Brad Majors', 24, 'Male', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyOX4mc0eaGh4Y7AHEPM9BD7hAvwTrKEwx7UTyP5DxOwdgCgi8&s', 'Im Brad', 10, 30, 60, 10, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Riff Raff', 103, 'Male', 'https://hobbydb-production.s3.amazonaws.com/processed_uploads/subject_photo/subject_photo/image/40343/1528225549-11555-4034/download_large.jpg', 'Riff Raff', 60, 40, 80, 90, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Magenta', 82, 'Female', 'https://www.scifinow.co.uk/wp-content/uploads/2019/07/tumblr_n9hvih2rok1sx2zfgo4_r1_1280-616x617.jpg', 'Magenta',50, 40, 60 , 90, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Rocky Horror', 1, 'Male', 'https://vignette.wikia.nocookie.net/rockyhorror/images/4/4f/Rockyport.png/revision/latest?cb=20160802163020', 'Rocky el bogoss', 20, 20, 20, 20, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Everett V. Scott', 70, 'Male', 'https://i.pinimg.com/originals/9b/71/ac/9b71acdda35ed6cb9c6c83a967a7a32e.jpg', 'Dr Scott !', 10, 10, 10, 10, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Frank-N-Furter', 86, 'Male', 'https://vignette.wikia.nocookie.net/rockyhorror/images/d/d9/Frankport.png/revision/latest?cb=20160802163635', 'Frank Furter', 100, 100, 100, 100, 1);
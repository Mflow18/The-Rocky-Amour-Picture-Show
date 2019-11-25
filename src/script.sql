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
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Janet Weiss', 22, 'Female', '/assets/images/Janet.png', 'Dammit Janet', 10, 20, 100, 60, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Brad Majors', 24, 'Male', '/assets/images/Brad.jpg', 'Im Brad', 10, 30, 60, 10, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Riff Raff', 103, 'Male', '/assets/images/Riffraff.jpg', 'Riff Raff', 60, 40, 80, 90, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Magenta', 82, 'Female', '/assets/images/Magenta.jpg', 'Magenta',50, 40, 60 , 90, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Rocky', 1, 'Male', '/assets/images/Rocky.png', 'Rocky el bogoss', 20, 20, 20, 20, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Everett V. Scott', 70, 'Male', '/assets/images/Scott.jpg', 'Dr Scott !', 10, 10, 10, 10, 1);
INSERT INTO `hackaton_character`.`characters` (`name`, `age`, `gender`, `image`, `description`, `loveStyle`, `food`, `ethic`, `partyMonster`, matchRate) VALUES ('Frank-N-Furter', 86, 'Male', '/assets/images/Frank.png', 'Frank Furter', 100, 100, 100, 100, 1);
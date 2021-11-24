CREATE TABLE `association` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `désignation` int(11) NOT NULL
);
CREATE TABLE `members` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `privilège` tinyint(1) NOT NULL,
  `âge` int(11) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `membre_ca` tinyint(1) NOT NULL
);
CREATE TABLE `appartient` (
  `id_membre` int(11) NOT NULL REFERENCES members(id),
  `id_association` int(11) NOT NULL REFERENCES association(id),
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  primary key(id_membre, id_association)
);
CREATE TABLE `event` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_association` int(11) NOT NULL REFERENCES association(id),
  `id_membre` int(11) NOT NULL REFERENCES members(id)
);
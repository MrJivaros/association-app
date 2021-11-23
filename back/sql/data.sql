CREATE TABLE `Membres` (
  `Nom` text NOT NULL,
  `Prenoms` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` text NOT NULL,
  `Adresse` text NOT NULL,
  `Membre CA` text NOT NULL,
  `E-mail` text NOT NULL,
  `PassWord` text NOT NULL,
  `Privilège` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
COMMIT;
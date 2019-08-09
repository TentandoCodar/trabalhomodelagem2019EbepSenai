CREATE TABLE IF NOT EXISTS `Alexandria`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(85) NOT NULL,
  `user` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `user_UNIQUE` (`user` ASC))
ENGINE = InnoDB
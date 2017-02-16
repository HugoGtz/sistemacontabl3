---------------------------------- db.chat-------------------------------------


-------------------------------------------------------
-- Table `contable`.`chat`
-------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `contable`.`chat` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id`) )
  
  
-------------------------------------------------------
-- Table `contable`.`chat_user`
-------------------------------------------------------  
CREATE  TABLE IF NOT EXISTS `contable`.`chat_user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `handle` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
  
  
-------------------------------------------------------
-- Table `contable`.`chat_line`
-------------------------------------------------------  
CREATE  TABLE IF NOT EXISTS `contable`.`chat_line` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `chat_id` INT UNSIGNED NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  `line_text` TEXT NOT NULL ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_chat_line_chat` (`chat_id` ASC) ,
  INDEX `fk_chat_line_chat_user1` (`user_id` ASC) ,
  CONSTRAINT `fk_chat_line_chat`
  FOREIGN KEY (`chat_id` )
  REFERENCES `contable`.`chat` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT `fk_chat_line_chat_user1`
  FOREIGN KEY (`user_id` )
  REFERENCES `contable`.`chat_user` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)

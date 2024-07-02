CREATE TABLE `test`.`stores` (
    `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
    `name` VARCHAR(100) NOT NULL COMMENT '店家名字',
    `mobile` VARCHAR(100) NOT NULL COMMENT '電話',
    `price` INT(10) NOT NULL COMMENT '資本額',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;



INSERT INTO
    `stores` (`id`, `name`, `mobile`, `price`)
VALUES
    (NULL, '台北店', '0911-111-111', 10000),
    (NULL, '台中店', '0922-222-222', 50000),
    (NULL, '高雄店', '0933-333-333', 100000);
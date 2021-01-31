USE mydb;

CREATE TABLE IF NOT EXISTS test_tbl (
       id int not null AUTO_INCREMENT PRIMARY KEY,
       name varchar(12) NOT NULL
     ) DEFAULT CHARACTER SET= utf8mb4;


INSERT INTO test_tbl (id, name) VALUES (1, "太郎");
INSERT INTO test_tbl (id, name) VALUES (2, "次郎");
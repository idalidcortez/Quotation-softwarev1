
/*! How to make this proyect */

--database_name: `quote`

/*! How to create tableS for this proyect */
 
CREATE TABLE `products` (
  `p_id` int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `p_name` varchar(50) NOT NULL,
  `p_brand` varchar(50) NOT NULL,
  `p_description` varchar(150) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  CONSTRAINT chk_positive CHECK (p_price >= 0)
);

CREATE TABLE `clients` (
  `c_id` int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `c_name` varchar(35) NOT NULL,
  `c_last_name` varchar(55) NOT NULL,
  `c_phone_number` varchar(20) NOT NULL,
  `c_email` varchar(255) NOT NULL
);

CREATE TABLE `salespeople` (
  `sp_id` int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `sp_name` varchar(35) NOT NULL,
  `sp_last_name` varchar(55) NOT NULL
);

CREATE TABLE `sales` (
  `s_date` date NOT NULL,
  `s_id` int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `ref_p_id` int,
  `quantity` int NOT NULL,
  `ref_c_id` int,
  `ref_sp_id` INT,
  FOREIGN KEY (ref_p_id) REFERENCES products(p_id),
  FOREIGN KEY (ref_c_id) REFERENCES clients(c_id),
  FOREIGN KEY (ref_sp_id) REFERENCES salespeople(sp_id)
);


--Add content to said table, in order to register students and their grades accordingly. 

INSERT INTO `products` (`p_name`, `p_brand`,`p_description`, `p_price`) VALUES
('After Midnight', 'Manic Panic', 'Deep blue hair dye with green undertones, cruelty-free and vegan.', '250'),
('Sirens song', 'Manic Panic', 'Neon blue-green hair dye, cruelty-free and vegan.', '230'), 
('Sirens song', 'Manic Panic', 'Neon blue-green hair dye, cruelty-free and vegan.', '250' ), 
('Vampires kiss', 'Manic Panic', 'Medium red hair dye with bright pink undertones, cruelty-free and vegan.', '250'), 
('Cotton Candy', 'Manic Panic', 'Sweet bright pink hair dye, cruelty-free and vegan.', '220' ), 
('Venus envy', 'Manic Panic', 'Dark, blue-based, green hair dye, cruelty-free and vegan.', '250' ),
('Lie Lock', 'Manic Panic', 'Cool, medium indigo purple-y blue hair dye, cruelty-free and vegan.', '260' ),
('Sunflower', 'Manic Panic', 'Warm, summer yellow hair dye, cruelty-free and vegan.', '255' );

INSERT INTO `clients` (`c_name`, `c_last_name`,`c_phone_number`, `c_email`) VALUES
('Rafael', 'Peralta Hernandez', '624 159 8452', 'rafaelperalta@gmail.com'),
('Damian', 'Rivera Rebolledo', '624 185 2586', 'damianrivera@gmail.com'),
('Juan Pablo', 'Gudiño Ramos', '624 958 1468', 'juanpablogr@gmail.com'),
('Daily Alexandra', 'Acosta Montoya', '624 181 7486', 'acostalexandray@gmail.com'),
('Valentina', 'Bautista Borrey', '624 963 1488', 'valentinaborrey@gmail.com'),
('Fernanda', 'Berber Montaño', '624 147 8444', 'fernandaberber@gmail.com'),
('Yulissa', 'Rosas Gonzales', '624 336 9779', 'yulissarosas@gmail.com');

INSERT INTO `salespeople` (`sp_name`,`sp_last_name`) VALUES
('Fallon', 'Carrington'),
('Caitlyn', 'Kiramman'),
('Steve', 'Jobs'),
('Elon', 'Musk'),
('Adam', 'Smith'),
('Seth', 'Godin'),
('Carlos', 'Cuauhctémoc'),
('Chris', 'Colfer');

INSERT INTO sales (s_date, ref_p_id, quantity, ref_c_id, ref_sp_id)
VALUES ('2023-07-04', 17, 8, 1, 3),  ('2023-06-10', 19, 3, 2, 1),  ('2023-06-11', 20, 6, 3, 1), 
 ('2023-06-15', 18, 2, 3, 2),  ('2023-06-20', 21, 4, 2, 3),  ('2023-06-2', 22, 3, 1, 2);



--Alterations in table for calculated columns

ALTER TABLE sales
ADD COLUMN subtotal DECIMAL(12,2);

UPDATE sales 
JOIN products ON ref_p_id = p_id
SET subtotal = quantity * p_price;

ALTER TABLE sales
ADD COLUMN `iva` decimal(12,2) AS (subtotal*0.16);

ALTER TABLE sales
ADD COLUMN `total` decimal(12,2) AS (subtotal+iva);


---useless code i haven't been able to make useful (it has potential). 

CREATE TABLE sales (
  s_date date NOT NULL,
  s_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  ref_p_id int,
  quantity int NOT NULL,
  ref_c_id int,
  ref_sp_id INT,
  subtotal decimal(12,2) AS (quantity * (SELECT p_price FROM products WHERE p_id = ref_p_id)),
  FOREIGN KEY (ref_p_id) REFERENCES products(p_id),
  FOREIGN KEY (ref_c_id) REFERENCES clients(c_id),
  FOREIGN KEY (ref_sp_id) REFERENCES salespeople(sp_id)
);

CREATE TABLE `sales` (
  `s_date` date NOT NULL,
  `s_id` int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `ref_p_id` int,
  `quantity` int NOT NULL,
  `ref_c_id` int,
  `ref_sp_id` INT,
  FOREIGN KEY (ref_p_id) REFERENCES products(p_id),
  FOREIGN KEY (ref_c_id) REFERENCES clients(c_id),
  FOREIGN KEY (ref_sp_id) REFERENCES salespeople(sp_id)
);

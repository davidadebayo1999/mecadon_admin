
--  DROP DATABASE if EXISTS mecadongolfdb;
-- CREATE DATABASE mecadongolfdb;

-- use mecadongolfdb;


CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,    
    email VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL,
    usertype VARCHAR(250) NOT NULL,
    firstname VARCHAR(250) NOT NULL,
    lastname VARCHAR(250) NOT NULL,
    phone VARCHAR(250) NOT NULL,
    address VARCHAR(250),
    town VARCHAR(350),
    state VARCHAR(250),
    country VARCHAR(250),
    postalcode VARCHAR(250),
    active  TINYINT(1),
    created TIMESTAMP,
    modified DATETIME

);

-- INSERT INTO users (email,password,usertype,firstname,lastname,phone,active,created,modified) 
-- VALUES
-- ('admin@mail.com','12345','admin','ben','king','0804532356',1,NOW(),NOW());



CREATE TABLE main_categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoryname VARCHAR(250) NOT NULL,
    category_logo VARCHAR(500) NOT NULL,
  created TIMESTAMP,
    modified DATETIME
);




CREATE TABLE sub_categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoryname VARCHAR(250) NOT NULL,
    category_logo VARCHAR(500) NOT NULL,
    main_category_id INT NOT NULL,
    FOREIGN KEY main_categories_key (main_category_id) REFERENCES main_categories(id),
  created TIMESTAMP,
    modified DATETIME

);


CREATE TABLE products(
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(250) NOT NULL,
     price DECIMAL(20,2) NOT NULL,
     quantity INTEGER NOT NULL,  
     sub_category_id INT NOT NULL,
     rating INTEGER ,
     FOREIGN KEY sub_categories_key (sub_category_id) REFERENCES sub_categories(id),
    created TIMESTAMP,
    modified DATETIME
      
);

CREATE TABLE dashboards(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250) NOT NULL
);


CREATE TABLE images(
     id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(250) NOT NULL,
      size VARCHAR(250),
      dir VARCHAR(250),
      type VARCHAR(250),
     created TIMESTAMP,
    modified DATETIME
);


CREATE TABLE products_images(
    product_id INT NOT NULL,
    image_id INT NOT NULL,
    PRIMARY KEY(product_id,image_id),
    FOREIGN KEY product_id_key(product_id)  REFERENCES products(id),
    FOREIGN KEY images_id_key(image_id)  REFERENCES images(id)
);



CREATE TABLE orders(
     id INT AUTO_INCREMENT PRIMARY KEY,
     user_id INT NOT NULL,
     status VARCHAR(250),
      FOREIGN KEY user_id_key399(user_id)  REFERENCES users(id),
     transaction_date DATETIME
);

CREATE TABLE order_items(
      id INT AUTO_INCREMENT PRIMARY KEY,
      product_id INT NOT NULL,
      order_id INT NOT NULL,
      quantity INT  NOT NULL,
    FOREIGN KEY product_id_key200(product_id)  REFERENCES products(id),
    FOREIGN KEY order_id_key100(order_id)  REFERENCES orders(id)
);

CREATE TABLE  hands (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL
);

CREATE TABLE products_hands(
    product_id INT NOT NULL,
    hand_id INT NOT NULL,
    PRIMARY KEY(product_id,hand_id),
    FOREIGN KEY product_id_key300(product_id)  REFERENCES products(id),
    FOREIGN KEY hand_id_key300(hand_id)  REFERENCES hands(id)
);

CREATE TABLE lengths (
   id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(250) NOT NULL
) ;

CREATE TABLE products_lengths(
    product_id INT NOT NULL,
    length_id INT NOT NULL,
    PRIMARY KEY(product_id,length_id),
    FOREIGN KEY product_id_key400(product_id)  REFERENCES products(id),
    FOREIGN KEY length_id_key400(length_id)  REFERENCES lengths(id)
);

CREATE TABLE sizes (
   id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(250) NOT NULL
);
CREATE TABLE products_sizes(
    product_id INT NOT NULL,
    size_id INT NOT NULL,
    PRIMARY KEY(product_id,size_id),
    FOREIGN KEY product_id_key500(product_id)  REFERENCES products(id),
    FOREIGN KEY size_id_key500(size_id)  REFERENCES sizes(id)
);

CREATE TABLE brands (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(250) NOT NULL
);
CREATE TABLE products_brands(
    product_id INT NOT NULL,
    brand_id INT NOT NULL,
    PRIMARY KEY(product_id,brand_id),
    FOREIGN KEY product_id_key600(product_id)  REFERENCES products(id),
    FOREIGN KEY brand_id600(brand_id)  REFERENCES brands(id)
);

CREATE TABLE colors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(250) NOT NULL
);
CREATE TABLE products_colors(
    product_id INT NOT NULL,
    color_id INT NOT NULL,
    PRIMARY KEY(product_id,color_id),
    FOREIGN KEY product_id_key700(product_id)  REFERENCES products(id),
    FOREIGN KEY color_id_key700(color_id)  REFERENCES colors(id)
);






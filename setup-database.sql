CREATE TABLE users (
  id varchar(7) NOT NULL ,
  username VARCHAR(20) NOT NULL,
  email VARCHAR(20) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users VALUES ('1234567','admin','admin@email.com','21232F297A57A5A743894A0E4A801FC3');

CREATE TABLE papers (
  code varchar(7),
  name varchar(50) NOT NULL,
  PRIMARY KEY (code)
);

INSERT INTO papers VALUES ('COSC326','Effective Programming');
INSERT INTO papers VALUES ('COSC349','Cloud Computing Architecture');


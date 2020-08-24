CREATE TABLE users (
  email VARCHAR(20) NOT NULL,
  password VARCHAR(30) NOT NULL,
  PRIMARY KEY (email)
);

INSERT INTO users VALUES ('admin','admin');

CREATE TABLE papers (
  code varchar(7),
  name varchar(50) NOT NULL,
  PRIMARY KEY (code)
);

INSERT INTO papers VALUES ('COSC326','Effective Programming');
INSERT INTO papers VALUES ('COSC349','Cloud Computing Architecture');


CREATE TABLE users (
  user_id VARCHAR(7) NOT NULL,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(30) NOT NULL,
  PRIMARY KEY (user_id)
);

INSERT INTO users VALUES ('1234567','admin','admin');

CREATE TABLE papers (
  code varchar(7),
  name varchar(50) NOT NULL,
  PRIMARY KEY (code)
);

INSERT INTO papers VALUES ('COSC326','Effective Programming');
INSERT INTO papers VALUES ('COSC349','Cloud Computing Architecture');


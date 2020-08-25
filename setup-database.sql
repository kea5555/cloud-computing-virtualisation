CREATE TABLE users (
  id varchar(7) NOT NULL ,
  username VARCHAR(20) NOT NULL,
  email VARCHAR(20) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users VALUES ('1234567','admin','admin@email.com','21232F297A57A5A743894A0E4A801FC3');

CREATE TABLE newsletters (
  newsletter_id varchar(7) NOT NULL,
  news_name varchar(50) NOT NULL,
  topic varchar(100) NOT NULL,
  catgory varchar(30) NOT NULL,
  PRIMARY KEY (newsletter_id)
);

INSERT INTO newsletters VALUES ("54909", "local news", "Keep up to date with whats going on in the area", "news");

CREATE TABLE subscribers (
  subscribers_id varchar(7) NOT NULL,
  sub_name varchar(50) NOT NULL,
  sub_email VARCHAR(30) NOT NULL,
  newsletter_id varchar(7) NOT NULL,
  PRIMARY KEY (subscribers_id),
  FOREIGN KEY (newsletter_id) REFERENCES newsletters(newsletter_id)
);

INSERT INTO subscribers VALUES ('902375','Ryan','ryan@email.com','54909');
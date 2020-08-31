CREATE TABLE users (
  id varchar(11) NOT NULL ,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users VALUES ('1234567','admin','admin@email.com','21232F297A57A5A743894A0E4A801FC3');

<<<<<<< HEAD
-- CREATE TABLE newsletters (
--   newsletter_id varchar(11) NOT NULL,
--   news_name varchar(100) NOT NULL,
--   topic varchar(150) NOT NULL,
--   catgory varchar(50) NOT NULL,
--   PRIMARY KEY (newsletter_id)
-- );
=======
CREATE TABLE newsletters (
  newsletter_id varchar(11) NOT NULL,
  news_name varchar(100) NOT NULL,
  topic varchar(150) NOT NULL,
  catgory varchar(50) NOT NULL,
  PRIMARY KEY (newsletter_id)
);
>>>>>>> b801eb9ea9f4541a13eec4e0c3da722767a5acdd

-- INSERT INTO newsletters VALUES ("54909", "local news", "Keep up to date with whats going on in the area", "news");

CREATE TABLE subscribers (
  subscribers_id varchar(11) NOT NULL,
  sub_name varchar(50) NOT NULL,
  sub_email VARCHAR(50) NOT NULL,
<<<<<<< HEAD
  newsletter varchar(50) NOT NULL,
  PRIMARY KEY (subscribers_id)
);

INSERT INTO subscribers VALUES ('902375','Ryan','ryan@email.com','Coding101');
INSERT INTO subscribers VALUES ('345785','Kayla','maim.montgomery@gmail.com','Apple');
=======
  newsletter_id varchar(11) NOT NULL,
  PRIMARY KEY (subscribers_id),
  FOREIGN KEY (newsletter_id) REFERENCES newsletters(newsletter_id)
);

INSERT INTO subscribers VALUES ('902375','Ryan','ryan@email.com','54909');
INSERT INTO subscribers VALUES ('345785','Kayla','maim.montgomery@gmail.com','456564');
>>>>>>> b801eb9ea9f4541a13eec4e0c3da722767a5acdd

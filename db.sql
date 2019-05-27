CREATE DATABASE Scriptures;

CREATE TABLE scriptures_table (
id serial,
book varchar(80) NOT NULL,
chapter numeric(5) NOT NULL,
verse numeric(5) NOT NULL,
content varchar(255) NOT NULL,
PRIMARY KEY(id)
);


INSERT INTO scriptures_table (book, chapter, verse, content)
VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'), ('D&C', '88', '49', 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'), ('D&C', '93', '28', 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'), ('Mosiah', '16', '9', 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');


SELECT * FROM scriptures_table;


CREATE TABLE topic (
id serial,
name varchar(255) NOT NULL,
PRIMARY KEY(id)
);

INSERT INTO topic (name)
VALUES  ('Faith'), 
	('Sacrifice'), 
	('Charity');

SELECT * FROM topic;

CREATE TABLE link_topic_to_scripture ( 
id serial,
topicID serial REFERENCES topic(id),
scriptureID serial REFERENCES scriptures_table(id)
);

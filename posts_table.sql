CREATE TABLE posts
(
post_id MEDIUMINT(6) UNSIGNED AUTO_INCREMENT,
uname VARCHAR(30) NOT NULL,
Content VARCHAR(1500) NOT NULL,
post_date DATETIME,
fname VARCHAR(50) NOT NULL,
PRIMARY KEY (post_id),
FOREIGN KEY (uname) REFERENCES fusers(uname),
FOREIGN KEY (fname) REFERENCES forums(fname)
);
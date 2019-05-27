CREATE TABLE posts(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);

insert into posts (subject,content,date) VALUES ('Nepal is great','Hello World! Nepal is amazing!','2019-9-5 3:47:01');

	UPDATE posts 
set subject = 'this is a test',content = 'nepal'
where id ='1';

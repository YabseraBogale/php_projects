create table GitAction(

  id int not null PRIMARY KEY,
  filePath varchar(140) not null,
  gitIgnore char(1) not null

);

-- insertion to table 

INSERT INTO GitAction(
  id,filePath,gitIgnore
) VALUES ( ?,?,? )


create table action(

  id int not null primary key,
  message varchar(140) not null,
  addGitIgnore char(1),
  FOREIGN KEY(id) REFERENCES GitAction(id)

);


-- insertion to table


INSERT INTO action
(
  id,message,addGitIgnore
) VALUES (?,?,?)

create table gitIgnoreFile(
  
  fileName varchar(20) not null,
  fileNamePath varchar(140) not null,
  id int not null primary key,
  FOREIGN KEY(id) REFERENCES GitAction(id)

);

-- inertion to table 

INSERT INTO gitIgnoreFile(
  fileNamePath,id,fileName
) VALUES ( ?,?,?)

CREATE TABLE gitIgnoreFolder(
  
  folderPath varchar(140) not null,
  id int not null,
  FOREIGN KEY(id) REFERENCES GitAction(id)

);

--insertion to table

INSERT INTO gitIgnoreFolder(
  folderPath,id
) VALUES ( ?,? )






















# BD
```sql

CREATE DATABASE laravel;

CREATE TABLE users(
  id int not null auto_increment,
  name varchar(255) not null,
  email varchar(255) not null,
  login varchar(255) not null,
  password varchar(255) not null,
  primary key (id)
);

CREATE TABLE groups_auth(
  id int not null auto_increment,
  name varchar(255) not null,
  primary key(id)
);

```
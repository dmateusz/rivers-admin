drop schema if exists sf2rivers;
create schema sf2rivers default character set utf8 collate utf8_polish_ci;
grant all on sf2rivers.* to editor@localhost identified by 'secretPASSWORD';
flush privileges;
-- Povoamento do Banco com dados ficticios de teste

-- Usuário
insert into user (user_cod,user_name) values
	(null, 'Carlos Eduardo Cuzik');

insert into archive (archive_cod,archive_name,user_cod) values
	(null,"teste.cpp",1),
	(null,"menor.py",1);
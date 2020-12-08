CREATE TABLE usuario (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR (255) NOT NULL,
senha VARCHAR (255) NOT NULL
);

INSERT INTO desweb.usuario (email, senha) VALUES ('adir.junior@unidavi.edu.br ', 12345);
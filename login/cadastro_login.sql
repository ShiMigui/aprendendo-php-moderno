DROP SCHEMA IF EXISTS cadastro_login;
CREATE SCHEMA cadastro_login;
USE cadastro_login;

CREATE TABLE usuario(
    nm_email VARCHAR(255),
    nm_login VARCHAR(100) NOT NULL,
    nm_usuario VARCHAR(255) NOT NULL,
    nm_senha VARCHAR(255) NOT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY (nm_email),
    CONSTRAINT un_login_usuario UNIQUE (nm_login)
);

DELIMITER $
CREATE PROCEDURE novo_usuario(pnm_email VARCHAR(255), pnm_login VARCHAR(100), pnm_usuario VARCHAR(255), pnm_senha VARCHAR(255))
BEGIN
    IF (SELECT count(nm_usuario) FROM usuario WHERE nm_email = pnm_email) > 0 THEN 
        SELECT false AS situacao, 'ERR_EMAIL' AS feedback;
    ELSEIF (SELECT count(nm_usuario) FROM usuario WHERE nm_login = pnm_login) > 0 THEN 
        SELECT false AS situacao, 'ERR_LOGIN' AS feedback;
    ELSE 
        INSERT INTO usuario (nm_email, nm_login, nm_usuario, nm_senha) VALUES (pnm_email, pnm_login, pnm_usuario, pnm_senha);
        SELECT true AS situacao;
    END IF;
END$

CREATE PROCEDURE selecionar_usuario(pnm_login VARCHAR(255))
BEGIN
	SELECT nm_usuario, nm_login, nm_email, nm_senha FROM usuario WHERE (nm_login = pnm_login OR nm_email = pnm_login);
END$
DELIMITER ;

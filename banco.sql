CREATE SCHEMA FBD;
USE FBD;

CREATE TABLE Jogador(
cpf CHAR(11) NOT NULL,
nome VARCHAR(50));

CREATE TABLE Joga(
cpf_jogador CHAR(11) NOT NULL,
nome VARCHAR(50),
posicao VARCHAR(20),
data_inicio DATE,
data_fim DATE);

CREATE TABLE Time(
nome VARCHAR(50) NOT NULL,
tipo VARCHAR(20),
cod_uniforme CHAR(10));

CREATE TABLE Partida(
nome_time1 VARCHAR(50) NOT NULL,
nome_time2 VARCHAR(50) NOT NULL,
placar VARCHAR(10),
local VARCHAR(20),
data date,
rg_arbitro CHAR(9));

CREATE TABLE Arbitro_Principal(
rg_arbitro CHAR(9) NOT NULL,
nome VARCHAR(50),
tipo_habilitacao VARCHAR(10));

CREATE TABLE Time_Amador(
nome VARCHAR(50) NOT NULL,
cidade_origem VARCHAR(50),
ano_criacao CHAR(4));

CREATE TABLE Time_Profissional(
nome VARCHAR(50) NOT NULL,
cod_diretor CHAR(10));

CREATE TABLE Diretor(
cod_diretor CHAR(10) NOT NULL,
nome VARCHAR(25),
sobrenome VARCHAR(25));

CREATE TABLE Patrocinio(
cod_patrocinador CHAR(10) NOT NULL,
nome VARCHAR(50));

CREATE TABLE Patrocinador(
cod_patrocinador CHAR(10) NOT NULL,
nome_patrocinador VARCHAR(50));

CREATE TABLE Uniforme(
cod_uniforme CHAR(10) NOT NULL,
descricao VARCHAR(255),
cod_cor CHAR(10),
tipo_titular_reserva VARCHAR(20),
nome VARCHAR(50));

CREATE TABLE Cor(
cod_cor CHAR(10) NOT NULL,
tonalidades_cores VARCHAR(20),
descricao VARCHAR(255));

ALTER TABLE Jogador ADD PRIMARY KEY(cpf);

ALTER TABLE Joga ADD PRIMARY KEY(cpf_jogador, nome);
ALTER TABLE Joga ADD FOREIGN KEY(cpf_jogador) REFERENCES Jogador(cpf);
ALTER TABLE Joga ADD FOREIGN KEY(nome) REFERENCES Time(nome);

ALTER TABLE Time ADD PRIMARY KEY(nome);
ALTER TABLE Time ADD FOREIGN KEY(cod_uniforme) REFERENCES Uniforme(cod_uniforme);

ALTER TABLE Partida ADD PRIMARY KEY(nome_time1, nome_time2);
ALTER TABLE Partida ADD FOREIGN KEY(nome_time1) REFERENCES Time(nome);
ALTER TABLE Partida ADD FOREIGN KEY(nome_time2) REFERENCES Time(nome);
ALTER TABLE Partida ADD FOREIGN KEY(rg_arbitro) REFERENCES Arbitro_Principal(rg_arbitro);

ALTER TABLE Arbitro_Principal ADD PRIMARY KEY(rg_arbitro);

ALTER TABLE Time_Amador ADD PRIMARY KEY(nome);
ALTER TABLE Time_Amador ADD FOREIGN KEY(nome) REFERENCES Time(nome);

ALTER TABLE Time_Profissional ADD PRIMARY KEY(nome);
ALTER TABLE Time_Profissional ADD FOREIGN KEY(nome) REFERENCES Time(nome);
ALTER TABLE Time_Profissional ADD FOREIGN KEY(cod_diretor) REFERENCES Diretor(cod_diretor);

ALTER TABLE Diretor ADD PRIMARY KEY(cod_diretor);

ALTER TABLE Patrocinio ADD PRIMARY KEY(cod_patrocinador, nome);
ALTER TABLE Patrocinio ADD FOREIGN KEY(nome) REFERENCES Time(nome);
ALTER TABLE Patrocinio ADD FOREIGN KEY(cod_patrocinador) REFERENCES Patrocinador(cod_patrocinador);

ALTER TABLE Patrocinador ADD PRIMARY KEY(cod_patrocinador);

ALTER TABLE Uniforme ADD PRIMARY KEY(cod_uniforme);
ALTER TABLE Uniforme ADD FOREIGN KEY(cod_cor) REFERENCES Cor(cod_cor);
ALTER TABLE Uniforme ADD FOREIGN KEY(nome) REFERENCES Time(nome);

ALTER TABLE Cor ADD PRIMARY KEY(cod_cor);
CREATE SCHEMA FBD;
USE FBD;

CREATE TABLE jogador(
  cpf CHAR(11) NOT NULL,
  nome VARCHAR(50));

CREATE TABLE joga(
  cpf_jogador CHAR(11) NOT NULL,
  nome VARCHAR(50),
  posicao VARCHAR(20),
  data_inicio DATE,
  data_fim DATE);

CREATE TABLE time(
  nome VARCHAR(50) NOT NULL,
  tipo VARCHAR(20));

CREATE TABLE partida(
  nome_time_casa VARCHAR(50) NOT NULL,
  nome_time_fora VARCHAR(50) NOT NULL,
  placar VARCHAR(10),
  local VARCHAR(20),
  data date,
  rg_arbitro CHAR(9));

CREATE TABLE arbitro_principal(
  rg_arbitro CHAR(9) NOT NULL,
  nome VARCHAR(50),
  tipo_habilitacao VARCHAR(10));

CREATE TABLE time_amador(
  nome VARCHAR(50) NOT NULL,
  cidade_origem VARCHAR(50),
  ano_criacao CHAR(4));

CREATE TABLE time_profissional(
  nome VARCHAR(50) NOT NULL,
  cod_diretor CHAR(10));

CREATE TABLE diretor(
  cod_diretor CHAR(10) NOT NULL,
  nome VARCHAR(25),
  sobrenome VARCHAR(25));

CREATE TABLE patrocinio(
  cod_patrocinador CHAR(10) NOT NULL,
  nome VARCHAR(50));

CREATE TABLE patrocinador(
  cod_patrocinador CHAR(10) NOT NULL,
  nome_patrocinador VARCHAR(50));

CREATE TABLE uniforme(
  cod_uniforme CHAR(10) NOT NULL,
  descricao VARCHAR(255),
  cod_cor CHAR(10),
  tipo_titular_reserva VARCHAR(20),
  nome VARCHAR(50));

CREATE TABLE cor(
  cod_cor CHAR(10) NOT NULL,
  tonalidades_cores VARCHAR(20),
  descricao VARCHAR(255));

ALTER TABLE jogador ADD PRIMARY KEY(cpf);
ALTER TABLE joga ADD PRIMARY KEY(cpf_jogador, nome);
ALTER TABLE time ADD PRIMARY KEY(nome);
ALTER TABLE partida ADD PRIMARY KEY(nome_time_casa, nome_time_fora);
ALTER TABLE arbitro_principal ADD PRIMARY KEY(rg_arbitro);
ALTER TABLE time_amador ADD PRIMARY KEY(nome);
ALTER TABLE time_profissional ADD PRIMARY KEY(nome);
ALTER TABLE diretor ADD PRIMARY KEY(cod_diretor);
ALTER TABLE patrocinio ADD PRIMARY KEY(cod_patrocinador, nome);
ALTER TABLE patrocinador ADD PRIMARY KEY(cod_patrocinador);
ALTER TABLE uniforme ADD PRIMARY KEY(cod_uniforme);
ALTER TABLE cor ADD PRIMARY KEY(cod_cor);

ALTER TABLE joga ADD FOREIGN KEY(cpf_jogador) REFERENCES jogador(cpf) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE joga ADD FOREIGN KEY(nome) REFERENCES time (nome) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE partida ADD FOREIGN KEY(nome_time_casa) REFERENCES time(nome) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE partida ADD FOREIGN KEY(nome_time_fora) REFERENCES time(nome) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE partida ADD FOREIGN KEY(rg_arbitro) REFERENCES arbitro_principal (rg_arbitro) ON DELETE SET NULL ON UPDATE CASCADE;
ALTER TABLE time_amador ADD FOREIGN KEY(nome) REFERENCES time (nome) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE time_profissional ADD FOREIGN KEY(nome) REFERENCES time (nome) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE time_profissional ADD FOREIGN KEY(cod_diretor) REFERENCES diretor (cod_diretor) ON DELETE SET NULL ON UPDATE CASCADE;
ALTER TABLE patrocinio ADD FOREIGN KEY(nome) REFERENCES time (nome) ON DELETE CASCADE;
ALTER TABLE patrocinio ADD FOREIGN KEY(cod_patrocinador) REFERENCES patrocinador (cod_patrocinador) ON DELETE CASCADE;
ALTER TABLE uniforme ADD FOREIGN KEY(cod_cor) REFERENCES cor(cod_cor) ON DELETE SET NULL ON UPDATE CASCADE;
ALTER TABLE uniforme ADD FOREIGN KEY(nome) REFERENCES time (nome) ON DELETE CASCADE ON UPDATE CASCADE;
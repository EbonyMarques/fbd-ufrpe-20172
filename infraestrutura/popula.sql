INSERT INTO cor VALUES("ff0000", "vermelho vivo", "rgb(255, 0, 0)");
INSERT INTO cor VALUES("ff3d3d", "vermelho claro", "rgb(255, 61, 61)");
INSERT INTO cor VALUES("02fff2", "azul claro", "rgb(2, 255, 242)");
INSERT INTO cor VALUES("140538", "azul escuro", "rgb(20, 5, 56)");
INSERT INTO cor VALUES("ffffff", "branco", "rgb(255, 255, 255)");
INSERT INTO cor VALUES("000000", "preto", "rgb(0, 0, 0)");

INSERT INTO time VALUES("Santa Cruz Futebol Clube", "Profissional");
INSERT INTO time VALUES("Clube Náutico Capibaribe", "Profissional");
INSERT INTO time VALUES("Sport Club do Recife", "Profissional");
INSERT INTO time VALUES("Artilheiros de BSI", "Amador");

INSERT INTO time_amador VALUES("Artilheiros de BSI", "Recife", "2018");

INSERT INTO diretor VALUES("001","Nicollas","Bastos");
INSERT INTO diretor VALUES("002","Luciano","Trigueiro");
INSERT INTO diretor VALUES("003","Eric","Moritsuka");

INSERT INTO time_profissional VALUES("Santa Cruz Futebol Clube","001");
INSERT INTO time_profissional VALUES("Clube Náutico Capibaribe","003");
INSERT INTO time_profissional VALUES("Sport Club do Recife","002");

INSERT INTO jogador VALUES("11111111111","Carlinhos Bala");
INSERT INTO jogador VALUES("22222222222","Ebony Marques");
INSERT INTO jogador VALUES("33333333333","Neymar jr.");
INSERT INTO jogador VALUES("44444444444","Gabriel Lourenço");
INSERT INTO jogador VALUES("55555555555","Heitor Augusto");
INSERT INTO jogador VALUES("66666666666","Ronaldinho Gaúcho");
INSERT INTO jogador VALUES("77777777777","Grafite");
INSERT INTO jogador VALUES("88888888888","Caça Rato");
INSERT INTO jogador VALUES("99999999999","Roberto Carlos");
INSERT INTO jogador VALUES("00000000000","Lionel Messi");
INSERT INTO jogador VALUES("12121212121","Cristiano Ronaldo");
INSERT INTO jogador VALUES("21212121121","Eden Hazard");

INSERT INTO patrocinador VALUES("Heineken", "Heineken International");
INSERT INTO patrocinador VALUES("Lays", "Lays");
INSERT INTO patrocinador VALUES("Audi", "Audi Brasil");
INSERT INTO patrocinador VALUES("Santander", "Santander");

INSERT INTO patrocinio VALUES("Audi", "Santa Cruz Futebol Clube");
INSERT INTO patrocinio VALUES("Lays", "Santa Cruz Futebol Clube");
INSERT INTO patrocinio VALUES("Santander", "Sport Club do Recife");
INSERT INTO patrocinio VALUES("Heineken", "Artilheiros de BSI");

INSERT INTO arbitro_principal VALUES("123456789","João Vinicius","A");
INSERT INTO arbitro_principal VALUES("891234556","Maria Joana","AB");
INSERT INTO arbitro_principal VALUES("128577232","Renata Vasconcelos","B");
INSERT INTO arbitro_principal VALUES("665345438","Ricardo Gomes","C");

INSERT INTO uniforme VALUES("santa1", "Uniforme titular do Santa Cruz", "ff0000", "titular", "Santa Cruz Futebol Clube");
INSERT INTO uniforme VALUES("santa2", "Uniforme reserva do Santa Cruz", "ffffff", "reserva", "Santa Cruz Futebol Clube");
INSERT INTO uniforme VALUES("nautico1", "Uniforme titular do Náutico", "ff3d3d", "titular", "Clube Náutico Capibaribe");
INSERT INTO uniforme VALUES("nautico2", "Uniforme reserva do Náutico", "ff3d3d", "reserva", "Clube Náutico Capibaribe");
INSERT INTO uniforme VALUES("sport1", "Uniforme titular do Sport", "000000", "titular", "Sport Club do Recife");
INSERT INTO uniforme VALUES("sport2", "Uniforme reserva do Sport", "000000", "reserva", "Sport Club do Recife");
INSERT INTO uniforme VALUES("bsi1", "Uniforme titular dos Artilheiros de BSI", "ff0000", "titular", "Artilheiros de BSI");
INSERT INTO uniforme VALUES("bsi2", "Uniforme reserva dos Artilheiros de BSI", "ff0000", "titular", "Artilheiros de BSI");

INSERT INTO partida VALUES("Santa Cruz Futebol Clube", "Sport Club do Recife", "1x1", "Estádio do Arruda", "180212", "891234556");
INSERT INTO partida VALUES("Clube Náutico Capibaribe", "Artilheiros de BSI", "0x2", "Estádio dos Aflitos", "180212", "128577232");

INSERT INTO joga VALUES("77777777777","Santa Cruz Futebol Clube","Atacante","2017-01-01","2018-01-01");
INSERT INTO joga VALUES("88888888888","Santa Cruz Futebol Clube","Goleiro","2017-06-03","2018-06-03");
INSERT INTO joga VALUES("21212121121","Santa Cruz Futebol Clube","Zagueiro","2017-03-26","2018-03-26");
INSERT INTO joga VALUES("11111111111","Sport Club do Recife","Atacante","2018-01-01","2019-01-01");
INSERT INTO joga VALUES("66666666666","Sport Club do Recife","Goleiro","2018-02-28","2019-02-28");
INSERT INTO joga VALUES("33333333333","Sport Club do Recife","Zagueiro","2018-04-26","2019-04-26");
INSERT INTO joga VALUES("12121212121","Clube Náutico Capibaribe","Atacante","2017-11-17","2018-11-17");
INSERT INTO joga VALUES("00000000000","Clube Náutico Capibaribe","Goleiro","2017-09-7","2018-01-10");
INSERT INTO joga VALUES("99999999999","Clube Náutico Capibaribe","Zagueiro","2018-04-13","2018-12-25");
INSERT INTO joga VALUES("22222222222","Artilheiros de BSI","Atacante","2018-05-25","2019-10-31");
INSERT INTO joga VALUES("44444444444","Artilheiros de BSI","Goleiro","2018-09-30","2019-08-01");
INSERT INTO joga VALUES("55555555555","Artilheiros de BSI","Zagueiro","2018-03-12","2019-06-21");
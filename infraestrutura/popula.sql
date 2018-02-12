INSERT INTO cor VALUES("#ff0000", "vermelho vivo", "rgb(255, 0, 0)");
INSERT INTO cor VALUES("#ff3d3d", "vermelho claro", "rgb(255, 61, 61)");
INSERT INTO cor VALUES("#02fff2", "azul claro", "rgb(2, 255, 242)");
INSERT INTO cor VALUES("#140538", "azul escuro", "rgb(20, 5, 56)");
INSERT INTO cor VALUES("#ffffff", "branco", "rgb(255, 255, 255)");
INSERT INTO cor VALUES("#000000", "preto", "rgb(0, 0, 0)");

INSERT INTO uniforme VALUES("santa1", "Uniforme titular do Santa Cruz", "#ff0000", "titular", "titular_santa_cruz");
INSERT INTO uniforme VALUES("santa2", "Uniforme reserva do Santa Cruz", "#ffffff", "reserva", "reserva_santa_cruz");
INSERT INTO uniforme VALUES("nautico1", "Uniforme titular do Náutico", "#ff3d3d", "titular", "titular_nautico");
INSERT INTO uniforme VALUES("nautico2", "Uniforme reserva do Náutico", "#ff3d3d", "reserva", "reserva_nautico");
INSERT INTO uniforme VALUES("sport1", "Uniforme titular do Sport", "#000000", "titular", "titular_sport");
INSERT INTO uniforme VALUES("sport2", "Uniforme reserva do Sport", "#000000", "reserva", "reserva_sport");
INSERT INTO uniforme VALUES("bsi1", "Uniforme titular do IS Gunners", "#ff0000", "titular", "titular_artilheiros");
INSERT INTO uniforme VALUES("bsi2", "Uniforme reserva do IS Gunners", "#ff0000", "titular", "reserva_artilheiros");

INSERT INTO time VALUES("Santa Cruz Futebol Clube", "Profissional", "santa1");
INSERT INTO time VALUES("Clube Náutico Capibaribe", "Profissional", "nautico1");
INSERT INTO time VALUES("Sport Club do Recife", "Profissional", "sport1");
INSERT INTO time VALUES("Artilheiros de BSI", "Amador", "bsi1");

INSERT INTO patrocinador VALUES("Heineken", "Heineken International");
INSERT INTO patrocinador VALUES("Lays", "Lays");
INSERT INTO patrocinador VALUES("Audi", "Audi Brasil");
INSERT INTO patrocinador VALUES("Santander", "Santander");

INSERT INTO patrocinio VALUES("Audi", "Santa Cruz Futebol Clube");
INSERT INTO patrocinio VALUES("Lays", "Santa Cruz Futebol Clube");
INSERT INTO patrocinio VALUES("Santander", "Sport Club do Recife");
INSERT INTO patrocinio VALUES("Heineken", "Artilheiros de BSI");

INSERT INTO partida VALUES("Santa Cruz Futebol Clube", "Sport Club do Recife", "1x1", "Estádio do Arruda", "180212", "891234556");
INSERT INTO partida VALUES("Clube Náutico Capibaribe", "Artilheiros de BSI", "0x2", "Estádio dos Aflitos", "180212", "128577232");

INSERT INTO time_amador VALUES("Artilheiros de BSI", "Recife", "2018");
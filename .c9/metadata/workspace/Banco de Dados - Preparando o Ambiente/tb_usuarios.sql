{"filter":false,"title":"tb_usuarios.sql","tooltip":"/Banco de Dados - Preparando o Ambiente/tb_usuarios.sql","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":37},"action":"insert","lines":["CREATE TABLE tb_usuarios (","  idusuario int(11) NOT NULL AUTO_INCREMENT,","  deslogin varchar(64) NOT NULL,","  dessenha varchar(256) NOT NULL,","  dtcadastro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,","  PRIMARY KEY (idusuario)",") ENGINE=InnoDB DEFAULT CHARSET=utf8;"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":37},"end":{"row":6,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529786472090,"hash":"3feac31b83ce3a06258e0b9dbb8d071d0a0778f4"}
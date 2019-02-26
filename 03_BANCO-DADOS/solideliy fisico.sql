

drop database sodelivery;
create database sodelivery;
use  sodelivery;

CREATE TABLE duvidas(
  id_duvida integer PRIMARY KEY auto_increment,
  pergunta VARCHAR(100),
  resposta TEXT,
  extra TEXT
)

CREATE TABLE cidades (
id_cidade integer PRIMARY KEY auto_increment,
nome_cidade VARCHAR(100),
id_estado integer
);

CREATE TABLE estados (
id_estado integer PRIMARY KEY auto_increment,
nome_estado VARCHAR(100),
sigla_estads CHAR(2)
);


CREATE TABLE carroceria (
id_carroceria integer  PRIMARY KEY auto_increment,
desc_carroceria VARCHAR(100)
);

CREATE TABLE categoria (
id_categoria  integer  PRIMARY KEY auto_increment,
desc_categoria VARCHAR(100)
);

CREATE TABLE complemento_carga (
id_complemento_carga integer PRIMARY KEY auto_increment,
qtd_volume_uni integer,
peso_unitario_kg integer,
volume_unitario_m3 integer,
id_frete integer
);

CREATE TABLE veiculo_categoria (
id_veiculo_categoria integer PRIMARY KEY auto_increment,
desc_veiculo_categoria VARCHAR(100),
id_categoria integer,
FOREIGN KEY(id_categoria) REFERENCES categoria (id_categoria)
);

CREATE TABLE frete (
id_frete integer PRIMARY KEY auto_increment,
cidade_saida VARCHAR(100),
cidade_entrega VARCHAR(100),
uf_saida CHAR(2),
uf_entrega CHAR(2),
km_total text,
nome_produto VARCHAR(100),
complemento CHAR(3),
rastreador CHAR(3),
informacoes_frete text,
preco_frete real,
pedagio real,
id_carroceria integer,
id_forma_pagamento integer,
id_especie integer,
visualizações integer,
id_veiculo_categoria integer,
id_empresa integer,
data date,
FOREIGN KEY(id_carroceria) REFERENCES carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
);

CREATE TABLE forma_pagamento (
id_forma_pagamento integer PRIMARY KEY auto_increment,
desc_forma_pagamento VARCHAR(10)
);

CREATE TABLE especie (
id_especie integer PRIMARY KEY auto_increment,
desc_especie VARCHAR(100)
);

CREATE TABLE agregamento (
id_agregamento  integer PRIMARY KEY auto_increment,
rastreador CHAR(3),
quantidade_vagas integer,
qual_rastreador text,
telefone CHAR(11),
contato VARCHAR(80),
observacao text,
id_cidade integer,
id_veiculo_categoria integer,
id_carroceria integer,
FOREIGN KEY(id_cidade) REFERENCES cidades (id_cidade),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria),
FOREIGN KEY(id_carroceria) REFERENCES carroceria (id_carroceria)
);

CREATE TABLE gerenciamento_usuarios (
id_gerenciamento_usuarios integer PRIMARY KEY auto_increment,
nome VARCHAR(100),
email VARCHAR(60),
tipo_usuario VARCHAR(100),
Ultim_acesso datetime,
id_empresa integer
);

CREATE TABLE empresa_produto (
id_empresa_produto integer PRIMARY KEY auto_increment,
id_empresa integer,
id_produto integer
);

CREATE TABLE Ramo (
id_ramo integer PRIMARY KEY auto_increment,
desc_ramo VARCHAR(100)
);

CREATE TABLE produtos (
id_produto integer PRIMARY KEY auto_increment,
desc_produto VARCHAR(100)
);

CREATE TABLE empresa (
id_empresa integer PRIMARY KEY auto_increment,
razao_social VARCHAR(80),
cnpj VARCHAR(40),
email VARCHAR(40),
data_engresso_empresa date,
endereco VARCHAR(80),
bairro VARCHAR(100),
complemento VARCHAR(50),
nome_fantasia VARCHAR(100),
inscricao_estadual VARCHAR(100),
url_facebook_empresa text,
cep CHAR(8),
foto_empresa text,
site VARCHAR(200),
skype VARCHAR(100),
nextel VARCHAR(100),
fax VARCHAR(100),
url_facebook VARCHAR(100),
contato VARCHAR(100),
url_facebook2 VARCHAR(100),
contato2 VARCHAR(100),
url_facebook3 VARCHAR(100),
contato3 VARCHAR(100),
telefone_comercial CHAR(11),
contato_comercial VARCHAR(100),
celular CHAR(11),
operadora VARCHAR(40),
contato1 VARCHAR(40),
whatsapp CHAR(30),
E_mail_autenticacao VARCHAR(80),
senha_autenticacao CHAR(8),
id_cidade integer,
id_ramo integer,
FOREIGN KEY(id_cidade) REFERENCES cidades (id_cidade),
FOREIGN KEY(id_ramo) REFERENCES ramo (id_ramo)
);


CREATE TABLE marca (
id_marca integer PRIMARY KEY auto_increment,
desc_marca VARCHAR(100)
);

CREATE TABLE checkin (
id_checkin integer PRIMARY KEY auto_increment,
estado VARCHAR(80),
destino VARCHAR(100),
id_veiculo integer
);

CREATE TABLE veiculos (
id_veiculo integer PRIMARY KEY auto_increment,
nome_proprietario VARCHAR(100),
placa_veiculo VARCHAR(60),
endereco VARCHAR(100),
data_nascimento date,
email VARCHAR(50),
rastreador CHAR(3),
modelo VARCHAR(1000),
ano integer,
rntrc VARCHAR(60),
seguro CHAR(3),
cnh VARCHAR(20),
tipo VARCHAR(60),
permissionado CHAR(3),
senha VARCHAR(12),
id_marca integer,
id_cidade integer,
id_carroceria integer,
id_veiculo_categoria integer,
FOREIGN KEY(id_marca) REFERENCES marca (id_marca),
FOREIGN KEY(id_cidade) REFERENCES cidades (id_cidade),
FOREIGN KEY(id_carroceria) REFERENCES carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
telefone VARCHAR(100),
contato VARCHAR(100),
);


ALTER TABLE cidades ADD FOREIGN KEY(id_estado) REFERENCES estados (id_estado);
ALTER TABLE complemento_carga ADD FOREIGN KEY(id_frete) REFERENCES frete (id_frete);
ALTER TABLE frete ADD FOREIGN KEY(id_forma_pagamento) REFERENCES forma_pagamento (id_forma_pagamento);
ALTER TABLE frete ADD FOREIGN KEY(id_especie) REFERENCES especie (id_especie);
ALTER TABLE gerenciamento_usuarios ADD FOREIGN KEY(id_empresa) REFERENCES empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_empresa) REFERENCES empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_produto) REFERENCES produtos (id_produto);
ALTER TABLE checkin ADD FOREIGN KEY(id_veiculo) REFERENCES veiculos (id_veiculo);
ALTER TABLE frete ADD FOREIGN KEY(id_empresa) REFERENCES empresa (id_empresa);

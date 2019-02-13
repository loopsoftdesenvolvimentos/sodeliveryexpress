drop database sodelivery;
create database sodelivery;

CREATE TABLE Cidades (
id_cidade integer PRIMARY KEY auto_increment,
nome_cidade VARCHAR(100),
id_estado integer
);

CREATE TABLE Estados (
id_estado integer PRIMARY KEY auto_increment,
nome_estado VARCHAR(100),
sigla_estads CHAR(2)
);


CREATE TABLE Carroceria (
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

CREATE TABLE Frete (
id_frete integer PRIMARY KEY auto_increment,
Cidade_saida VARCHAR(100),
cidade_entrega VARCHAR(100),
nome_produto VARCHAR(100),
complemento CHAR(3),
informacoes_frete text,
preco_frete real,
id_carroceria integer,
id_forma_pagamento integer,
id_especie integer,
visualizações integer,
id_veiculo_categoria integer,
id_empresa integer,
data date,
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
);

CREATE TABLE forma_pagamento (
id_forma_pagamento integer PRIMARY KEY auto_increment,
desc_forma_pagamento VARCHAR(10)
);

CREATE TABLE Especie (
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
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria),
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria)
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

CREATE TABLE Empresa (
id_empresa integer PRIMARY KEY auto_increment,
razao_social VARCHAR(80),
cnpj VARCHAR(40),
endereco VARCHAR(80),
bairro VARCHAR(100),
complemento VARCHAR(50),
nome_fantasia VARCHAR(100),
cartão VARCHAR(100),
inscricao_estadual VARCHAR(100),
cep CHAR(8),
foto_empresa text,
site VARCHAR(200),
skype VARCHAR(100),
fax VARCHAR(100),
url_facebook VARCHAR(100),
contato VARCHAR(100),
telefone_comercial CHAR(11),
celular CHAR(11),
operadora VARCHAR(40),
contato1 VARCHAR(40),
celular2 CHAR(11),
operadora2 VARCHAR(40),
contato2 VARCHAR(40),
whatsapp CHAR(30),
id_cidade integer,
id_ramo integer,
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_ramo) REFERENCES Ramo (id_ramo)
);


CREATE TABLE Marca (
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
endereço VARCHAR(100),
data_nascimento date,
email VARCHAR(50),
rastreador CHAR(3),
modelo VARCHAR(1000),
ano integer,
rntrc VARCHAR(60),
seguro CHAR(3),
cnh VARCHAR(20),
permissionado CHAR(3),
id_marca integer,
id_cidade integer,
id_carroceria integer,
id_veiculo_categoria integer,
FOREIGN KEY(id_marca) REFERENCES Marca (id_marca),
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
);

CREATE TABLE telefone (
id_telefone integer PRIMARY KEY auto_increment,
telefone CHAR(11),
tipo VARCHAR(60),
id_veiculo integer,
FOREIGN KEY(id_veiculo) REFERENCES veiculos (id_veiculo)
);

ALTER TABLE Cidades ADD FOREIGN KEY(id_estado) REFERENCES Estados (id_estado);
ALTER TABLE complemento_carga ADD FOREIGN KEY(id_frete) REFERENCES Frete (id_frete);
ALTER TABLE Frete ADD FOREIGN KEY(id_forma_pagamento) REFERENCES forma_pagamento (id_forma_pagamento);
ALTER TABLE Frete ADD FOREIGN KEY(id_especie) REFERENCES Especie (id_especie);
ALTER TABLE gerenciamento_usuarios ADD FOREIGN KEY(id_empresa) REFERENCES Empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_empresa) REFERENCES Empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_produto) REFERENCES produtos (id_produto);
ALTER TABLE checkin ADD FOREIGN KEY(id_veiculo) REFERENCES veiculos (id_veiculo);;
ALTER TABLE frete ADD FOREIGN KEY(id_empresa) REFERENCES empresa (id_empresa);

insert into Estados (nome_estado, sigla_estads) values ('Acre', 'AC');
insert into Estados (nome_estado, sigla_estads) values ('Alagoas', 'AL');
insert into Estados (nome_estado, sigla_estads) values ('Amapá', 'AP');
insert into Estados (nome_estado, sigla_estads) values ('Amazonas', 'AM');
insert into Estados (nome_estado, sigla_estads) values ('Bahia', 'BA');
insert into Estados (nome_estado, sigla_estads) values ('Ceará', 'CE');
insert into Estados (nome_estado, sigla_estads) values ('Distrito Federal', 'DF');
insert into Estados (nome_estado, sigla_estads) values ('Espírito Santo', 'ES');
insert into Estados (nome_estado, sigla_estads) values ('Goiás', 'GO');
insert into Estados (nome_estado, sigla_estads) values ('Maranhão', 'MA');
insert into Estados (nome_estado, sigla_estads) values ('Mato Grosso', 'MT');
insert into Estados (nome_estado, sigla_estads) values ('Mato Grosso do Sul', 'MS');
insert into Estados (nome_estado, sigla_estads) values ('Minas Gerais', 'MG');
insert into Estados (nome_estado, sigla_estads) values ('Pará', 'PA');
insert into Estados (nome_estado, sigla_estads) values ('Paraíba', 'PB');
insert into Estados (nome_estado, sigla_estads) values ('Paraná', 'PR');
insert into Estados (nome_estado, sigla_estads) values ('Pernambuco', 'PE');
insert into Estados (nome_estado, sigla_estads) values ('Piauí', 'PI');
insert into Estados (nome_estado, sigla_estads) values ('Rio de Janeiro', 'RJ');
insert into Estados (nome_estado, sigla_estads) values ('Rio Grande do Norte', 'RN');
insert into Estados (nome_estado, sigla_estads) values ('Rio Grande do Sul', 'RS');
insert into Estados (nome_estado, sigla_estads) values ('Rondônia', 'RO');
insert into Estados (nome_estado, sigla_estads) values ('Roraima', 'RR');
insert into Estados (nome_estado, sigla_estads) values ('Santa Catarina', 'SC');
insert into Estados (nome_estado, sigla_estads) values ('São Paulo', 'SP');
insert into Estados (nome_estado, sigla_estads) values ('Sergipe', 'SE');
insert into Estados (nome_estado, sigla_estads) values ('Tocantins', 'TO');

insert into Cidades (nome_cidade, id_estado) values ('Acrelândia', 1);
insert into Cidades (nome_cidade, id_estado) values ('Assis Brasil', 1);
insert into Cidades (nome_cidade, id_estado) values ('Brasileia', 1);
insert into Cidades (nome_cidade, id_estado) values ('Capixaba', 1);
insert into Cidades (nome_cidade, id_estado) values ('Bujari', 1);
insert into Cidades (nome_cidade, id_estado) values ('Cruzeiro do Sul', 1);
insert into Cidades (nome_cidade, id_estado) values ('Epitaciolândia', 1);
insert into Cidades (nome_cidade, id_estado) values ('Feijó', 1);
insert into Cidades (nome_cidade, id_estado) values ('Jordão', 1);
insert into Cidades (nome_cidade, id_estado) values ('Manoel Urbano', 1);
insert into Cidades (nome_cidade, id_estado) values ('Marechal Thaumaturgo', 1);
insert into Cidades (nome_cidade, id_estado) values ('Mâncio Lima', 1);
insert into Cidades (nome_cidade, id_estado) values ('Plácido de Castro', 1);
insert into Cidades (nome_cidade, id_estado) values ('Porto Acre', 1);
insert into Cidades (nome_cidade, id_estado) values ('Porto Walter', 1);
insert into Cidades (nome_cidade, id_estado) values ('Rio Branco', 1);
insert into Cidades (nome_cidade, id_estado) values ('Rodrigues Alves', 1);
insert into Cidades (nome_cidade, id_estado) values ('Santa Rosa dos Purus', 1);
insert into Cidades (nome_cidade, id_estado) values ('Sena Madureira', 1);
insert into Cidades (nome_cidade, id_estado) values ('Senador Guiomard', 1);
insert into Cidades (nome_cidade, id_estado) values ('Tarauacá', 1);
insert into Cidades (nome_cidade, id_estado) values ('Xapuri', 1);

insert into Cidades (nome_cidade, id_estado) values ('Água Branca', 2);
insert into Cidades (nome_cidade, id_estado) values ('Anadia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Arapiraca', 2);
insert into Cidades (nome_cidade, id_estado) values ('Atalaia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Barra do Santo Antônio', 2);
insert into Cidades (nome_cidade, id_estado) values ('Barra do São Miguel', 2);
insert into Cidades (nome_cidade, id_estado) values ('Batalha', 2);
insert into Cidades (nome_cidade, id_estado) values ('Belém', 2);
insert into Cidades (nome_cidade, id_estado) values ('Belo Monte', 2);
insert into Cidades (nome_cidade, id_estado) values ('Boca da Mata', 2);
insert into Cidades (nome_cidade, id_estado) values ('Branquinha', 2);
insert into Cidades (nome_cidade, id_estado) values ('Cacimbinhas', 2);
insert into Cidades (nome_cidade, id_estado) values ('Cajueiro', 2);
insert into Cidades (nome_cidade, id_estado) values ('Campestre', 2);
insert into Cidades (nome_cidade, id_estado) values ('Campo Alegre', 2);
insert into Cidades (nome_cidade, id_estado) values ('Campo Grande', 2);
insert into Cidades (nome_cidade, id_estado) values ('Canapi', 2);
insert into Cidades (nome_cidade, id_estado) values ('Capela', 2);
insert into Cidades (nome_cidade, id_estado) values ('Carneiros', 2);
insert into Cidades (nome_cidade, id_estado) values ('Chã Preta', 2);
insert into Cidades (nome_cidade, id_estado) values ('Coité do Noia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Colônia Leopoldina', 2);
insert into Cidades (nome_cidade, id_estado) values ('Coqueiro Seco', 2);
insert into Cidades (nome_cidade, id_estado) values ('Coruripe', 2);
insert into Cidades (nome_cidade, id_estado) values ('Craíbas', 2);
insert into Cidades (nome_cidade, id_estado) values ('Delmiro Gouveia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Dois Riachos', 2);
insert into Cidades (nome_cidade, id_estado) values ('Estrela de Alagoas', 2);
insert into Cidades (nome_cidade, id_estado) values ('Feira Grande', 2);
insert into Cidades (nome_cidade, id_estado) values ('Feliz Deserto', 2);
insert into Cidades (nome_cidade, id_estado) values ('Flexeiras', 2);
insert into Cidades (nome_cidade, id_estado) values ('Girau do Ponciano', 2);
insert into Cidades (nome_cidade, id_estado) values ('Ibateguara', 2);
insert into Cidades (nome_cidade, id_estado) values ('Iguaci', 2);
insert into Cidades (nome_cidade, id_estado) values ('Igreja Nova', 2);
insert into Cidades (nome_cidade, id_estado) values ('Inhapi', 2);
insert into Cidades (nome_cidade, id_estado) values ('Jacaré dos Homens', 2);
insert into Cidades (nome_cidade, id_estado) values ('Jacuípe', 2);
insert into Cidades (nome_cidade, id_estado) values ('Japaratinga', 2);
insert into Cidades (nome_cidade, id_estado) values ('Jaramataia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Jequiá da Praia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Joaquim Gomes', 2);
insert into Cidades (nome_cidade, id_estado) values ('Jundiá', 2);
insert into Cidades (nome_cidade, id_estado) values ('Junqueiro', 2);
insert into Cidades (nome_cidade, id_estado) values ('Lagoa da Canoa', 2);
insert into Cidades (nome_cidade, id_estado) values ('Limoeiro de Anadia', 2);
insert into Cidades (nome_cidade, id_estado) values ('Maceió', 2);
insert into Cidades (nome_cidade, id_estado) values ('Major Isidoro', 2);
insert into Cidades (nome_cidade, id_estado) values ('Mar Vermelho', 2);
insert into Cidades (nome_cidade, id_estado) values ('Maragogi', 2);
insert into Cidades (nome_cidade, id_estado) values ('Maravilha', 2);
insert into Cidades (nome_cidade, id_estado) values ('Marechal Deodoro', 2);
insert into Cidades (nome_cidade, id_estado) values ('Maribondo', 2);
insert into Cidades (nome_cidade, id_estado) values ('Mata Grande', 2);
insert into Cidades (nome_cidade, id_estado) values ('Matriz de Camaragibe', 2);
insert into Cidades (nome_cidade, id_estado) values ('Messias', 2);
insert into Cidades (nome_cidade, id_estado) values ('Minador do Negrão', 2);
insert into Cidades (nome_cidade, id_estado) values ('Monteirópolis', 2);
insert into Cidades (nome_cidade, id_estado) values ('Murici', 2);
insert into Cidades (nome_cidade, id_estado) values ('Novo Lino', 2);
insert into Cidades (nome_cidade, id_estado) values ("Olho d'Água das Flores", 2);
insert into Cidades (nome_cidade, id_estado) values ("Olho d'Água do Casado", 2);
insert into Cidades (nome_cidade, id_estado) values ("Oho d'Água Grande", 2);
insert into Cidades (nome_cidade, id_estado) values ('Olivença', 2);
insert into Cidades (nome_cidade, id_estado) values ('Ouro Branco', 2);
insert into Cidades (nome_cidade, id_estado) values ('Palestina', 2);
insert into Cidades (nome_cidade, id_estado) values ('Palmeira dos Índios', 2);
insert into Cidades (nome_cidade, id_estado) values ('Pão de Açucar', 2);
insert into Cidades (nome_cidade, id_estado) values ('Pariconha', 2);
insert into Cidades (nome_cidade, id_estado) values ('Paripueira', 2);
insert into Cidades (nome_cidade, id_estado) values ('Passo de Camaragibe', 2);
insert into Cidades (nome_cidade, id_estado) values ('Paulo Jacinto', 2);
insert into Cidades (nome_cidade, id_estado) values ('Penedo', 2);
insert into Cidades (nome_cidade, id_estado) values ('Piaçabuçu', 2);
insert into Cidades (nome_cidade, id_estado) values ('Pilar', 2);
insert into Cidades (nome_cidade, id_estado) values ('Pindoba', 2);
insert into Cidades (nome_cidade, id_estado) values ('Piranhas', 2);
insert into Cidades (nome_cidade, id_estado) values ('Poço das Trincheiras', 2);
insert into Cidades (nome_cidade, id_estado) values ('Porto Calvo', 2);
insert into Cidades (nome_cidade, id_estado) values ('Porto de Pedras', 2);
insert into Cidades (nome_cidade, id_estado) values ('Porto Real do Colégio', 2);
insert into Cidades (nome_cidade, id_estado) values ('Quebrangulo', 2);
insert into Cidades (nome_cidade, id_estado) values ('Rio Largo', 2);
insert into Cidades (nome_cidade, id_estado) values ('Roteiro', 2);
insert into Cidades (nome_cidade, id_estado) values ('Santa Luzia do Norte', 2);
insert into Cidades (nome_cidade, id_estado) values ('Santana do Ipanema', 2);
insert into Cidades (nome_cidade, id_estado) values ('Santana do Mundaú', 2);
insert into Cidades (nome_cidade, id_estado) values ('São Brás', 2);
insert into Cidades (nome_cidade, id_estado) values ('São José da Laje', 2);
insert into Cidades (nome_cidade, id_estado) values ('São José da Tapera', 2);
insert into Cidades (nome_cidade, id_estado) values ('São Luís dos Campos', 2);
insert into Cidades (nome_cidade, id_estado) values ('São Miguel dos Milagres', 2);
insert into Cidades (nome_cidade, id_estado) values ('São Sebastião', 2);
insert into Cidades (nome_cidade, id_estado) values ('Satuba', 2);
insert into Cidades (nome_cidade, id_estado) values ('Senador Rui Palmeira', 2);
insert into Cidades (nome_cidade, id_estado) values ("Tanque d'Arca", 2);
insert into Cidades (nome_cidade, id_estado) values ('Taquarana', 2);
insert into Cidades (nome_cidade, id_estado) values ('Teotônio Vilela', 2);
insert into Cidades (nome_cidade, id_estado) values ('Traipu', 2);
insert into Cidades (nome_cidade, id_estado) values ('União dos Palmares', 2);
insert into Cidades (nome_cidade, id_estado) values ('Viçosa', 2);

insert into Cidades (nome_cidade, id_estado) values ('Amapá', 3);
insert into Cidades (nome_cidade, id_estado) values ('Calçoene', 3);
insert into Cidades (nome_cidade, id_estado) values ('Cutias', 3);
insert into Cidades (nome_cidade, id_estado) values ('Ferreira Gomes', 3);
insert into Cidades (nome_cidade, id_estado) values ('Itaubal', 3);
insert into Cidades (nome_cidade, id_estado) values ('Laranjal do Jari', 3);
insert into Cidades (nome_cidade, id_estado) values ('Macapá', 3);
insert into Cidades (nome_cidade, id_estado) values ('Mazagão', 3);
insert into Cidades (nome_cidade, id_estado) values ('Oiapoque', 3);
insert into Cidades (nome_cidade, id_estado) values ('Pedra Branca do Amapari', 3);
insert into Cidades (nome_cidade, id_estado) values ('Porto Grande', 3);
insert into Cidades (nome_cidade, id_estado) values ('Pracuúba', 3);
insert into Cidades (nome_cidade, id_estado) values ('Santana', 3);
insert into Cidades (nome_cidade, id_estado) values ('Serra do Navio', 3);
insert into Cidades (nome_cidade, id_estado) values ('Tartarugalzinho', 3);
insert into Cidades (nome_cidade, id_estado) values ('Vitória do Jari', 3);

insert into Cidades (nome_cidade, id_estado) values ('Alvarães', 4);
insert into Cidades (nome_cidade, id_estado) values ('Amaturá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Anamã', 4);
insert into Cidades (nome_cidade, id_estado) values ('Anori', 4);
insert into Cidades (nome_cidade, id_estado) values ('Apuí', 4);
insert into Cidades (nome_cidade, id_estado) values ('Atalaia do Norte', 4);
insert into Cidades (nome_cidade, id_estado) values ('Autazes', 4);
insert into Cidades (nome_cidade, id_estado) values ('Barcelos', 4);
insert into Cidades (nome_cidade, id_estado) values ('Barreirinha', 4);
insert into Cidades (nome_cidade, id_estado) values ('Benjamin Constant', 4);
insert into Cidades (nome_cidade, id_estado) values ('Beruri', 4);
insert into Cidades (nome_cidade, id_estado) values ('Boa Vista dos Ramos', 4);
insert into Cidades (nome_cidade, id_estado) values ('Boca do Acre', 4);
insert into Cidades (nome_cidade, id_estado) values ('Borba', 4);
insert into Cidades (nome_cidade, id_estado) values ('Caapiranga', 4);
insert into Cidades (nome_cidade, id_estado) values ('Canutama', 4);
insert into Cidades (nome_cidade, id_estado) values ('Carauari', 4);
insert into Cidades (nome_cidade, id_estado) values ('Careiro', 4);
insert into Cidades (nome_cidade, id_estado) values ('Careiro da Várzea', 4);
insert into Cidades (nome_cidade, id_estado) values ('Coari', 4);
insert into Cidades (nome_cidade, id_estado) values ('Codajás', 4);
insert into Cidades (nome_cidade, id_estado) values ('Eirunepé', 4);
insert into Cidades (nome_cidade, id_estado) values ('Envira', 4);
insert into Cidades (nome_cidade, id_estado) values ('Fonte Boa', 4);
insert into Cidades (nome_cidade, id_estado) values ('Guarajá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Humaitá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Ipixuna', 4);
insert into Cidades (nome_cidade, id_estado) values ('Iranduba', 4);
insert into Cidades (nome_cidade, id_estado) values ('Itacoatiara', 4);
insert into Cidades (nome_cidade, id_estado) values ('Itamarati', 4);
insert into Cidades (nome_cidade, id_estado) values ('Itapiranga', 4);
insert into Cidades (nome_cidade, id_estado) values ('Japurá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Juruá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Jutaí', 4);
insert into Cidades (nome_cidade, id_estado) values ('Lábrea', 4);
insert into Cidades (nome_cidade, id_estado) values ('Manacapuru', 4);
insert into Cidades (nome_cidade, id_estado) values ('Manaquiri', 4);
insert into Cidades (nome_cidade, id_estado) values ('Manaus', 4);
insert into Cidades (nome_cidade, id_estado) values ('Manicoré', 4);
insert into Cidades (nome_cidade, id_estado) values ('Maraã', 4);
insert into Cidades (nome_cidade, id_estado) values ('Maués', 4);
insert into Cidades (nome_cidade, id_estado) values ('Nhamundá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Nova Olinda do Norte', 4);
insert into Cidades (nome_cidade, id_estado) values ('Novo Airão', 4);
insert into Cidades (nome_cidade, id_estado) values ('Novo Aripuanã', 4);
insert into Cidades (nome_cidade, id_estado) values ('Parintins', 4);
insert into Cidades (nome_cidade, id_estado) values ('Pauini', 4);
insert into Cidades (nome_cidade, id_estado) values ('Presidente Figueiredo', 4);
insert into Cidades (nome_cidade, id_estado) values ('Rio Preto do Eva', 4);
insert into Cidades (nome_cidade, id_estado) values ('Santa Isabel do Rio Negro', 4);
insert into Cidades (nome_cidade, id_estado) values ('Santo Antônio do Içá', 4);
insert into Cidades (nome_cidade, id_estado) values ('São Gabriel do Cachoeira', 4);
insert into Cidades (nome_cidade, id_estado) values ('São Paulo de Olivença', 4);
insert into Cidades (nome_cidade, id_estado) values ('São Sebastião do Uatumã', 4);
insert into Cidades (nome_cidade, id_estado) values ('Silves', 4);
insert into Cidades (nome_cidade, id_estado) values ('Tabatinga', 4);
insert into Cidades (nome_cidade, id_estado) values ('Papauá', 4);
insert into Cidades (nome_cidade, id_estado) values ('Tefé', 4);
insert into Cidades (nome_cidade, id_estado) values ('Tonantins', 4);
insert into Cidades (nome_cidade, id_estado) values ('Uarini', 4);
insert into Cidades (nome_cidade, id_estado) values ('Urucará', 4);
insert into Cidades (nome_cidade, id_estado) values ('Urucurituba', 4);

insert into Cidades (nome_cidade, id_estado) values ('Abaré', 5);
insert into Cidades (nome_cidade, id_estado) values ('Abaíra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Acajutiba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Adustina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aiquara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Alagoinhas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Alcobaça', 5);
insert into Cidades (nome_cidade, id_estado) values ('Almadina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Amargosa', 5);
insert into Cidades (nome_cidade, id_estado) values ('Amélia Rodrigues', 5);
insert into Cidades (nome_cidade, id_estado) values ('América Dourada', 5);
insert into Cidades (nome_cidade, id_estado) values ('Anagé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Andaraí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Andorinha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Angical', 5);
insert into Cidades (nome_cidade, id_estado) values ('Anguera', 5);
insert into Cidades (nome_cidade, id_estado) values ('Antas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Antônio Cardoso', 5);
insert into Cidades (nome_cidade, id_estado) values ('Antônio Gonçalves', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aporá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Apurema', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aracatu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Araci', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aramari', 5);
insert into Cidades (nome_cidade, id_estado) values ('Arataca', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aratuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Araças', 5);
insert into Cidades (nome_cidade, id_estado) values ('Aurelino Leal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Baianópolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Baixa Grande', 5);
insert into Cidades (nome_cidade, id_estado) values ('Banzaê', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barra da Estiva', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barra do Choça', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barra do Mendes', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barra do Rocha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barreiras', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barro Alto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barro Preto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Barrocas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Belmonte', 5);
insert into Cidades (nome_cidade, id_estado) values ('Belo Campo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Biritinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Boa Nova', 5);
insert into Cidades (nome_cidade, id_estado) values ('Boa Vista do Tupim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Bom Jesus da Lapa', 5);
insert into Cidades (nome_cidade, id_estado) values ('Bom Jesus da Serra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Boninal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Bonito', 5);
insert into Cidades (nome_cidade, id_estado) values ('Boquira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Botuporã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Brejolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Brejões', 5);
insert into Cidades (nome_cidade, id_estado) values ('Brotas de Macaúbas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Brumado', 5);
insert into Cidades (nome_cidade, id_estado) values ('Buerarema', 5);
insert into Cidades (nome_cidade, id_estado) values ('Buritirama', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caatiba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cabaceiras do Paraguaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cachoeira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caculé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caetanos', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caetité', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cafarnaum', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cairu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caldeirão Grande', 5);
insert into Cidades (nome_cidade, id_estado) values ('Camacan', 5);
insert into Cidades (nome_cidade, id_estado) values ('Camamu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Camaçari', 5);
insert into Cidades (nome_cidade, id_estado) values ('Campo Alegre de Lourdes', 5);
insert into Cidades (nome_cidade, id_estado) values ('Campo Formoso', 5);
insert into Cidades (nome_cidade, id_estado) values ('Canarana', 5);
insert into Cidades (nome_cidade, id_estado) values ('Canavieiras', 5);
insert into Cidades (nome_cidade, id_estado) values ('Candeal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Candeias', 5);
insert into Cidades (nome_cidade, id_estado) values ('Candiba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cansanção', 5);
insert into Cidades (nome_cidade, id_estado) values ('Canudos', 5);
insert into Cidades (nome_cidade, id_estado) values ('Canápolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Capela do Alto Alegre', 5);
insert into Cidades (nome_cidade, id_estado) values ('Capim Grosso', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caravelas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caraíbas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cardeal da Silva', 5);
insert into Cidades (nome_cidade, id_estado) values ('Carinhanha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Casa Nova', 5);
insert into Cidades (nome_cidade, id_estado) values ('Castro Alves', 5);
insert into Cidades (nome_cidade, id_estado) values ('Catolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Catu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caturama', 5);
insert into Cidades (nome_cidade, id_estado) values ('Caém', 5);
insert into Cidades (nome_cidade, id_estado) values ('Central', 5);
insert into Cidades (nome_cidade, id_estado) values ('Chorrochó', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cipó', 5);
insert into Cidades (nome_cidade, id_estado) values ('Coaraci', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cocos', 5);
insert into Cidades (nome_cidade, id_estado) values ('Conceição da Feira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Conceição do Almeida', 5);
insert into Cidades (nome_cidade, id_estado) values ('Conceição do Coité', 5);
insert into Cidades (nome_cidade, id_estado) values ('Conceição do Jacuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Conde', 5);
insert into Cidades (nome_cidade, id_estado) values ('Condeúba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Contendas do Sincorá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Coração de Maria', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cordeiros', 5);
insert into Cidades (nome_cidade, id_estado) values ('Coribe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Coronel João Sá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Correntina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cotegipe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cravolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cristópolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cruz das Almas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Curaçá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cândido Sales', 5);
insert into Cidades (nome_cidade, id_estado) values ('Cícero Dantas', 5);
insert into Cidades (nome_cidade, id_estado) values ("Dias d'Ávila", 5);
insert into Cidades (nome_cidade, id_estado) values ('Dom Basílio', 5);
insert into Cidades (nome_cidade, id_estado) values ('Dom Macedo Costa', 5);
insert into Cidades (nome_cidade, id_estado) values ('Dário Meira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Elísio Medrado', 5);
insert into Cidades (nome_cidade, id_estado) values ('Encruzilhada', 5);
insert into Cidades (nome_cidade, id_estado) values ('Entre Rios', 5);
insert into Cidades (nome_cidade, id_estado) values ('Esplanada', 5);
insert into Cidades (nome_cidade, id_estado) values ('Euclides da Cunha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Eunápolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Feira da Mata', 5);
insert into Cidades (nome_cidade, id_estado) values ('Feira de Santana', 5);
insert into Cidades (nome_cidade, id_estado) values ('Filadélfia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Firmino Alves', 5);
insert into Cidades (nome_cidade, id_estado) values ('Floresta Azul', 5);
insert into Cidades (nome_cidade, id_estado) values ('Formosa do Rio Preto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Fátima', 5);
insert into Cidades (nome_cidade, id_estado) values ('Gandu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Gavião', 5);
insert into Cidades (nome_cidade, id_estado) values ('Gentio do Ouro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Glória', 5);
insert into Cidades (nome_cidade, id_estado) values ('Gongogi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Governador Mangabeira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Guajeru', 5);
insert into Cidades (nome_cidade, id_estado) values ('Guanambi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Guarantinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Heliópolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibissucê', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibicaraí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iibicoara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibicuí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibipeba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibipitanga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iibiquera', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibirapinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibirapuã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibirataia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibitiara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibititá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ibotirama', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ichu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Igaporã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Igrapiúna', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iguaí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ilhéus', 5);
insert into Cidades (nome_cidade, id_estado) values ('Inhambupe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ipecaetá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ipiaú', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ipirá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ipupiara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Irajuba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iramaia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iraquara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Irará', 5);
insert into Cidades (nome_cidade, id_estado) values ('Irecê', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itabela', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaberaba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itabuna', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itacaré', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaeté', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itagi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itagibá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itagimirim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaguaçu da Bahia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaju do Colônia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itajuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itamaraju', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itamari', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itambé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itanagra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itanhém', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaparica', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itapebi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itapetinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itapicuru', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itapitanga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itapé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itaquara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itarantim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itatim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itiruçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itiúba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Itororó', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ituaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ituberá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Iuiú', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jaborandi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jacaraci', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jacobina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaquara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jaguarari', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaripe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jandaíra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jequié', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jeremoabo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jiquiriçá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jitaúna', 5);
insert into Cidades (nome_cidade, id_estado) values ('João Dourado', 5);
insert into Cidades (nome_cidade, id_estado) values ('Juazeiro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jucuruçi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jussara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jussari', 5);
insert into Cidades (nome_cidade, id_estado) values ('Jussiape', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lafaiete Coutinho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lagoa Real', 5);
insert into Cidades (nome_cidade, id_estado) values ('Laje', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lajedinho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lajedo do Tabocal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lajedão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lamarão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lapão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lauro de Freitas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Lençõis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Licínio da Almeida', 5);
insert into Cidades (nome_cidade, id_estado) values ('Livramento de Nossa Senhora', 5);
insert into Cidades (nome_cidade, id_estado) values ('Luís Eduardo Magalhães', 5);
insert into Cidades (nome_cidade, id_estado) values ('Macaúbas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Macururé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Madre de Deus', 5);
insert into Cidades (nome_cidade, id_estado) values ('Maetinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Maiquinique', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mairi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Malhada', 5);
insert into Cidades (nome_cidade, id_estado) values ('Malhada das Pedras', 5);
insert into Cidades (nome_cidade, id_estado) values ('Manoel Vitorino', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mansidão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Maracás', 5);
insert into Cidades (nome_cidade, id_estado) values ('Maragogipe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Maraú', 5);
insert into Cidades (nome_cidade, id_estado) values ('Marcionílio Souza', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mascote', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mata de São João', 5);
insert into Cidades (nome_cidade, id_estado) values ('Matina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Medeiros Neto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Miguel Calmon', 5);
insert into Cidades (nome_cidade, id_estado) values ('Milagres', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mirangaba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mirante', 5);
insert into Cidades (nome_cidade, id_estado) values ('Medeiros Neto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Monte Santo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Morpará', 5);
insert into Cidades (nome_cidade, id_estado) values ('Morro do Chapéu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mortugaba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mucugê', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mucuri', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mulungu do Morro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mundo Novo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Muniz Ferreira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Muquém de São Francisco', 5);
insert into Cidades (nome_cidade, id_estado) values ('Muritiba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Mutuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nazaré', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nilo Peçanha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nordestina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Canaã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Fátima', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Ibiá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Itarana', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Redenção', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Soure', 5);
insert into Cidades (nome_cidade, id_estado) values ('Nova Viçosa', 5);
insert into Cidades (nome_cidade, id_estado) values ('Novo Horizonte', 5);
insert into Cidades (nome_cidade, id_estado) values ('Novo Triunfo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Olindina', 5);
insert into Cidades (nome_cidade, id_estado) values ('Oliveira dos Brejinhos', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ouriçangas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ourolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Palmas de Monte Alto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Palmeiras', 5);
insert into Cidades (nome_cidade, id_estado) values ('Paramirim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Paratinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Paripiranga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pau Brasil', 5);
insert into Cidades (nome_cidade, id_estado) values ('Paulo Afonso', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pedro Alexandre', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pedrão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Piatã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pilão Arcado', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pindaí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pindobaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pintadas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Piraí do Norte', 5);
insert into Cidades (nome_cidade, id_estado) values ('Piripá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Piritiba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Planaltino', 5);
insert into Cidades (nome_cidade, id_estado) values ('Planalto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pojuca', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ponto Novo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Porto Seguro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Potiraguá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Poções', 5);
insert into Cidades (nome_cidade, id_estado) values ('Prado', 5);
insert into Cidades (nome_cidade, id_estado) values ('Presidente Dutra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Presidente Jânio Quadros', 5);
insert into Cidades (nome_cidade, id_estado) values ('Presidente Tancredo Neves', 5);
insert into Cidades (nome_cidade, id_estado) values ('Pé de Serra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Queimadas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Quijingue', 5);
insert into Cidades (nome_cidade, id_estado) values ('Quixabeira', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rafael Jambeiro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Remanso', 5);
insert into Cidades (nome_cidade, id_estado) values ('Retirolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Riacho de Santana', 5);
insert into Cidades (nome_cidade, id_estado) values ('Riachão das Neves', 5);
insert into Cidades (nome_cidade, id_estado) values ('Riachão do Jacuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ribeira do Amparo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ribeira do Pombal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ribeirão do Largo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rio de Contas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rio do Antônio', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rio do Pires', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rio Real', 5);
insert into Cidades (nome_cidade, id_estado) values ('Rodelas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ruy Barbosa', 5);
insert into Cidades (nome_cidade, id_estado) values ('Salinas da Margarida', 5);
insert into Cidades (nome_cidade, id_estado) values ('Salvador', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Brígida', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Bárbara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Cruz Cabrália', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Cruz da Vitória', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Inês', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Luzia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Maria da Vitória', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Rita de Cássia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santa Teresinha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santaluz', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santana', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santanópolis', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santo Amaro', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santo Antônio de Jesus', 5);
insert into Cidades (nome_cidade, id_estado) values ('Santo Estêvão', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sapeaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Saubara', 5);
insert into Cidades (nome_cidade, id_estado) values ('Saúde', 5);
insert into Cidades (nome_cidade, id_estado) values ('Seabra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sebastião Laranjeiras', 5);
insert into Cidades (nome_cidade, id_estado) values ('Senhor do Bonfim', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sento Sé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Serra do Ramalho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Serra Dourada', 5);
insert into Cidades (nome_cidade, id_estado) values ('Serra Preta', 5);
insert into Cidades (nome_cidade, id_estado) values ('Serrinha', 5);
insert into Cidades (nome_cidade, id_estado) values ('Serrolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Simões Filho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sobradinho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Souto Soares', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sátiro Dias', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Desidério', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Domingos', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Felipe', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Francisco do Conde', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Félix', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Félix do Coribe', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Gabriel', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Gonçalo dos Campos', 5);
insert into Cidades (nome_cidade, id_estado) values ('São José da Vitória', 5);
insert into Cidades (nome_cidade, id_estado) values ('São José do Jacuípe', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Miguel das Matas', 5);
insert into Cidades (nome_cidade, id_estado) values ('São Sebastião do Passé', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sítio do Mato', 5);
insert into Cidades (nome_cidade, id_estado) values ('Sítio do Quinto', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tabocas do Brejo Velho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tanhaçu', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tanque Novo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tanquinho', 5);
insert into Cidades (nome_cidade, id_estado) values ('Taperoá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tapiramutá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Teixeira de Freitas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Teodoro Sampaio', 5);
insert into Cidades (nome_cidade, id_estado) values ('Teofilândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Teolândia', 5);
insert into Cidades (nome_cidade, id_estado) values ('Terra Nova', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tremedal', 5);
insert into Cidades (nome_cidade, id_estado) values ('Tucano', 5);
insert into Cidades (nome_cidade, id_estado) values ('Uauá', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ubaitaba', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ubatã', 5);
insert into Cidades (nome_cidade, id_estado) values ('Ubaíra', 5);
insert into Cidades (nome_cidade, id_estado) values ('Uibaí', 5);
insert into Cidades (nome_cidade, id_estado) values ('Umburanas', 5);
insert into Cidades (nome_cidade, id_estado) values ('Una', 5);
insert into Cidades (nome_cidade, id_estado) values ('Urandi', 5);
insert into Cidades (nome_cidade, id_estado) values ('Uruçuca', 5);
insert into Cidades (nome_cidade, id_estado) values ('Utinga', 5);
insert into Cidades (nome_cidade, id_estado) values ('Valente', 5);
insert into Cidades (nome_cidade, id_estado) values ('Valença', 5);
insert into Cidades (nome_cidade, id_estado) values ('Varzedo', 5);
insert into Cidades (nome_cidade, id_estado) values ('Vera Cruz', 5);
insert into Cidades (nome_cidade, id_estado) values ('Vereda', 5);
insert into Cidades (nome_cidade, id_estado) values ('Vitória da Conquista', 5);
insert into Cidades (nome_cidade, id_estado) values ('Várzea da Roça', 5);
insert into Cidades (nome_cidade, id_estado) values ('Wagner', 5);
insert into Cidades (nome_cidade, id_estado) values ('Wanderley', 5);
insert into Cidades (nome_cidade, id_estado) values ('Wenceslau Guimarães', 5);
insert into Cidades (nome_cidade, id_estado) values ('Xique-Xique', 5);
insert into Cidades (nome_cidade, id_estado) values ('Água Fria', 5);
insert into Cidades (nome_cidade, id_estado) values ('Érico Cardoso', 5);

insert into Cidades (nome_cidade, id_estado) values ('Abaiara', 6);
insert into Cidades (nome_cidade, id_estado) values ('Acarape', 6);
insert into Cidades (nome_cidade, id_estado) values ('Acaraú', 6);
insert into Cidades (nome_cidade, id_estado) values ('Acopiara', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aiuaba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Alcântaras', 6);
insert into Cidades (nome_cidade, id_estado) values ('Altaneira', 6);
insert into Cidades (nome_cidade, id_estado) values ('Alto Santo', 6);
insert into Cidades (nome_cidade, id_estado) values ('Amontada', 6);
insert into Cidades (nome_cidade, id_estado) values ('Antonina do Norte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Apuiarés', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aquiraz', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aracati', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aracoiaba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ararendá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Araripe', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aratuba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Arneiroz', 6);
insert into Cidades (nome_cidade, id_estado) values ('Assaré', 6);
insert into Cidades (nome_cidade, id_estado) values ('Aurora', 6);
insert into Cidades (nome_cidade, id_estado) values ('Baixio', 6);
insert into Cidades (nome_cidade, id_estado) values ('Banabuiú', 6);
insert into Cidades (nome_cidade, id_estado) values ('Barbalha', 6);
insert into Cidades (nome_cidade, id_estado) values ('Barreira', 6);
insert into Cidades (nome_cidade, id_estado) values ('Barro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Barroquinha', 6);
insert into Cidades (nome_cidade, id_estado) values ('Baturité', 6);
insert into Cidades (nome_cidade, id_estado) values ('Beberibe', 6);
insert into Cidades (nome_cidade, id_estado) values ('Bela Cruz', 6);
insert into Cidades (nome_cidade, id_estado) values ('Boa Viagem', 6);
insert into Cidades (nome_cidade, id_estado) values ('Brejo Santo', 6);
insert into Cidades (nome_cidade, id_estado) values ('Camocim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Campos Sales', 6);
insert into Cidades (nome_cidade, id_estado) values ('Canindé', 6);
insert into Cidades (nome_cidade, id_estado) values ('Capistrano', 6);
insert into Cidades (nome_cidade, id_estado) values ('Caridade', 6);
insert into Cidades (nome_cidade, id_estado) values ('Cariré', 6);
insert into Cidades (nome_cidade, id_estado) values ('Caririaçu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Cariús', 6);
insert into Cidades (nome_cidade, id_estado) values ('Carnaubal', 6);
insert into Cidades (nome_cidade, id_estado) values ('Cascavel', 6);
insert into Cidades (nome_cidade, id_estado) values ('Catarina', 6);
insert into Cidades (nome_cidade, id_estado) values ('Catunda', 6);
insert into Cidades (nome_cidade, id_estado) values ('Caucaia', 6);
insert into Cidades (nome_cidade, id_estado) values ('Cedro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Chaval', 6);
insert into Cidades (nome_cidade, id_estado) values ('Choró', 6);
insert into Cidades (nome_cidade, id_estado) values ('Chorozinho', 6);
insert into Cidades (nome_cidade, id_estado) values ('Coreaú', 6);
insert into Cidades (nome_cidade, id_estado) values ('Crateús', 6);
insert into Cidades (nome_cidade, id_estado) values ('Crato', 6);
insert into Cidades (nome_cidade, id_estado) values ('Croatá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Cruz', 6);
insert into Cidades (nome_cidade, id_estado) values ('Deputado Irapuan Pinheiro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ererê', 6);
insert into Cidades (nome_cidade, id_estado) values ('Eusébio', 6);
insert into Cidades (nome_cidade, id_estado) values ('Farias Brito', 6);
insert into Cidades (nome_cidade, id_estado) values ('Forquilha', 6);
insert into Cidades (nome_cidade, id_estado) values ('Fortaleza', 6);
insert into Cidades (nome_cidade, id_estado) values ('Fortim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Frecheirinha', 6);
insert into Cidades (nome_cidade, id_estado) values ('General Sampaio', 6);
insert into Cidades (nome_cidade, id_estado) values ('Graça', 6);
insert into Cidades (nome_cidade, id_estado) values ('Granja', 6);
insert into Cidades (nome_cidade, id_estado) values ('Granjeiro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Groaíras', 6);
insert into Cidades (nome_cidade, id_estado) values ('Guaiúba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Guaraciaba do Norte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Guaramiranga', 6);
insert into Cidades (nome_cidade, id_estado) values ('Hidrolândia', 6);
insert into Cidades (nome_cidade, id_estado) values ('Horizonte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ibaretama', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ibiapina', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ibicuitinga', 6);
insert into Cidades (nome_cidade, id_estado) values ('Icapuí', 6);
insert into Cidades (nome_cidade, id_estado) values ('Icó', 6);
insert into Cidades (nome_cidade, id_estado) values ('Iguatu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Independência', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ipaporanga', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ipaumirim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ipu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ipueiras', 6);
insert into Cidades (nome_cidade, id_estado) values ('Iracema', 6);
insert into Cidades (nome_cidade, id_estado) values ('Irauçuba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itaiçaba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itaitinga', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itapajé', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itapipoca', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itapiúna', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itarema', 6);
insert into Cidades (nome_cidade, id_estado) values ('Itatira', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaretama', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaribara', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaribe', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaruana', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jardim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jati', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jijoca de Jericoacoara', 6);
insert into Cidades (nome_cidade, id_estado) values ('Juazeiro do Norte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Jucás', 6);
insert into Cidades (nome_cidade, id_estado) values ('Lavras da Mangabeira', 6);
insert into Cidades (nome_cidade, id_estado) values ('Limoeiro do Norte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Madalena', 6);
insert into Cidades (nome_cidade, id_estado) values ('Maracanaú', 6);
insert into Cidades (nome_cidade, id_estado) values ('Maranguape', 6);
insert into Cidades (nome_cidade, id_estado) values ('Marco', 6);
insert into Cidades (nome_cidade, id_estado) values ('Martinópole', 6);
insert into Cidades (nome_cidade, id_estado) values ('Massapê', 6);
insert into Cidades (nome_cidade, id_estado) values ('Mauriti', 6);
insert into Cidades (nome_cidade, id_estado) values ('Meruoca', 6);
insert into Cidades (nome_cidade, id_estado) values ('Milagres', 6);
insert into Cidades (nome_cidade, id_estado) values ('Milhã', 6);
insert into Cidades (nome_cidade, id_estado) values ('Miraíma', 6);
insert into Cidades (nome_cidade, id_estado) values ('Missão Velha', 6);
insert into Cidades (nome_cidade, id_estado) values ('Mombaça', 6);
insert into Cidades (nome_cidade, id_estado) values ('Monsenhor Tabosa', 6);
insert into Cidades (nome_cidade, id_estado) values ('Morada Nova', 6);
insert into Cidades (nome_cidade, id_estado) values ('Moraújo', 6);
insert into Cidades (nome_cidade, id_estado) values ('Morrinhos', 6);
insert into Cidades (nome_cidade, id_estado) values ('Mucambo', 6);
insert into Cidades (nome_cidade, id_estado) values ('Mulungu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Nova Olinda', 6);
insert into Cidades (nome_cidade, id_estado) values ('Nova Russas', 6);
insert into Cidades (nome_cidade, id_estado) values ('Novo Oriente', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ocara', 6);	
insert into Cidades (nome_cidade, id_estado) values ('Orós', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pacajus', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pacatuba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pacoti', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pacujá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Palhano', 6);
insert into Cidades (nome_cidade, id_estado) values ('Palmácia', 6);
insert into Cidades (nome_cidade, id_estado) values ('Paracuru', 6);
insert into Cidades (nome_cidade, id_estado) values ('Paraípaba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Parambu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Paramoti', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pedra Branca', 6);
insert into Cidades (nome_cidade, id_estado) values ('Penaforte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pentecoste', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pereiro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pindoretama', 6);
insert into Cidades (nome_cidade, id_estado) values ('Piquet Carneiro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Pires Ferreira', 6);
insert into Cidades (nome_cidade, id_estado) values ('Poranga', 6);
insert into Cidades (nome_cidade, id_estado) values ('Porteiras', 6);
insert into Cidades (nome_cidade, id_estado) values ('Potengi', 6);
insert into Cidades (nome_cidade, id_estado) values ('Potiretama', 6);
insert into Cidades (nome_cidade, id_estado) values ('Quiterianópolis', 6);
insert into Cidades (nome_cidade, id_estado) values ('Quixadá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Quixelô', 6);
insert into Cidades (nome_cidade, id_estado) values ('Quixeramobim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Quixeré', 6);
insert into Cidades (nome_cidade, id_estado) values ('Redenção', 6);
insert into Cidades (nome_cidade, id_estado) values ('Reriutaba', 6);
insert into Cidades (nome_cidade, id_estado) values ('Russas', 6);
insert into Cidades (nome_cidade, id_estado) values ('Saboeiro', 6);
insert into Cidades (nome_cidade, id_estado) values ('Salitre', 6);
insert into Cidades (nome_cidade, id_estado) values ('Santa Quitéria', 6);
insert into Cidades (nome_cidade, id_estado) values ('Santana do Acaraú', 6);
insert into Cidades (nome_cidade, id_estado) values ('Santana do Cariri', 6);
insert into Cidades (nome_cidade, id_estado) values ('São Benedito', 6);
insert into Cidades (nome_cidade, id_estado) values ('São Gonçalo do Amarante', 6);
insert into Cidades (nome_cidade, id_estado) values ('São João do Jaguaribe', 6);
insert into Cidades (nome_cidade, id_estado) values ('São Luís do Curu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Senador Pompeu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Senador Sá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Sobral', 6);
insert into Cidades (nome_cidade, id_estado) values ('Solonópole', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tabuleiro do Norte', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tamboril', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tarrafas', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tauá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tejuçuoca', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tianguá', 6);
insert into Cidades (nome_cidade, id_estado) values ('Trairi', 6);
insert into Cidades (nome_cidade, id_estado) values ('Tururu', 6);
insert into Cidades (nome_cidade, id_estado) values ('Ubajara', 6);
insert into Cidades (nome_cidade, id_estado) values ('Umari', 6);
insert into Cidades (nome_cidade, id_estado) values ('Umari', 6);
insert into Cidades (nome_cidade, id_estado) values ('Umirim', 6);
insert into Cidades (nome_cidade, id_estado) values ('Uruburetama', 6);
insert into Cidades (nome_cidade, id_estado) values ('Uruoca', 6);
insert into Cidades (nome_cidade, id_estado) values ('Varjota', 6);
insert into Cidades (nome_cidade, id_estado) values ('Várzea Alegre', 6);
insert into Cidades (nome_cidade, id_estado) values ('Viçosa do Ceará', 6);

insert into Cidades (nome_cidade, id_estado) values ('Brasília', 7);
insert into Cidades (nome_cidade, id_estado) values ('Brazlândia', 7);
insert into Cidades (nome_cidade, id_estado) values ('Candangolândia', 7);
insert into Cidades (nome_cidade, id_estado) values ('Ceilândia', 7);
insert into Cidades (nome_cidade, id_estado) values ('Gama', 7);
insert into Cidades (nome_cidade, id_estado) values ('Guará', 7);
insert into Cidades (nome_cidade, id_estado) values ('Largo Sul', 7);
insert into Cidades (nome_cidade, id_estado) values ('Núcleo Bandeirante', 7);
insert into Cidades (nome_cidade, id_estado) values ('Planaltina', 7);
insert into Cidades (nome_cidade, id_estado) values ('Samambaia do Sul', 7);
insert into Cidades (nome_cidade, id_estado) values ('Sobradinho', 7);
insert into Cidades (nome_cidade, id_estado) values ('Taguatinga', 7);

insert into Cidades (nome_cidade, id_estado) values ('Afonso Cláudio', 8);
insert into Cidades (nome_cidade, id_estado) values ('Alegre', 8);
insert into Cidades (nome_cidade, id_estado) values ('Alfredo Chaves', 8);
insert into Cidades (nome_cidade, id_estado) values ('Alto Rio Novo', 8);
insert into Cidades (nome_cidade, id_estado) values ('Anchieta', 8);
insert into Cidades (nome_cidade, id_estado) values ('Apiacá', 8);
insert into Cidades (nome_cidade, id_estado) values ('Aracruz', 8);
insert into Cidades (nome_cidade, id_estado) values ('Atílio Vivácqua', 8);
insert into Cidades (nome_cidade, id_estado) values ('Baixo Guandu', 8);
insert into Cidades (nome_cidade, id_estado) values ('Barra de São Francisco', 8);
insert into Cidades (nome_cidade, id_estado) values ('Boa Esperança', 8);
insert into Cidades (nome_cidade, id_estado) values ('Bom Jesus do Norte', 8);
insert into Cidades (nome_cidade, id_estado) values ('Brejetuba', 8);
insert into Cidades (nome_cidade, id_estado) values ('Cachoeiro de Itapemirim', 8);
insert into Cidades (nome_cidade, id_estado) values ('Cariacica', 8);
insert into Cidades (nome_cidade, id_estado) values ('Castelo', 8);
insert into Cidades (nome_cidade, id_estado) values ('Colatina', 8);
insert into Cidades (nome_cidade, id_estado) values ('Conceição da Barra', 8);
insert into Cidades (nome_cidade, id_estado) values ('Conceição do Castelo', 8);
insert into Cidades (nome_cidade, id_estado) values ('Divino São Lourenço', 8);
insert into Cidades (nome_cidade, id_estado) values ('Domingos Martins', 8);
insert into Cidades (nome_cidade, id_estado) values ('Dores do Rio Preto', 8);
insert into Cidades (nome_cidade, id_estado) values ('Ecoporanga', 8);
insert into Cidades (nome_cidade, id_estado) values ('Fundão', 8);
insert into Cidades (nome_cidade, id_estado) values ('Governador Lindenberg', 8);
insert into Cidades (nome_cidade, id_estado) values ('Guarapari', 8);
insert into Cidades (nome_cidade, id_estado) values ('Ibatiba', 8);
insert into Cidades (nome_cidade, id_estado) values ('Ibiraçu', 8);
insert into Cidades (nome_cidade, id_estado) values ('Ibitirama', 8);
insert into Cidades (nome_cidade, id_estado) values ('Iconha', 8);
insert into Cidades (nome_cidade, id_estado) values ('Irupi', 8);
insert into Cidades (nome_cidade, id_estado) values ('Itaguaçu', 8);
insert into Cidades (nome_cidade, id_estado) values ('Itapemirim', 8);
insert into Cidades (nome_cidade, id_estado) values ('Itarana', 8);
insert into Cidades (nome_cidade, id_estado) values ('Iúna', 8);
insert into Cidades (nome_cidade, id_estado) values ('Jaguaré', 8);
insert into Cidades (nome_cidade, id_estado) values ('Jerônimo Monteiro', 8);
insert into Cidades (nome_cidade, id_estado) values ('João Neiva', 8);
insert into Cidades (nome_cidade, id_estado) values ('Laranja da Terra', 8);
insert into Cidades (nome_cidade, id_estado) values ('Linhares', 8);
insert into Cidades (nome_cidade, id_estado) values ('Mantenópolis', 8);
insert into Cidades (nome_cidade, id_estado) values ('Marataízes', 8);
insert into Cidades (nome_cidade, id_estado) values ('Marechal Floriano', 8);
insert into Cidades (nome_cidade, id_estado) values ('Marilândia', 8);
insert into Cidades (nome_cidade, id_estado) values ('Mimoso do Sul', 8);
insert into Cidades (nome_cidade, id_estado) values ('Montanha', 8);
insert into Cidades (nome_cidade, id_estado) values ('Mucurici', 8);
insert into Cidades (nome_cidade, id_estado) values ('Muniz Freire', 8);
insert into Cidades (nome_cidade, id_estado) values ('Muqui', 8);
insert into Cidades (nome_cidade, id_estado) values ('Nova Venécia', 8);
insert into Cidades (nome_cidade, id_estado) values ('Pancas', 8);
insert into Cidades (nome_cidade, id_estado) values ('Pedro Canário', 8);
insert into Cidades (nome_cidade, id_estado) values ('Pinheiros', 8);
insert into Cidades (nome_cidade, id_estado) values ('Piúma', 8);
insert into Cidades (nome_cidade, id_estado) values ('Ponto Belo', 8);
insert into Cidades (nome_cidade, id_estado) values ('Presidente Kennedy', 8);
insert into Cidades (nome_cidade, id_estado) values ('Rio Bananal', 8);
insert into Cidades (nome_cidade, id_estado) values ('Rio Novo do Sul', 8);
insert into Cidades (nome_cidade, id_estado) values ('Santa Leopoldina', 8);
insert into Cidades (nome_cidade, id_estado) values ('Santa Maria de Jetibá', 8);
insert into Cidades (nome_cidade, id_estado) values ('Santa Teresa', 8);
insert into Cidades (nome_cidade, id_estado) values ('Serra', 8);
insert into Cidades (nome_cidade, id_estado) values ('Sooretama', 8);
insert into Cidades (nome_cidade, id_estado) values ('São Domingos do Norte', 8);
insert into Cidades (nome_cidade, id_estado) values ('São Gabriel da Palha', 8);
insert into Cidades (nome_cidade, id_estado) values ('São José do Calçado', 8);
insert into Cidades (nome_cidade, id_estado) values ('São Mateus', 8);
insert into Cidades (nome_cidade, id_estado) values ('São Roque do Canaã', 8);
insert into Cidades (nome_cidade, id_estado) values ('Vargem Alta', 8);
insert into Cidades (nome_cidade, id_estado) values ('Venda Nova do Imigrante', 8);
insert into Cidades (nome_cidade, id_estado) values ('Viana', 8);
insert into Cidades (nome_cidade, id_estado) values ('Vila Pavão', 8);
insert into Cidades (nome_cidade, id_estado) values ('Vila Valério', 8);
insert into Cidades (nome_cidade, id_estado) values ('Vila Velha', 8);
insert into Cidades (nome_cidade, id_estado) values ('Vitória', 8);
insert into Cidades (nome_cidade, id_estado) values ('Água Doce do Norte', 8);
insert into Cidades (nome_cidade, id_estado) values ('Águia Branca', 8);







CREATE TABLE Carroceria (
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
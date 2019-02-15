-- PARA VEICULO
-- CARROCERIA
INSERT INTO carroceria VALUES
  (0, 'Baú'),
  (0, 'Baú Frigorífico'),
  (0, 'Sider'),
  (0, 'Caçamba'),
  (0, 'Silo'),
  (0, 'Tanque'),
(0, 'Cegonheiro');
-- ESPECIE
INSERT INTO especie VALUES
  (0, 'ESPECIE');
-- MARCA
INSERT INTO marca VALUES
 (0, 'MARCA 01');
 -- CATEGORIA
 INSERT INTO categoria VALUES
   (0, 'PESADOS'),
   (0, 'MÉDIOS'),
 (0, 'LEVES');
 -- VEICULO CATEGORIA
 INSERT INTO veiculo_categoria VALUES
   (0, 'RODOTREM', 1),
   (0, 'BITREM', 1),
   (0, 'BITTRUCK',2),
   (0, 'TRUCK',2),
(0, 'TOCO',1);
-- FORMA PAGAMENTO
INSERT INTO forma_pagamento VALUES
  (0, 'Boleto');

  -- VEICULOS

 -- INSERT INTO veiculos VALUES
 --   (0, 'PROPRIETARIO', 'placa' ,'ENDERECO', now(), 'email', 'NAO', 'MODELO', 2000, 'RNTRC', 'NAO', 'CNH', 'contato', 'tipo', 'telefone', 'NAO', 'senha', 1, 1, 1, 1);
  
  INSERT INTO veiculos VALUES
   (0, 'PROPRIETARIO' ,'ENDERECO', now(), 'email', 'NAO', 'MODELO', 2000, 'RNTRC', 'NAO', 'CNH','NAO', 1, 1, 1, 1);



 -- PARA EMPRESA  --> FRETES
 -- RAMO
 INSERT INTO ramo VALUES
   (0, 'TRANSPORTE');
 -- EMPRESA
 INSERT INTO empresa VALUES
   (0, 'RAZAO', 'CNPJ', 'EMAIL', now(), 'endereco', 'bairro', 'complemento', 'nome fantasia', 'inscricao_estadual', 'url_facebook_empresa', 'CEP', 'foto', 'site', 'skype', 'nextel', 'fax', 'url_facebook', 'contato', 'url_facebook2', 'contato2', 'url_facebook3', 'contato3', 'telefone_comercial', 'contato_comercial', 'celular', 'operadora', 'contato1', 'whatsapp', 'E_mail_autenticacao', 'senha_autenticacao', 1,1);
 -- PARA FRETES
  -- FRETES

  INSERT INTO frete VALUES (0, 'CIDADE_SAIDA', 'CIDADA_ENTREGA', 'UF_SAIDA', 'UF_ENTREGA', '0 KM', 'PRODUTO', '', '', 'informações frete', '00', '00', 1, 1, 1, 0, 1,1, now());

  -- COMPLEMENTO
  INSERT INTO complemento_carga VALUES (0, 'qtd', 'peso', 'volume', 1);

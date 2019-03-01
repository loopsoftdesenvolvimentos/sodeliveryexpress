-- DÚVIDAS
-- (0, '', '','')
INSERT INTO duvidas VALUES
  (0, 'Como Funciona a Só Delivery Express?', 'A Só Delivery Express é uma ferramenta destinada conectar Transportadoras, Logísticas, Embarcadoras, Agenciadoras, Industrias e Comercio Locais que necessitam de entregadores de pequenos porte até grandes veículos como por Exemplo de Motos a Carretas 9 Eixos chamados de "Rodo trem" o cadastro para esta categoria é Gratuito por 30 dias podendo testar a plataforma nesse período sem custo algum após este período a mensalidade custa R$ 100,00 ao Mês com o pagamento via Boleto bancário. Para os Entregadores que necessitam de cargas de pequeno, médio e grande porte Basta que cadastre seu veículo na Plataforma e diariamente faça o "Checkin" Facilitando a busca de veículos próximos a cargas e aumentando a chance de ter um contato diretamente de quem está ofertando a carga, além disso os entregadores tem o acesso Gratuito ao painel de cargas podendo procurar uma carga de sua preferência sem custo nenhum.', ''),
  (0, 'Quem pode utilizar a Só Delivery Express?', 'Como Transportadoras, Logísticas, Agências de Cargas, Embarcadores, Industrias, e Comércio Local: Quem possui cargas destinadas a veículos pequeno Porte até Veículos de Grande Porte.  Como Entregadores: Motoristas que possuem veículos de pequeno Porte como Motos, utilitários, Pick Ups abertas e fechadas Até veículos de Grande porte para Viagens Intermunicipais como Caminhões Toco, Truck, ¾, Carretas 5 Eixos, Carreta LS, Carreta Vanderléia, Bi trem e Rodo trem.',''),
  (0, 'Como se cadastrar na Plataforma?', 'Para se cadastrar como Transportadoras, Logísticas Embarcadoras, Agenciadoras, Industrias e Comercio Locais basta entrar no site www.sodeliveryexpress.com.br localizar no canto superior direito ou no Rodapé o link "Cadastre-se ou Faça seu Login" em seguida acessar a página de Cadastro Preencha Todos os Campos Solicitados  Após o Procedimento seu Cadastro permanecerá Liberado Durante o Período de Teste de 30 dias que Poderá ser Renovado Após o Pagamento da assinatura. Para Entregadores Localize o Link cadastre seu Veículo escolha a categoria que seu veículo se enquadra e Preencha o Formulário Completo com Todas as Informações do Seu veículo a Só Delivery Express Não Manda Alertas de Cargas, Por isso se mantem a importância de se Fazer o "Checkin" Diariamente.',''),
  (0, 'Como cadastrar ou Procurar uma carga na Plataforma?', 'O processo é simples. Basta ter cadastro como Transportador, Logística Embarcador, Agenciador, Industrias ou Comercio Local, Após isso fazer o Login e acessar a área administrativa ir até cadastrar cargas e preencher Todos os campos que se enquadra melhor a sua carga Além disso você Pode complementar o cadastro da sua carga no campo de observações e Especificar algo como "necessário ter Buonny ou baú mínimo 100 m³". Para os Entregadores o processo pode ser dividido em duas opções: Através do "Checkin" Facilitando que quem possui a carga e necessitando de um veículo que se enquadre ao seu encontre-o mais facilmente ou pela Busca manual das cargas disponíveis no site através da nossa lista de fretes atualizada a cada instante de uma nova carga cadastrada na plataforma ou pela busca pelo filtro localizado na parte inferior esquerda do site.',''),
(0, 'Pago ou Recebo os Fretes diretamente da Só Delivery Express?', 'A Só Delivery Express não é responsável pelos pagamentos de Fretes e nem pelo recebimento nossa Plataforma e direcionada Apenas a Conectar empresas a entregadores, Não temos qualquer Vínculo a Transportadoras, Logísticas, Embarcadoras, Agenciadoras, Industrias e Comercio Locais ou a entregadores, sendo assim se isentando de qualquer Problemas que Venham a acontecer. Para uma maior segurança Recomendamos algumas Dicas: Contratantes: 1. Sempre Faça os Pagamentos de acordo com o nome ou empresa cadastrada na ANTT do Veículo. 2.Sempre Faça Seguros e consultas em Gerenciadoras de Riscos do veículos contratado. 3.Procure Sempre solicitar Rastreamento nos Fretes Cadastrados. Entregadores: 1. Sempre Procure Procurar Informações sobre a carga ser Real. 2. Sempre Faça Uma pesquisa sobre a empresa anunciante. 3. Procure Sempre solicitar Adiantamento de Valores antes.','Além disso a Só delivery Express Não é responsável pelos pagamentos Fora do mínimo da Tabela ANTT');


-- PARA VEICULO
-- CARROCERIA
INSERT INTO carroceria VALUES
  (0, 'Baú'),
  (0, 'Baú Frigorífico'),
  (0, 'Slider'),
  (0, 'Mochila(moto)'),
  (0, 'Baú(moto)'),
  (0, 'Grande Baixa'),
  (0, 'Graneleiro'),
  (0, 'Prancha'),
  (0, 'Bug Porta Container'),
  (0, 'Munk'),
  (0, 'Silo'),
  (0, 'Tanque'),
  (0, 'Gaiola'),
  (0, 'Cegonheiro'),
(0, 'Apenas Cavalo');

-- ESPECIE
INSERT INTO especie VALUES
  (0, 'Animais'),
  (0, 'Big Bag'),
  (0, 'Bobina'),
  (0, 'Big Bag'),
  (0, 'Caixas'),
  (0, 'Container'),
  (0, 'Diversos'),
  (0, 'Fardos'),
  (0, 'Fracionada'),
  (0, 'Granel'),
  (0, 'Metro Cúbico'),
  (0, 'Milheiro'),
  (0, 'Mudanças'),
  (0, 'Paletes'),
  (0, 'Passageiro'),
  (0, 'Sacos'),
  (0, 'Tambor'),
(0, 'Unidades');

-- MARCA
 insert into marca (desc_marca) values
   ('Ford'),
   ('Hyundai'),
   ('Iveco'),
   ('Mercedes-Benz'),
   ('Scania'),
   ('Stralis'),
   ('Tector'),
   ('Volto'),
 ('Volkswagen');

 -- CATEGORIA
 INSERT INTO categoria VALUES
   (0, 'Pesados'),
   (0, 'Médios'),
 (0, 'Leves');
 -- VEICULO CATEGORIA
 INSERT INTO veiculo_categoria VALUES
  (0, 'Moto', 3),
  (0, 'Fiorinos', 3),
  (0, 'HR', 3),
  (0, 'Master', 3),
  (0, 'Toco', 3),
  (0, 'VLC', 3),
  (0, '3/4', 3),
  (0, 'Truck',2),
  (0, 'Bitruck',2),
  (0, 'Rodotrem',  1),
  (0, 'Vanderléria',  1),
  (0, 'Bitrem',  1),
  (0, 'Carreta LS',  1),
(0, 'Carreta',  1);
-- FORMA PAGAMENTO
INSERT INTO forma_pagamento VALUES
  (0, 'Boleto');

  -- VEICULOS
  INSERT INTO veiculos VALUES
    (0, 'PROPRIETARIO', 'placa' ,'ENDERECO', now(), 'email', 'NAO', 'MODELO', 2000, 'RNTRC', 'NAO', 'CNH', 'tipo', 'NAO', 'senha', 1, 1, 1, 1, 'telefone', 'contato');

  -- INSERT INTO veiculos VALUES
  --  (0, 'PROPRIETARIO' ,'ENDERECO', now(), 'email', 'NAO', 'MODELO', 2000, 'RNTRC', 'NAO', 'CNH','NAO', 1, 1, 1, 1);



 -- PARA EMPRESA  --> FRETES
 -- RAMO
 INSERT INTO ramo VALUES
   (0, 'Transportadoras'),
   (0, 'Embarcadoras'),
   (0, 'Agenciadoras'),
   (0, 'Distribuidoras'),
   (0, 'Comércio Local'),
 (0, 'Indústria');

 -- EMPRESA
 INSERT INTO empresa VALUES
   (0, 'RAZAO', 'CNPJ', 'EMAIL', now(), 'endereco', 'bairro', 'complemento', 'nome fantasia', 'inscricao_estadual', 'url_facebook_empresa', 'CEP', 'foto', 'site', 'skype', 'nextel', 'fax', 'url_facebook', 'contato', 'url_facebook2', 'contato2', 'url_facebook3', 'contato3', 'telefone_comercial', 'contato_comercial', 'celular', 'operadora', 'contato1', 'whatsapp', 'E_mail_autenticacao', 'senha_autenticacao', 1,1);
 -- PARA FRETES
  -- FRETES

  INSERT INTO frete VALUES (0, 'CIDADE_SAIDA', 'CIDADA_ENTREGA', 'UF_SAIDA', 'UF_ENTREGA', '0 KM', 'PRODUTO', '', '', 'informações frete', '00', '00', 1, 1, 1, 0, 1,1, now());

  -- COMPLEMENTO
  INSERT INTO complemento_carga VALUES (0, 'qtd', 'peso', 'volume', 1);

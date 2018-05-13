-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/05/2018 às 00:42
-- Versão do servidor: 5.7.22
-- Versão do PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `dados`
--

INSERT INTO `dados` (`nome`, `sobrenome`, `cargo`, `id`) VALUES
('Eduardo', 'Alexandre', 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `noticia` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `noticia`, `foto`, `descricao`) VALUES
(1, 'Mulher é socorrida em estado grave após carros baterem de frente na Via Costeira, em Natal', 'Dois carros bateram de frente na manhã desta terça-feira (24) na Via Costeira, na Zona Leste de Natal. Uma mulher foi socorrida pelo SAMU em estado grave.\r\n\r\nSegundo o Comando de Policiamento Rodoviário Estadual (CPRE), o acidente aconteceu por volta das 7h, próximo ao hotel Imirá. A Via Costeira é o principal corredor hoteleiro da cidade. O trânsito ficou praticamente parado após a colisão, mas aos poucos voltou a fluir normalmente.\r\n\r\nA mulher estava em um carro modelo Ford Ka e seguia em direção a Ponta Negra, quando perdeu o controle do veículo. Desgovernado, o carro derrubou um poste, atravessou para a pista contrária e atingiu de frente um Corolla.\r\n\r\nDepois de ser retirada das ferragens, a mulher foi levada em estado grave para o Pronto-Socorro Clóvis Sarinho. No outro veículo, ninguém ficou ferido.', 'foto3.jpg', 'Dois carros bateram de frente na manhã desta terça-feira (24).'),
(2, 'Mulher é socorrida em estado grave após carros baterem de frente na Via Costeira, em Natal', 'Dois carros bateram de frente na manhã desta terça-feira (24) na Via Costeira, na Zona Leste de Natal. Uma mulher foi socorrida pelo SAMU em estado grave.\r\n\r\nSegundo o Comando de Policiamento Rodoviário Estadual (CPRE), o acidente aconteceu por volta das 7h, próximo ao hotel Imirá. A Via Costeira é o principal corredor hoteleiro da cidade. O trânsito ficou praticamente parado após a colisão, mas aos poucos voltou a fluir normalmente.\r\n\r\nA mulher estava em um carro modelo Ford Ka e seguia em direção a Ponta Negra, quando perdeu o controle do veículo. Desgovernado, o carro derrubou um poste, atravessou para a pista contrária e atingiu de frente um Corolla.\r\n\r\nDepois de ser retirada das ferragens, a mulher foi levada em estado grave para o Pronto-Socorro Clóvis Sarinho. No outro veículo, ninguém ficou ferido.', 'whatsapp-image-2018-04-24-at-08.05.20.jpeg', 'Mulher é socorrida em estado grave após carros baterem de frente na Via Costeira.'),
(3, '\'Cegonheiros\' fazem protesto e complicam trânsito no Grande Recife', 'Motoristas de caminhões-cegonha se reuniram, nesta terça-feira (24), em um protesto pelas ruas do Grande Recife. A carreata partiu das proximidades do Centro de Convenções de Pernambuco, em Olinda, pouco antes das 13h, em direção ao bairro de Prazeres, em Jaboatão dos Guararapes.\r\n\r\nSegundo os integrantes do ato, o governo de Pernambuco tem descumprido o Programa de Desenvolvimento Automotivo (Prodeauto). A lei tem a finalidade de atrair e fomentar investimentos no setor automotivo mediante a concessão de incentivos fiscais na área do ICMS para contribuintes como estabelecimentos industriais e comerciais atacadistas de veículos nacionais ou importados e empresas sistemistas do setor automotivo.\r\n\r\nAo passarem pelo bairro de Santo Antônio, no Centro do Recife, os quase 40 caminhões causaram retenções no tráfego. Agentes e orientadores da Autarquia de Trânsito e Transporte Urbano de Pernambuco (CTTU) acompanham a carreata, que segue lentamente até Jaboatão.\r\n\r\nAo G1, o governo do estado informou que o Polo Automotivo Jeep é o responsável por contratar o serviço e, por isso, não se pronunciaria. A reportagem entrou em contato com a empresa para repercutir a reivindicação da categoria e aguarda resposta.\r\n\r\nOutros protestos\r\nEm fevereiro de 2018, o grupo realizou uma manifestação pelas ruas do Grande Recife pelo mesmo motivo. Em 2017, os “cegonheiros” estacionaram os veículos nas proximidades do Tribunal de Justiça de Pernambuco, em Santo Antônio, e na Praia de Boa Viagem.', 'centro-de-convencoes.jpg', 'Motoristas de caminhões-cegonha se reuniram, nesta terça-feira (24).'),
(4, 'Testemunhas da queda de jovens em Castelo do Piauí confirmam que área do acidente era de livre acesso', 'APolícia Civil do Piauí ouviu nesta terça-feira (24) duas testemunhas da queda de três jovens ao fazer uma selfie de uma ponte ferroviária na localidade Xinguara, zona rural de Castelo do Piauí. Segundo a Polícia Civil, o local fica a uma altura de aproximadamente 10 metros e a queda das jovens foi amortecida pela vegetação. As testemunhas confirmaram a localização das vítimas no momento da queda e que o local tem muitas visitas.\r\n\r\nA ponte ferroviária de onde as jovens caíram é localizada sobre o rio Cais, que divide Castelo do Piauí e Buriti dos Montes, e a pista não possui saída lateral, apenas plataformas que os moradores chamam de \"orelhas\". Na plataforma que desabou, as jovens contaram que as pessoas se abrigam quando o trem passa na ferrovia.\r\n\r\nO delegado questionou a empresa a respeito do acesso das pessoas ao local, já que em nota a Transnordestina informou que era uma área de acesso proibido. \"Solicitei informações para a empresa pela manutenção da ferrovia sobre isso\", destacou Francírio Queiroz . De acordo com a nota da Transnordestina a ponte é de uso exclusivamente ferroviário e a circulação de pessoas não autorizadas é proibida no local.\r\n\r\nO G1 procurou a empresa e aguarda posicionamento.\r\n\r\nSegundo o delegado Francírio Queiroz até o momento foram ouvidas duas pessoas que estavam no local. “Elas confirmaram que elas estavam em uma estrutura na parte externa da ponte e esta estrutura desabou. Agora estamos aguardando elas receberam alta para prestar depoimento\", disse o delegado”, comentou o delegado.\r\n\r\nDe acordo com o delegado o local não possui outros registros de acidentes e costuma ser bastante visitado. “A informação que tivemos é que é muito comum o acesso de pessoas ao local para fazer fotografias, principalmente no período chuvoso que tem as cheias do rio, mas não há histórico de acidentes no local”, finalizou.\r\n\r\nQueda deve ser caracterizada como acidente, diz delegado\r\nFrancírio Queiroz informou ainda que a apuração em torno do ocorrido continua, mas que deve ser caracterizada como acidente. “Acredito que se trata de uma questão de acidente que deve ser resolvida na seara cívil mesmo”, pontuou.\r\n\r\nEm contato coma a empresa o delegado informou que aguarda ainda um parecer técnico sobre a situação da ponte. “A própria empresa responsável pela ferrovia enviou uma equipe ao local para fazer o levantamento sobre o local. Eles nos informaram que vai vir uma equipe de engenharia para fazer um parecer técnico a respeito da estrutura da ponte”, comentou acrescentando que as jovens serão ouvidas após terem alta médica.', 'whatsapp-image-2018-04-23-at-15.53.24.jpeg', 'A Polícia Civil do Piauí ouviu nesta terça-feira (24).');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL,
  `id_dados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `token`, `id_dados`) VALUES
(1, 'admin', '2a8277faa1cf6f3643d11055589e9073', '94a08da1fecbb6e8b46990538c7b50b2', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

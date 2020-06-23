-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23-Jun-2020 às 08:55
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sis_davoi1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner2`
--

CREATE TABLE `banner2` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner2`
--

INSERT INTO `banner2` (`id`, `img`, `link`) VALUES
(11, '5e4c99d5763d7_bannerdavoi.png', 'bfghd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `img` varchar(99) NOT NULL,
  `link` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `img`, `link`) VALUES
(7, '5ea9dd98b4652_banner5davoi.png', 'Diversão etc'),
(10, '5ea9daa96299e_banner4davoi.png', 'PENSOU EM INTERNET...'),
(14, '5ea9d776d948c_banner3davoi.png', 'distanciamento social');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_users`
--

CREATE TABLE `cad_users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_users`
--

INSERT INTO `cad_users` (`id`, `usuario`, `senha`) VALUES
(1, 'davoi', 'inicial2011');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(6, 'LENÇÓIS PAULISTA - SP'),
(7, 'Alfredo Guedes - SP'),
(8, 'PRATÂNIA - SP'),
(9, 'MACATUBA - SP'),
(10, 'BARRA BONITA - SP'),
(11, 'IGARAÇÚ DO TIETÊ - SP'),
(12, 'VANGLÓRIA - SP (DISTRITO)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculos`
--

CREATE TABLE `curriculos` (
  `id` int(11) NOT NULL,
  `urli` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curriculos`
--

INSERT INTO `curriculos` (`id`, `urli`, `nome`, `area`) VALUES
(4, 'Hydrangeas.jpg', 'Paulo', 'Técnico'),
(5, 'Koala.jpg', 'Juan Garcia', 'Serviços Gerais'),
(8, 'novaResolução.pdf', 'Juan Garcia', 'Engenharia'),
(9, 'novaResolução.pdf', 'Juan Carlos', 'Manutenção'),
(10, 'novaResolução.pdf', 'Rafaela', 'Manutenção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desc_trabalhe_conosco`
--

CREATE TABLE `desc_trabalhe_conosco` (
  `id` int(11) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `desc_trabalhe_conosco`
--

INSERT INTO `desc_trabalhe_conosco` (`id`, `descricao`) VALUES
(3, 'Bem-Vindo a central de empregos Davoi.Já pensou em trabalhar em um lugar onde o principal objetivo é crescer junto e cooperar? Na Davoi é assim! Se você chegou até aqui em busca de oportunidade, acreditamos que deseja fazer parte de um sistema que promove transformação social. Nossa oferta vai além de soluções financeiras aos nossos cooperados, buscamos o equilíbrio entre o desenvolvimento econômico e social das comunidades nas quais nossa marca está inserida. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dicas`
--

CREATE TABLE `dicas` (
  `id` int(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dicas`
--

INSERT INTO `dicas` (`id`, `link`, `descricao`) VALUES
(1, 'https://www.youtube.com/embed/aTMYEPcXkFo', 'ACELERE SEU WI-FI'),
(2, 'https://www.youtube.com/embed/skd9WzulAuo', '10 DICAS DE ESPECIALISTAS PARA NAVEGAÇÃO SEGURA'),
(3, 'https://www.youtube.com/embed/nJoGZfyjXbU', 'NAVEGANDO NA INTERNET COM SUPER VELOCIDADE'),
(4, 'https://www.youtube.com/embed/ZTyVMaZhNQM', 'O SEGREDO PARA TER UM WIFI MAIS RÁPIDO EM CASA'),
(5, 'https://www.youtube.com/embed/JXjF_IWxrU4', 'DICAS PARA SEU PROVEDOR'),
(6, 'https://www.youtube.com/embed/QFdkggG34wo', 'SEGURANÇA NA INTERNET'),
(7, 'https://www.youtube.com/embed/wMJYf4QvA-4', 'COMPRAS SEGURAS NA INTERNET.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `descricao`) VALUES
(1, 'juangarcia172498@gmail.com'),
(2, 'atendimento12@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_page_wifi`
--

CREATE TABLE `imagens_page_wifi` (
  `id` int(11) NOT NULL,
  `img_roteador` varchar(50) DEFAULT NULL,
  `img_app` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens_page_wifi`
--

INSERT INTO `imagens_page_wifi` (`id`, `img_roteador`, `img_app`) VALUES
(1, 'roteador.jpg', 'roteador_spec.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parcerias`
--

CREATE TABLE `parcerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `urli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parcerias`
--

INSERT INTO `parcerias` (`id`, `img`, `titulo`, `descricao`, `urli`) VALUES
(28, '5e5815fe7ed0f_bar.jpg', 'Restaurante', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(29, '5e5816ee1390d_bar.jpg', 'Bar', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(30, '5e58170c51448_bar.jpg', 'Restaurante', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(31, '5e581795171e6_groupofpeoplegatheringinsidebar1058277.jpg', 'Restaurante', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(32, '5e5817ec8ebfa_groupofpeoplegatheringinsidebar1058277.jpg', 'Bar', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(33, '5e5819781d219_groupofpeoplegatheringinsidebar1058277.jpg', 'Restaurante', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(34, '5e581acfbcb71_twowomensittingonchairsinfrontofeachother8877231.jpg', 'Bar', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(35, '5e581b3529b19_twowomensittingonchairsinfrontofeachother8877231.jpg', 'Restaurante', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google'),
(37, 'two-women-sitting-on-chairs-in-front-of-each-other-887723 (1).jpg', 'Bar', 'Av. Brasil, 1386- Centro', 'https://google.com.br/google');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `tel` varchar(100) NOT NULL DEFAULT '0',
  `endereco` varchar(200) NOT NULL DEFAULT '0',
  `cidade` varchar(200) NOT NULL DEFAULT '0',
  `plano` varchar(200) NOT NULL DEFAULT '0',
  `roteador` varchar(200) NOT NULL DEFAULT '0',
  `status_pedido` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nome`, `tel`, `endereco`, `cidade`, `plano`, `roteador`, `status_pedido`, `tipo`) VALUES
(1, 'Carlos', '(14)99751-5906', 'Rua: Caet?s,131', 'Len?ois Paulista- SP', '200 mega', 'nao', 'EM ABERTO', ''),
(2, 'Carlos', '', 'Rua: Caet?s,131', 'Len?ois Paulista- SP', '200 mega', 'SIM', 'CANCELADO', ''),
(3, 'Carlos', '(14)99751-5906', 'Rua: Caet?s,131', 'Len?ois Paulista- SP', '100 mega', 'nao', 'EM ABERTO', ''),
(4, 'AM?LIA', '(14)99751-5906', 'Rua: fulano,121', 'Agudos- SP', '100 mega', 'nao', 'EM ABERTO', ''),
(5, 'Felipe', '999-9999', 'caretes', 'Agudos- SP', '300 mega', 'SIM', 'FECHADO', ''),
(6, 'Marcio Fulano', '99827-2256', 'R. Caetes, 131', 'Lencois Paulista- SP', '200 mega', 'SIM', 'EM ABERTO', ''),
(7, 'juan', '123465789', 'hguygyigig', 'Agudos- SP', '200 mega', 'nao', 'FECHADO', ''),
(8, 'juan', '212332', 'tghytrfhrfgrd', 'Lencois Paulista- SP', '200 mega', 'nao', 'CANCELADO', ''),
(9, 'Lidiane Fernandes ', '1499999999', 'Reinaldo monteiro', 'Lencois Paulista- SP', '100 mega', 'nao', 'FECHADO', ''),
(10, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '100 mega', 'SIM', 'EM ABERTO', ''),
(16, 'maria barros', '9999-9999', 'R. xavantes', 'Lencois Paulista- SP', '200 mega', 'nao', 'FECHADO', ''),
(17, 'maria barros', '9999-9999', 'R. xavantes', 'Lencois Paulista- SP', '200 mega', 'nao', 'EM ABERTO', ''),
(18, 'Joao Carlos', '1499876-9999', 'R. Aimor?s, 125', 'Lencois Paulista- SP', '100 mega', 'SIM', 'EM ABERTO', ''),
(19, 'Juan Garcia', '99999-999999', 'R GERALDO PEREIRA DE, BARROS 461 CENTRO', 'Lencois Paulista- SP', '200 mega', 'SIM', 'FECHADO', ''),
(20, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '100 mega', 'SIM', 'EM ABERTO', ''),
(21, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '200 mega', 'SIM', 'EM ABERTO', 'RESIDENCIAL'),
(22, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '200 mega', 'SIM', 'EM ABERTO', 'RESIDENCIAL'),
(23, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '100 mega', 'SIM', 'EM ABERTO', 'RESIDENCIAL'),
(24, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '100 mega', 'nao', 'EM ABERTO', 'RESIDENCIAL'),
(25, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '300 mega', 'SIM', 'EM ABERTO', 'RESIDENCIAL'),
(26, 'Juan Garcia', '+5514997515906', 'Rua Caet?s, 131', 'Lencois Paulista- SP', '200 mega', 'nao', 'EM ABERTO', 'RESIDENCIAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(11) NOT NULL,
  `nome_plano` varchar(50) DEFAULT NULL,
  `tipo_plano` varchar(50) NOT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `id_cidade` varchar(50) DEFAULT NULL,
  `taxa_inst` varchar(5) NOT NULL,
  `valor_inst` varchar(10) NOT NULL,
  `download` text NOT NULL,
  `upload` text NOT NULL,
  `instalacao` text NOT NULL,
  `desc_boleto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `nome_plano`, `tipo_plano`, `valor`, `id_cidade`, `taxa_inst`, `valor_inst`, `download`, `upload`, `instalacao`, `desc_boleto`) VALUES
(19, '200 MEGAS', 'RESIDENCIAL', '179,90', '6', 'Insta', '', '200 ', '150', 'Instalação gratuita', 'Desconto de R$ 50,00 no boleto.'),
(20, '40 Megas', 'RESIDENCIAL', '69,90', '6', 'NÃO', 'Isento par', '', '', '', ''),
(25, '110 MEGAS', 'RESIDENCIAL', '79,90', '6', 'Insta', '75,00', '120', '200', 'Instalação grátis', 'Desconto de R$5,00 no boleto.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos_cidades`
--

CREATE TABLE `planos_cidades` (
  `id` int(11) NOT NULL,
  `id_cidade` int(11) DEFAULT NULL,
  `id_plano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pop_up`
--

CREATE TABLE `pop_up` (
  `id` int(11) NOT NULL,
  `urli` varchar(300) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pop_up`
--

INSERT INTO `pop_up` (`id`, `urli`, `cidade`) VALUES
(2, '5e590880db848_popup.jpg', '6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roteador`
--

CREATE TABLE `roteador` (
  `id` int(10) UNSIGNED NOT NULL,
  `carac_roteador` varchar(1000) NOT NULL DEFAULT '0',
  `carac_app` varchar(1000) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `roteador`
--

INSERT INTO `roteador` (`id`, `carac_roteador`, `carac_app`) VALUES
(1, 'Compatível com o padrão 802.11ac - a nova geração do Wi-Fi. Conexões simultâneas de 2.4GHz 300Mbps e 5GHz 433Mbps para um total de 733Mbps de largura de banda disponível. 3 antenas externas oferecem sinal omnidirecional estável', 'otimo app para controlar sua rede com segurança.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banner2`
--
ALTER TABLE `banner2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cad_users`
--
ALTER TABLE `cad_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curriculos`
--
ALTER TABLE `curriculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `desc_trabalhe_conosco`
--
ALTER TABLE `desc_trabalhe_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dicas`
--
ALTER TABLE `dicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imagens_page_wifi`
--
ALTER TABLE `imagens_page_wifi`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `parcerias`
--
ALTER TABLE `parcerias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planos_cidades`
--
ALTER TABLE `planos_cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pop_up`
--
ALTER TABLE `pop_up`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `roteador`
--
ALTER TABLE `roteador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banner2`
--
ALTER TABLE `banner2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cad_users`
--
ALTER TABLE `cad_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `curriculos`
--
ALTER TABLE `curriculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `desc_trabalhe_conosco`
--
ALTER TABLE `desc_trabalhe_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dicas`
--
ALTER TABLE `dicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imagens_page_wifi`
--
ALTER TABLE `imagens_page_wifi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `parcerias`
--
ALTER TABLE `parcerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `planos_cidades`
--
ALTER TABLE `planos_cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pop_up`
--
ALTER TABLE `pop_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `roteador`
--
ALTER TABLE `roteador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Feb 04, 2017 alle 16:58
-- Versione del server: 10.1.13-MariaDB
-- Versione PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progettotecweb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `id` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `src` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL,
  `titolo` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `autore` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `immagini`
--

INSERT INTO `immagini` (`id`, `alt`, `src`, `title`, `href`, `titolo`, `autore`, `data`) VALUES
(1, 'Internet Delle Cose', 'img/things.jpg', 'Internet Delle Cose', '', 'Bluetooth Mesh che cosa sono? Perch&egrave sono utili in progetti Internet of Things?', 'Marco Galtarossa', '2016-12-06'),
(2, 'Machine Learnig', 'img/machine.jpg', 'Machine Learning', '', 'Cos''&egrave??? il Machine Learning?', 'Malick Bodian', '2017-01-09'),
(3, 'BOT', 'img/bot.png', 'BOT', '', 'I BOT considerati come le nuove App: quali sono le opportunita? per le aziende?', 'Marco Galtarossa', '2017-01-27');

-- --------------------------------------------------------

--
-- Struttura della tabella `pagine`
--

CREATE TABLE `pagine` (
  `id` int(10) NOT NULL,
  `pagina` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `pagine`
--

INSERT INTO `pagine` (`id`, `pagina`) VALUES
(1, 'STORIA'),
(2, 'TEAM'),
(3, 'ARTICOLI'),
(4, 'PROGETTI'),
(5, 'CONTATTACI');

-- --------------------------------------------------------

--
-- Struttura della tabella `progetti`
--

CREATE TABLE `progetti` (
  `id` int(11) NOT NULL,
  `src` varchar(50) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `progetti`
--

INSERT INTO `progetti` (`id`, `src`, `titolo`, `alt`, `title`, `href`) VALUES
(1, 'img/bike_phone.png', 'GPS DA BICI', 'Gps da bici', 'Gps da b', ''),
(2, 'img/App.jpg', 'XZK:MOBILE APP', 'XZK:MOBILE APP', 'XZK:MOBILE APP', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `storia`
--

CREATE TABLE `storia` (
  `id` int(10) NOT NULL,
  `storia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `storia`
--

INSERT INTO `storia` (`id`, `storia`) VALUES
(1, 'Il passaggio standard del Lorem Ipsum, utilizzato sin dal sedicesimo secolo\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\nLa sezione 1.10.32 del "de Finibus Bonorum et Malorum", scritto da Cicerone nel 45 AC\r\n\r\n"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"\r\n\r\nTraduzione del 1914 di H. Rackham\r\n\r\n"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"\r\n\r\nLa sezione 1.10.33 del "de Finibus Bonorum et Malorum", scritto da Cicerone nel 45 AC\r\n\r\n"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."\r\n\r\nTraduzione del 1914 di H. Rackham\r\n\r\n"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."\r\n');

-- --------------------------------------------------------

--
-- Struttura della tabella `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `ruolo` varchar(100) NOT NULL,
  `src` varchar(100) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `href` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `team`
--

INSERT INTO `team` (`id`, `nome`, `cognome`, `ruolo`, `src`, `alt`, `title`, `href`) VALUES
(1, 'MARCO', 'GALTAROSSA', 'Chief Executive Office', 'img/Galta.png', 'Marco Galtarossa''s wrap', 'Marco Galtarossa', ''),
(2, 'MALICK', 'BODIAN', 'Analyst & Software Developer', 'img/Galta.png', 'Malick Bodian''s wrap', 'Malick Bodian', '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `pagine`
--
ALTER TABLE `pagine`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `progetti`
--
ALTER TABLE `progetti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `storia`
--
ALTER TABLE `storia`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la tabella `pagine`
--
ALTER TABLE `pagine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la tabella `progetti`
--
ALTER TABLE `progetti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `storia`
--
ALTER TABLE `storia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

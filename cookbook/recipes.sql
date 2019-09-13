-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Wrz 2019, 22:27
-- Wersja serwera: 10.3.15-MariaDB
-- Wersja PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cookbook`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recipes`
--

CREATE TABLE `recipes` (
  `id` int(40) NOT NULL,
  `przepis` text COLLATE utf8_polish_ci NOT NULL,
  `produkt` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `recipes`
--

INSERT INTO `recipes` (`id`, `przepis`, `produkt`) VALUES
(1, 'Zupa brokułowa', 'brokuł'),
(2, 'Chłodnik', 'ogórki'),
(3, 'Zupa jarzynowa z cukinią i soczewicą', 'cukinia'),
(4, 'Zupa fasolkowa', 'fasolka szparagowa'),
(5, 'Zupa gołąbkowa', 'mięso mielone'),
(6, 'Zupa rybna\r\nz kawałkami panierowanej ryby i tartymi warzywami', 'ryba'),
(7, 'Filety drobiowe w lekkim sosie koperkowym', 'filet drobiowy'),
(8, 'Quinoa po meksykańsku z jednej patelni', 'quinoa'),
(9, 'Makaron z boczkiem i cukinią', 'cukinia'),
(10, 'Schab w sosie koperkowym', 'schab'),
(11, 'Kurczak z warzywami', 'kurczak'),
(12, 'Łosoś w kremowym sosie z papryką i szpinakiem', 'łosoś'),
(13, 'Muffiny z truskawkami', 'truskawki'),
(14, 'Placki twarogowe', 'jajka'),
(15, 'Prosta szarlotka', 'jabłka'),
(16, 'Brownie z malinami', 'czekolada'),
(17, 'Puszyste ciasto z morelami', 'jajka'),
(18, 'Ciasto wiewiórka', 'czekolada'),
(19, 'Smalec z fasoli', 'biała fasola'),
(20, 'Tagine z bakłażana', 'bakłażan'),
(21, 'Gołąbki z soczewicą, pieczarkami, warzywami i ryżem', 'ryż'),
(22, 'Pasztet wegetariański', 'soczewica'),
(23, 'Wegetariańskie burgery z grillowanym serem halloumi', 'ser'),
(24, 'Żurek wegetariański', 'zakwas'),
(26, 'wegatriańskie', 'vege'),
(27, 'zupa', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

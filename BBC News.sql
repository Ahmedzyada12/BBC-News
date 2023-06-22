-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 يونيو 2023 الساعة 02:05
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoz`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'sports'),
(2, 'Economy'),
(17, 'Arts'),
(18, 'politics');

-- --------------------------------------------------------

--
-- بنية الجدول `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `comment_date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `name`, `content`, `comment_date`, `status`) VALUES
(1, 1, ' hhju ', 'xcczc', '2023-05-24', 'approved'),
(2, 1, ' aadc ', 'fsffffs', '2023-05-24', 'approved'),
(3, 2, ' sdad ', 'ahnmed', '2023-05-24', 'approved'),
(4, 1, ' ss ', 'zz', '2023-05-24', 'approved'),
(5, 16, ' Ø¹ Ø§Ù„Ø±Ø§ÙŠÙ‚ ', 'Ø§Ø­Ù„Ù‰ ÙˆØ§Ø­Ø¯', '2023-05-24', 'approved'),
(6, 10, ' ahmed zyada ', 'Ø¹ Ø§Ù„Ø±Ø§ÙŠÙ‚ Ù…ÙˆÙ‚Ø¹ Ù…ÙŠÙ‡ Ø§Ù„Ù…ÙŠÙ‡ Ø§Ù„Ù…ÙŠÙ‡', '2023-05-24', 'approved'),
(7, 14, ' ahmed zyada ', 'fgjnknkjk', '2023-05-24', 'approved'),
(8, 10, ' laptop ', 'Ù…Ø³Ø§ Ù…Ø³Ø§', '2023-05-24', 'approved');

-- --------------------------------------------------------

--
-- بنية الجدول `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `auther` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `post`
--

INSERT INTO `post` (`post_id`, `category_id`, `title`, `auther`, `publish_date`, `image`, `content`) VALUES
(1, 1, 'Al Ahly SC in international football1', 'Ahmedzyada', '2023-05-16', 'ahly.jpg', 'Al Ahly became the African and Middle Eastern club with the most victories in the FIFA Club World Cup, having won five matches in six participations in the competition.\n\nThe Red Eagles\' five victories in the competition put the club in third place in terms of the number of games won in the tournament, behind Real Madrid CF, who won 10 matches, and FC Barcelona, who achieved 7 victories.\n\nOur football first team managed to win the bronze medal in the 2020 FIFA Club World Cup, after defeating Brazil?s Palmeiras 3-2 on penalties. \n\nAs a result, Al Ahly became the first Arab and African club to win the bronze medal of this prestigious competition on two occasions, after repeating our achievement of 2006.\n\nOn a similar note, Al Ahly?s victory over Palmeiras is the first victory of an Egyptian team over a Brazilian side in an official game, after both SC Internacional and SC Corinthians Paulista defeated Al Ahly in the FIFA Club World Cup in 2006 and 2012.'),
(2, 2, 'The Economy of Egypt: Repeating History?!', 'Ahmedzyada', '2023-05-10', 'econ1.jpg', 'As the value of the Egyptian pound plummets, grocery shopping has changed for many middle-class Egyptians, becoming a strict exercise in currency control.\r\n\r\n\"Instead of buying 3 kilograms of rice when we go shopping, we just buy a kilo or a half kilo,\" explained Ahmed Hassan, 40, an accountant and father of three from the Shoubra neighborhood in Cairo. \"We\'re trying to reduce our expenditures. Unfortunately we can\'t limit everything because our children need certain things,\" he told DW.\r\n\r\nEgypt\'s currency has devalued by around one-third since late October and inflation currently stands at over 20%. Some economists suspect it\'s even worse than that. They put the unofficial rate ? which includes Egypt\'s huge informal economy ? as high as 101%.\r\n\r\nFood prices have doubled, salaries have halved and banks are restricting how much cash you can take out of your accounts: The financial free fall that many ordinary people in Egypt are experiencing today sounds very similar to the catastrophic economic crisis citizens in nearby Lebanon have been dealing with since 2019.'),
(3, 1, 'Mohamed Salah says he is\"not asking for crazy stuff\"', 'Ahmedzyada', '2023-05-17', 'salah.jpg', 'Mohamed Salah says he is \"not asking for crazy stuff\" in contract talks, as he reiterated that it is up to Liverpool to decide his future.whose deal at Anfield runs out in the summer of 2023, has publicly stated on multiple occasions that he wants to stay at Liverpool.But the two parties are yet to come to an agreement over new terms for the Premier League\'s top scorer, who is currently representing Egypt at the Africa Cup of Nations'),
(6, 2, 'Egypt?s economy: The arduous path ahead', 'Ahmedzyada', '2023-05-16', 'economy1.jpg', 'The fact is that Egypt?s economy during the last few years had been quite robust, to the point of adequately surviving the dire COVID19 lockdowns around the world. The International Monetary Fund IMF testified to that in its 2021 report which said that despite severe damage to the global economy on account of coronavirus pandemic, Egypt was among the few developing markets that continued to grow.\r\nEgypt?s thriving economy, however, began to flounder in 2022 with the onset of the Russia Ukraine war, western sanctions against Russia, and the consequent disruption in global supply chains. This disruption negatively affected Egypt given that the country is a net importer; its wheat imports are among the largest in the world.'),
(10, 1, 'Jurgen Klopp: Liverpool boss receives two-match ban for Paul Tierney comments', 'Ahmedzyada', '2023-05-18', 'spo.jpg', 'Liverpool manager Jurgen Klopp has received a two-match ban for comments he made about referee Paul Tierney after his side\'s 4-3 victory over Tottenham in April.\r\n\r\nIt means the German will miss Sunday\'s match against Aston Villa at Anfield.\r\n\r\nThe second game is suspended until the end of the 2023-24 season, meaning Klopp will not miss the final game of this campaign against Southampton.\r\n\r\nKlopp suggested Tierney had \"something against\" the Reds after the Spurs game.\r\n\r\nHe has also received a £75,000 fine having admitted improper conduct and saying he regretted making the comments.\r\n\r\nKlopp was shown a yellow card for celebrating Liverpool\'s 94th-minute winner in front of the fourth official and later claimed what Tierney said to him was \"not OK\".\r\n\r\nThe refereeing governing body, Professional Game Match Officials Limited, said at the time it \"strongly refutes\" any accusation Tierney\'s actions were \"improper\".\r\n\r\nLiverpool sent a letter in response to the charges three days after the match, suggesting emotions were heightened during a tense fixture and that while Klopp had not intended to \"question Tierney\'s integrity\", the referee had been involved in a number of \"questionable decisions\" involving the club.'),
(13, 2, 'Investing in a rules-based order will dominate the G7: Stephen Nagy in the Japan Times', 'Ahmedzyada', '2023-05-17', 'econ1.jpg', 'This year’s Group of Seven Summit in Hiroshima is taking place in the backdrop of four major challenges to our rules-based order: Russia’s invasion of the Ukraine, China’s global ambitions, North Korea’s nuclear brinkmanship and the divide with the Global South.\r\n\r\nHow the G7 collectively and concretely deals with these issues will shape the future of the rules-based order that has brought peace, prosperity and stability in the post-World War II period. Here is a list of priorities and issues the meeting needs to address:\r\n\r\nThe first priority for the G7 Summit will be to preserve that rules-based order. This means ensuring that the international community adheres to a set of agreed-upon norms and principles that govern the behavior of states.\r\n\r\nFor Japan and members of the G7, if there is not a rules-based order, they, like Ukraine, Taiwan or the Himalayan plateau dispute between India and China, can fall prey to Machiavellian, might-is-right approach to foreign policy.'),
(14, 2, 'All eyes on Taiwan: Preserving a hard-won liberty, the 2024 elections and beyond', 'Ahmedzyada', '2023-05-16', 'econ2.jpg', 'Taiwan, the democratic island nation of 23.5 million people, is today receiving unprecedented levels of attention from the international community. It wasn’t always so.\r\n\r\nLess than a decade ago, very few people besides academics and Asia specialists within the think tank community were cognizant of what is at stake in the Taiwan Strait. Facing financial challenges, international media organizations needed to trim staff, and oftentimes this meant the reduction, or outright closure, of their Taipei bureaus and relocation of their staff elsewhere. Foreign diplomats, meanwhile, rarely ranked Taiwan at the top of their list of preferred postings abroad and often regarded deployment to China as a means to secure the experience they needed to boost their careers.\r\n\r\nThis has all changed. Taiwan’s enviable handling of the Covid-19 pandemic, followed by Russia’s invasion of Ukraine, ongoing disruptions to global supply chains and the Asian tiger’s positioning as the key actor in the semiconductor industry, have engendered tremendous interest in – and concern over – Taiwan.\r\n\r\nThe fact that Taiwan is one of the most vibrant and consolidated democracies on the planet was never enough to focus minds abroad on why it is essential that the island nation ward off annexation by the People’s Republic of China (PRC). War in Ukraine, where deterrence failed and an ultra-personalistic authoritarian leader did the unthinkable by launching as devastating war of conquest against a sovereign neighbour, has compelled a reassessment of Taiwan’s value to the global system; many now realize that war in the Taiwan Strait would result in trillions of dollars in losses in global trade and a highly disruptive ripple effect on economies worldwide.'),
(16, 1, 'Aaron Ramsdale: Arsenal goalkeeper signs new contract', 'Ahmedzyada', '2023-05-14', 'spo1.jpg', 'Arsenal goalkeeper Aaron Ramsdale has signed a new \"long-term\" contract with the Premier League club.\r\n\r\nThe Gunners have not revealed the length of the deal but manager Mikel Arteta said he was \"looking forward to enjoying many more years of Aaron at the club\".\r\n\r\nRamsdale, 25, has played in all 36 league games during Arsenal\'s challenge for the title this season.\r\n\r\n\"The way Aaron\'s developed has been exceptional,\" added Arteta.\r\n\r\nRamsdale, whose previous contract was due to expire in 2025, joined Arsenal from Sheffield United in August 2021 in a deal worth £24m plus a further £6m in add-ons.\r\n\r\nHe has kept 13 top-flight clean sheets this season and has been capped by England three times.\r\n\r\nArsenal are second in the Premier League table, four points behind Manchester City who will win the title if the Gunners lose at Nottingham Forest on Saturday (17:30 BST).'),
(40, 18, 'Egypt Parliament agrees to Cabinet reshuffle of 13 ministerial portfolios ', 'Ahmedzyada', '2023-05-22', 'plo1.jpg', 'Egyptâ€™s House of Representatives, the lower house of parliament, on 13 August agreed to a cabinet reshuffle of 13 ministerial portfolios.\r\n\r\nThe 13 portfolios reshuffled comprise the ministries of education and technical education; water resources and irrigation; health and population; higher education and research; emigration and expatriate Egyptians; tourism and antiquities; trade and industry; civil aviation; local development; manpower; culture; public business sector; and military production.'),
(41, 18, 'Egypt builds integrated complex for secured and smart documents ', 'Ahmedzyada', '2023-05-22', 'plo2.jpg', ' Egyptâ€™s New Administrative Capital saw President Abdel-Fattah al-Sisi inaugurate an integrated complex for secured and smart documents. The complex which is the largest in the Middle East will issue through a unified central system all government papers and certificates, including ownership contracts, court certificates, electronic ID cards and driving licenses, travel passports, land registry powers of attorney, smart cards, government contracts, Thanawiya Amma and university certificates, and customs and finance authoritiesâ€™ documents.'),
(42, 18, 'Egypt signs 80m Euro border management agreement with EU ', 'Ahmedzyada', '2023-05-22', 'pol5.jpg', 'The EU delegation in Cairo has revealed that the European Union and Egypt have signed an agreement to launch the first phase of the 80 million Euro border management programme.\r\n\r\nBy signing the agreement, the authorities of the EU and those of Egypt aim to control illegal migration and human trafficking along Egyptâ€™s border, practices that have been increasing significantly in the last months, according to Schengen Visa Info.\r\n\r\nâ€œThe EU, IOM Egypt, and Civipolcf agree on a package to enhance EU-Egypt cooperation in migration management,â€ the EU in Egypt wrote on its official Twitter account.'),
(43, 17, 'Major Willem de Kooning exhibition to open during Venice Biennale ', 'Ahmedzyada', '2023-05-22', 'a1.jpg', 'A major exhibition exploring Willem de Kooningâ€™s passion for Italy is due to open next year in Venice, coinciding with the 2024 Biennale. The show, organised in partnership with the New York-based Willem de Kooning foundation, will run at the Gallerie dellâ€™Accademia from 16 April to 15 September.\r\n\r\nAccording to a gallery statement, the exhibition will be the first to explore the impact of De Kooningâ€™s two stays in Italy, in 1959 and 1969, on his work. â€œThe art he created in Italy and the influence of Italy on his subsequent paintings, drawings and sculpture in America have never before been thoroughly explored,â€ the statement adds'),
(44, 18, 'ADVERTISEMENT Egyptian administrative attachÃ© assistant at Khartoum Embassy killed', 'Ahmedzyada', '2023-05-22', 'pjo6.jpg', 'On the evening of 25 April, Egyptâ€™s Foreign Ministry mourned the death of Mohamed al-Gharawi, an assistant to the administrative attachÃ© at the Egyptian Embassy in Khartoum. Mr Gharawi was killed while heading from his home to the Egyptian Embassy to follow up on the evacuation of Egyptian nationals in Sudan.\r\n\r\nThe Ministryâ€™s statement said Gharawi was a symbol of sacrifice for the sake of the motherland.\r\nThe Egyptian mission in Sudan will continue to follow up the evacuation and safe return of nationals in Sudan, it stressed.\r\n\r\nâ€œMay Allah have mercy on the martyr of duty .. and grant his family patience and solace,â€ the statement concluded.'),
(45, 17, 'Artcurial auction house embroiled in provenance row with London dealer1', 'Ahmedzyada1', '2023-05-22', 'ar1.jpg', 'A London dealer is at odds with Artcurial over a painting he purchased last year, for which he claims that the Paris auction house was unwilling to provide the requisite provenance information to comply with anti-money laundering (AML) rules. Artcurial insists that it adhered to all its obligations at all times, and cancelled the sale last month.\r\nPatrick Matthiesen bought Narcissus (around 1640), a work recently reattributed to the French Baroque painter Laurent de la Hyre, for â‚¬918,400 (est â‚¬200,000-â‚¬300,000) on 9 November 2022. The large canvas had no provenance other than a 1929 â€œanonymous saleâ€ at Christieâ€™s in London. It had then disappeared but is mentioned by Pierre Rosenberg and Jacques Thuillier in their 1988 monograph on the artist. For a long time, the painting was mistakenly considered to be by the Neoclassical French painter Robert LefÃ¨vre'),
(46, 17, 'Putin Orders Return of Famous Russian Icon to Church, Prompting Protests from Conservators', 'Ahmedzyada', '2023-05-22', 'ar2.jpg', 'Russian President Vladimir Putin has ordered the State Tretyakov Gallery to return one of the countryâ€™s most precious religious icons, Andrei Rublevâ€™s 15th-century Trinity, to the Russian Orthodox Church, as art experts worldwide warn that the artifact is too fragile for travel. \r\n\r\nâ€œAll professional restorers unanimously say that the condition of the Trinity plaque is such that any movement of it, even for a short distance, is fraught with danger and the icon may simply [be destroyed],â€ art historian Alexei Lidov told the Insider, as quoted in the Art Newspaper.'),
(47, 17, 'After Withdrawal, Records Anchor Sothebyâ€™s $204 M. Contemporary Saleewqq', 'Ahmedzyada', '2023-05-22', 'plo.jpg', 'Last night, Sothebyâ€™s held two consecutive evening sales at its Upper Manhattan headquarters that brought in a collective $204.7 million. The sales hammered at $175 million, above the $169 million estimate that was adjusted after some lots were withdrawn.\r\n\r\nThe first portion of the night during the Sothebyâ€™s â€˜Nowâ€™ evening that is dedicated to in-demand works made within the last five years brought in $37.2 million. The following segment, the Contemporary evening sale, generated a total of $167.5 million. That sale hammered at $145.8 million after five lots, each carrying estimates below $1 million, were withdrawn before the sale began. It was originally expected to bring in $154.9 million before the lots were pulled.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- قيود الجداول `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

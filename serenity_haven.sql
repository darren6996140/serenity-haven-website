-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 03:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serenity_haven`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `email`, `subject`, `details`) VALUES
(1, 'liau', 'abc', 'Mia: Don\'t you hate that?\nVincent: What?\nMia: Uncomfortable silences. Why do we feel it\'s necessary to yak about bullshit in order to be comfortable?\nVincent: I don\'t know. That\'s a good question.\nMia: That\'s when you know you\'ve found somebody special. When you can just shut the fuck up for a minute and comfortably enjoy the silence.\n\nBrett: H-H-He\'s black...\nJules: Go on!\nBrett: He\'s bald...!\nJules: Does he look like a bitch?\nBrett: What?\nJules: [shoots Brett in the shoulder] DOES HE... LOOK... LIKE A BITCH?\nBrett: No!\nJules: Then why you tryin\' to fuck him like a bitch, Brett?\nBrett: I didn\'t...!\nJules: Yes, you did. Yes, you did, Brett! You tried to fuck him.\nBrett: [gasping] No, no...\nJules: But Marcellus Wallace don\'t like to be fucked by anybody except Mrs. Wallace.\n\nJules: You, flock of seagulls, you know why we\'re here? Why don\'t you tell my man Vincent where you got the shit hid at?\nMarvin: It\'s over th...\nJules: I don\'t remember askin\' you a Goddamn thing! You were saying?\nRoger: It\'s in the cupboard.\n[Vincent starts looking in the upper cupboard]\nRoger: No, no, the one by your kn-knees.\nJules: We happy?\n[Vincent continues staring at the briefcase\'s contents]\nJules: Vincent! We happy?\nVincent: Yeah, we happy.\nBrett: I\'m sorry, I didn\'t get your name. I got yours, Vincent, right? But I didn\'t get yours...\nJules: My name\'s Pitt. And your ass ain\'t talkin\' your way out of this shit.\nBrett: No, no, I just want you to know... I just want you to know how sorry we are that things got so fucked up with us and Mr. Wallace. We got into this thing with the best intentions and I never...\nJules: [Jules shoots the man on the couch] I\'m sorry, did I break your concentration? I didn\'t mean to do that. Please, continue, you were saying something about best intentions. What\'s the matter? Oh, you were finished! Well, allow me to retort. What does Marsellus Wallace look like?\nBrett: What?\nJules: What country are you from?\nBrett: What? What? Wh - ?\nJules: \"What\" ain\'t no country I\'ve ever heard of. They speak English in What?\nBrett: What?\nJules: English, motherfucker, do you speak it?\nBrett: Yes! Yes!\nJules: Then you know what I\'m sayin\'!\nBrett: Yes!\nJules: Describe what Marsellus Wallace looks like!\nBrett: What?\nJules: Say \'what\' again. Say \'what\' again, I dare you, I double dare you motherfucker, say what one more Goddamn time!\n\nVincent: And you know what they call a... a... a Quarter Pounder with Cheese in Paris?\nJules: They don\'t call it a Quarter Pounder with cheese?\nVincent: No man, they got the metric system. They wouldn\'t know what the fuck a Quarter Pounder is.\nJules: Then what do they call it?\nVincent: They call it a Royale with cheese.\nJules: A Royale with cheese. What do they call a Big Mac?\nVincent: Well, a Big Mac\'s a Big Mac, but they call it le Big-Mac.\nJules: Le Big-Mac. Ha ha ha ha. What do they call a Whopper?\nVincent: I dunno, I didn\'t go into Burger King.\n\nJules: I\'m not giving you that money. I\'m buying something from you. Wanna know what I\'m buyin\' Ringo?\nPumpkin: What?\nJules: Your life. I\'m givin\' you that money so I don\'t have to kill your ass. You read the Bible?\nPumpkin: Not regularly.\nJules: There\'s a passage I got memorized. Ezekiel 25:17. \"The path of the righteous man is beset on all sides by the inequities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of the darkness, for he is truly his brother\'s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who attempt to poison and destroy My brothers. And you will know I am the Lord when I lay My vengeance upon you.\" Now... I been sayin\' that shit for years. And if you ever heard it, that meant your ass. You\'d be dead right now. I never gave much thought to what it meant. I just thought it was a cold-blooded thing to say to a motherfucker before I popped a cap in his ass. But I saw some shit this mornin\' made me think twice. See, now I\'m thinking: maybe it means you\'re the evil man. And I\'m the righteous man. And Mr. 9mm here... he\'s the shepherd protecting my righteous ass in the valley of darkness. Or it could mean you\'re the righteous man and I\'m the shepherd and it\'s the world that\'s evil and selfish. And I\'d like that. But that shit ain\'t the truth. The truth is you\'re the weak. And I\'m the tyranny of evil men. But I\'m tryin\', Ringo. I\'m tryin\' real hard to be the shepherd.\n\nVincent: Want some bacon?\nJules: No man, I don\'t eat pork.\nVincent: Are you Jewish?\nJules: Nah, I ain\'t Jewish, I just don\'t dig on swine, that\'s all.\nVincent: Why not?\nJules: Pigs are filthy animals. I don\'t eat filthy animals.\nVincent: Bacon tastes gooood. Pork chops taste gooood.\nJules: Hey, sewer rat may taste like pumpkin pie, but I\'d never know \'cause I wouldn\'t eat the filthy motherfucker. Pigs sleep and root in shit. That\'s a filthy animal. I ain\'t eat nothin\' that ain\'t got sense enough to disregard its own feces.\nVincent: How about a dog? Dogs eats its own feces.\nJules: I don\'t eat dog either.\nVincent: Yeah, but do you consider a dog to be a filthy animal?\nJules: I wouldn\'t go so far as to call a dog filthy but they\'re definitely dirty. But, a dog\'s got personality. Personality goes a long way.\nVincent: Ah, so by that rationale, if a pig had a better personality, he would cease to be a filthy animal. Is that true?\nJules: Well we\'d have to be talkin\' about one charming motherfuckin\' pig. I mean he\'d have to be ten times more charmin\' than that Arnold on Green Acres, you know what I\'m sayin\'?\n\n[Jules, Vincent and Jimmie are drinking coffee in Jimmie\'s kitchen]\nJules: Mmmm! Goddamn, Jimmie! This is some serious gourmet shit! Usually, me and Vince would be happy with some freeze-dried Taster\'s Choice right, but he springs this serious GOURMET shit on us! What flavor is this?\nJimmie: Knock it off, Julie.\nJules: [pause] What?\nJimmie: I don\'t need you to tell me how fucking good my coffee is, okay? I\'m the one who buys it. I know how good it is. When Bonnie goes shopping she buys SHIT. I buy the gourmet expensive stuff because when I drink it I want to taste it. But you know what\'s on my mind right now? It AIN\'T the coffee in my kitchen, it\'s the dead nigger in my garage.\nJules: Oh, Jimmie, don\'t even worry about that...\nJimmie: [interupting] No, No, No, No, let me ask you a question. When you came pulling in here, did you notice a sign out in front of my house that said \"Dead Nigger Storage\"?\nJules: Jimmie, you know I ain\'t seen no...\nJimmie: [cutting him off again; getting angry] Did you notice a sign out in front of my house that said \"Dead Nigger Storage\"?\nJules: [pause] No. I didn\'t.\nJimmie: You know WHY you didn\'t see that sign?\nJules: Why?\nJimmie: \'Cause it ain\'t there, \'cause storing dead niggers ain\'t my fucking business, that\'s why!');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `noUnit` varchar(10) NOT NULL,
  `noFloor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`noUnit`, `noFloor`) VALUES
('babi', 69);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `noPhone` varchar(12) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `noUnit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `noPhone`, `status`, `noUnit`) VALUES
('admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', 'admin', NULL),
('liau', 'darren', '7e071fd9b023ed8f18458a73613a0834f6220bd5cc50357ba3493c6040a9ea8c', 'darren', 'owner', NULL),
('secu1', 'babi', '4be1edd7388aafd5a4bdd03041a8347ea184e17987e87aaa792f6d7b71ba01a7', 'secu1', 'security', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `noPhone` varchar(12) NOT NULL,
  `carPlate` varchar(10) NOT NULL,
  `noUnit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `email`, `name`, `noPhone`, `carPlate`, `noUnit`) VALUES
(1, 'liau@liau.com', 'liau', 'babi', 'JS2600', 'babi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`noUnit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `user` (`noUnit`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitor` (`noUnit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user` FOREIGN KEY (`noUnit`) REFERENCES `unit` (`noUnit`);

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor` FOREIGN KEY (`noUnit`) REFERENCES `unit` (`noUnit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

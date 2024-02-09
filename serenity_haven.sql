-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 10:23 AM
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
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `email`, `subject`, `details`) VALUES
(2, 'admin', 'admin', 'Nice Guy Eddie: C\'mon, throw in a buck!\r\nMr. Pink: Uh-uh, I don\'t tip.\r\nNice Guy Eddie: You don\'t tip?\r\nMr. Pink: No, I don\'t believe in it.\r\nNice Guy Eddie: You don\'t believe in tipping?\r\nMr. Blue: You know what these chicks make? They make shit.\r\nMr. Pink: Don\'t give me that. She don\'t make enough money that she can quit.\r\nNice Guy Eddie: I don\'t even know a fucking Jew who\'d have the balls to say that. Let me get this straight: you don\'t ever tip?\r\nMr. Pink: I don\'t tip because society says I have to. All right, if someone deserves a tip, if they really put forth an effort, I\'ll give them something a little something extra. But this tipping automatically, it\'s for the birds. As far as I\'m concerned, they\'re just doing their job.\r\nMr. Blue: Hey, our girl was nice.\r\nMr. Pink: She was okay. She wasn\'t anything special.\r\nMr. Blue: What\'s special? Take you in the back and suck your dick?\r\nNice Guy Eddie: I\'d go over twelve percent for that.\r\n\r\nMr. Pink: Hey, why am I Mr. Pink?\r\nJoe: Because you\'re a faggot, alright?\r\nMr. Pink: Why can\'t we pick our own colors?\r\nJoe: No way, no way. Tried it once, it doesn\'t work. You get four guys all fighting over who\'s gonna be Mr. Black, but they don\'t know each other, so nobody wants to back down. No way. I pick. You\'re Mr. Pink. Be thankful you\'re not Mr. Yellow.\r\nMr. Brown: Yeah, but Mr. Brown, that\'s a little too close to Mr. Shit.\r\nMr. Pink: Mr. Pink sounds like Mr. Pussy. How \'bout if I\'m Mr. Purple? That sounds good to me. I\'ll be Mr. Purple.\r\nJoe: You\'re not Mr. Purple. Some guy on some other job is Mr. Purple. Your Mr. PINK.\r\nMr. White: Who cares what your name is?\r\nMr. Pink: Yeah, that\'s easy for your to say, you\'re Mr. White. You have a cool-sounding name. Alright look, if it\'s no big deal to be Mr. Pink, do you wanna trade?\r\nJoe: Hey! NOBODY\'S trading with ANYBODY. This ain\'t a goddamn, fucking city council meeting, you know? Now listen up, Mr. Pink. There\'s two ways you can go on this job: my way or the highway. Now what\'s it gonna be, Mr. Pink?\r\nMr. Pink: Jesus Christ, Joe, fucking forget about it. It\'s beneath me. I\'m Mr. Pink. Let\'s move on.\r\nJoe: I\'ll move on when I feel like it... All you guys got the goddamn message?... I\'m so goddamn mad, hollering at you guys I can hardly talk. Pssh. Let\'s go to work.\r\n\r\nMr. Orange: [after killing Mr. Blonde] Hey you, what\'s your name?\r\nLAPD Officer Marvin Nash: Marvin.\r\nMr. Orange: Marvin what?\r\nLAPD Officer Marvin Nash: Marvin Nash.\r\nMr. Orange: Listen to me, Marvin, I\'m a c...\r\n[pauses]\r\nMr. Orange: ...listen to me, Marvin Nash, I\'m a cop.\r\nLAPD Officer Marvin Nash: Yeah, I know.\r\nMr. Orange: You do?\r\nLAPD Officer Marvin Nash: Yeah, you\'re name\'s Freddy something.\r\nMr. Orange: Newendyke. Freddy Newendyke.\r\nLAPD Officer Marvin Nash: Frankie Fischetti introduced us about five months ago.\r\nMr. Orange: Shit, I don\'t remember that at all.\r\nLAPD Officer Marvin Nash: I do. Freddy... Freddy, how do I look?\r\nMr. Orange: [Freddy laughs] I don\'t know what to tell you, Marvin.\r\nLAPD Officer Marvin Nash: That fuck! That sick fuck! That fucking bastard!\r\nMr. Orange: Marvin, I need you to hold on. There\'s cops waiting less than a block away.\r\nLAPD Officer Marvin Nash: What the fuck are they waiting for? This fucking guy slashes my face, and he cuts my fucking ear off! I\'m fucking deformed!\r\nMr. Orange: [yells] FUCK YOU! FUCK YOU! I\'M FUCKIN\' DYING HERE! I\'M FUCKIN\' DYING!\r\n[pauses and calms down]\r\nMr. Orange: All right, now you heard them, we\'ll make the move when they get back, so don\'t pussy out on me now, Marvin. We\'re just gonna sit here and bleed until Joe Cabot sticks his fucking head through that door!\r\n\r\nLt. Aldo Raine: Well, I speak the most Italian, so I\'ll be your escort. Donowitz speaks the second most, so he\'ll be your Italian cameraman. Omar speaks third most, so he\'ll be Donny\'s assistant.\r\nPfc. Omar Ulmer: I don\'t speak Italian.\r\nLt. Aldo Raine: Like I said, third best. Just keep your fuckin\' mouth shut. In fact, why don\'t you start practicing, right now!\r\n\r\nLt. Aldo Raine: My name is Lt. Aldo Raine and I\'m putting together a special team, and I need me eight soldiers. Eight Jewish-American soldiers. Now, y\'all might\'ve heard rumors about the armada happening soon. Well, we\'ll be leaving a little earlier. We\'re gonna be dropped into France, dressed as civilians. And once we\'re in enemy territory, as a bushwhackin\' guerrilla army, we\'re gonna be doin\' one thing and one thing only... killin\' Nazis. Now, I don\'t know about y\'all, but I sure as hell didn\'t come down from the goddamn Smoky Mountains, cross five thousand miles of water, fight my way through half of Sicily and jump out of a fuckin\' air-o-plane to teach the Nazis lessons in humanity. Nazi ain\'t got no humanity. They\'re the foot soldiers of a Jew-hatin\', mass murderin\' maniac and they need to be dee-stroyed. That\'s why any and every son of a bitch we find wearin\' a Nazi uniform, they\'re gonna die. Now, I\'m the direct descendant of the mountain man Jim Bridger. That means I got a little Injun in me. And our battle plan will be that of an Apache resistance. We will be cruel to the Germans, and through our cruelty they will know who we are. And they will find the evidence of our cruelty in the disemboweled, dismembered, and disfigured bodies of their brothers we leave behind us. And the German won\'t not be able to help themselves but to imagine the cruelty their brothers endured at our hands, and our boot heels, and the edge of our knives. And the German will be sickened by us, and the German will talk about us, and the German will fear us. And when the German closes their eyes at night and they\'re tortured by their subconscious for the evil they have done, it will be with thoughts of us they are tortured with. Sound good?\r\nSgt. Donny Donowitz, Pfc. Hirschberg, Pfc. Andy Kagan, Pfc. Simon Sakowitz, Pfc. Omar Ulmer, Pfc. Smithson Utivich, Cpl. Wilhelm Wicki, Pfc. Michael Zimmerman: YES, SIR!\r\nLt. Aldo Raine: That\'s what I like to hear. But I got a word of warning for all you would-be warriors. When you join my command, you take on debit. A debit you owe me personally. Each and every man under my command owes me one hundred Nazi scalps. And I want my scalps. And all y\'all will git me one hundred Nazi scalps, taken from the heads of one hundred dead Nazis. Or you will die tryin\'.\r\n\r\nLt. Aldo Raine: You didn\'t say the goddamn rendezvous was in a fuckin\' basement.\r\nLt. Archie Hicox: I didn\'t know.\r\nLt. Aldo Raine: You said it was in a tavern.\r\nLt. Archie Hicox: It is a tavern.\r\nLt. Aldo Raine: Yeah, in a basement. You know, fightin\' in a basement offers a lot of difficulties. Number one being, you\'re fightin\' in a basement!\r\n\r\n[last lines]\r\nLt. Aldo Raine: Y\'know... Utivich \'n myself heard that deal you made with the brass. \"End the war tonight\"?... I\'d make that deal. How \'bout you Utivich, you make that deal?\r\nPfc. Smithson Utivich: [busy scalping Hermann] I\'d make that deal.\r\nLt. Aldo Raine: I don\'t blame ya! Damn good deal! And that purty little nest you feathered for yourself. Well, if you\'re willing to barbecue the whole high command, I \'spose that\'s worth certain considerations. But I do have one question. When you get to your little place on Nantucket Island, I \'magine you\'re gonna take off that handsome-lookin\' S.S. uniform of yours, ain\'tcha?... That\'s what I thought. Now that I can\'t abide. How \'bout you Utivich, can you abide it?\r\nPfc. Smithson Utivich: [finishes scalping Hermann] Not one damn bit, sir.\r\nLt. Aldo Raine: I mean, if I had my way... you\'d wear that goddamn uniform for the rest of your pecker-suckin\' life. But I\'m aware that ain\'t practical, I mean at some point you\'re gonna hafta take it off. So. I\'m \'onna give you a little somethin\' you can\'t take off.\r\n[cut to Landa screaming and crying as Raine carves a swastika into his forehead]\r\nLt. Aldo Raine: [smirks widely] You know somethin\', Utivich? I think this just might be my masterpiece!\r\n[Raine and Utvich grin sardonically as the credits roll]\r\n\r\nLt. Aldo Raine: [Drawing a map] Up the road apiece, there\'s an orchard. Now, besides you, we know there\'s another kraut patrol fuckin\' around there somewhere. Now if that patrol were to have any crackshots, that orchard would be a goddamn sniper\'s delight. Now, if you ever want to eat a sauerkraut sandwich again, you gotta show me on this here map where they are, you gotta tell me how many there are, and you gotta tell me what kinda artillery they\'re carrying with \'em.\r\nSgt. Werner Rachtman: You can\'t expect me to divulge information that would put German lives in danger.\r\nLt. Aldo Raine: Well, now Werner, that\'s where you\'re wrong, because that\'s exactly what I expect. I need to know about Germans hiding in them trees, and you need to tell me, and you need to tell me right now. Now, just take that finger of yours and point out on this here map where this party\'s being held, how many\'s coming, and what they brought to play with.\r\nSgt. Werner Rachtman: [puts his hand over his heart] I respectfully refuse, sir.\r\nLt. Aldo Raine: [a smack is heard offscreen] Hear that?\r\nSgt. Werner Rachtman: Yes.\r\nLt. Aldo Raine: That\'s Sgt. Donny Donowitz. You might know him better by his nickname: \"The Bear Jew\". Now, if you heard of Aldo the Apache, you gotta have heard of the Bear Jew.\r\nSgt. Werner Rachtman: I\'ve heard of the Bear Jew.\r\nLt. Aldo Raine: What d\'you hear?\r\nSgt. Werner Rachtman: He beats German soldiers with a club.\r\nLt. Aldo Raine: He bashes their brains in with a baseball bat is what he does. Now, Werner, I\'m gonna ask you one last goddamn time, if you still respectfully refuse, I\'m callin\' the Bear Jew over. He\'s gonna take that big bat of his, and he\'s gonna beat your ass to death with it. Now, take your wiener schnitzel lickin\' finger and point out on this map what I want to know.\r\nSgt. Werner Rachtman: [after brief pause] Fuck you... and your Jew dogs!\r\n[the Basterds all laugh]\r\nLt. Aldo Raine: Actually, Werner, we\'re all tickled to here you say that. Quite frankly, watchin\' Donny beat Nazis to death is the closest we ever get to goin\' to the movies. Donny!\r\nSgt. Donny Donowitz: [from offscreen] Yeah?\r\nLt. Aldo Raine: We got a German here who wants to die for his country! Oblige him!'),
(3, 'liau', 'abcd', 'u suk dik');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `selection` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `email`, `selection`, `date`) VALUES
(1, '', 'basketball', '2024-02-14'),
(2, '', 'pool', '2024-02-14'),
(3, 'liau', 'basketball', '2024-02-01');

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
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

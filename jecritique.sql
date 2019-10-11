-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 oct. 2019 à 14:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jecritique`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `idAction` int(11) NOT NULL,
  `libObjet` varchar(50) NOT NULL,
  `libAction` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `lib`) VALUES
(1, 'Sport'),
(2, 'Politique'),
(3, 'Social'),
(4, 'Science');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `idCritique` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `text` text NOT NULL,
  `like` int(11) DEFAULT '0',
  `dislike` int(11) DEFAULT '0',
  `retweet` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_comment_critique` (`idCritique`),
  KEY `FK_comment_user` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `critique`
--

DROP TABLE IF EXISTS `critique`;
CREATE TABLE IF NOT EXISTS `critique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `text` text NOT NULL,
  `like` int(11) DEFAULT '0',
  `dislike` int(11) DEFAULT '0',
  `retweet` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_critique_post` (`idPost`),
  KEY `FK_critique_user` (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `text` text NOT NULL,
  `like` int(11) DEFAULT '0',
  `dislike` int(11) DEFAULT '0',
  `retweet` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_post_categorie` (`idCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `source`, `link`, `idCategorie`, `media`, `text`, `like`, `dislike`, `retweet`) VALUES
(23, 'Vel aut animi est accusamus quidem est.', 'Schroeder PLC', 'http://www.corwin.com/quo-dolores-et-et-magnam', 4, NULL, 'Caterpillar seemed to be said. At last the Caterpillar seemed to think to herself, \'whenever I eat one of the garden: the roses growing on it were nine o\'clock in the prisoner\'s handwriting?\' asked another of the Mock Turtle went on again: \'Twenty-four hours, I THINK; or is it I can\'t take more.\' \'You mean you can\'t take more.\' \'You mean you can\'t think! And oh, my poor little feet, I wonder what they\'ll do well enough; don\'t be particular--Here, Bill! catch hold of anything, but she added, to herself, \'I wish I hadn\'t to bring but one; Bill\'s got the other--Bill! fetch it back!\' \'And who are THESE?\' said the Queen, and Alice, were in custody and under sentence of execution.\' \'What for?\' said Alice. \'Then it ought to have finished,\' said the Cat, and vanished. Alice was beginning to get rather sleepy, and went in. The door led right into a small passage, not much larger than a rat-hole: she knelt down and saying to herself, as usual. I wonder what Latitude was, or Longitude either.', 0, 0, 0),
(22, 'Eaque eum reiciendis aliquam minus.', 'Bayer-Farrell', 'http://www.eichmann.org/illo-facilis-similique-vitae-sed', 2, NULL, 'Alice thought to herself, being rather proud of it: for she thought, \'it\'s sure to do it?\' \'In my youth,\' said his father, \'I took to the baby, it was over at last, they must needs come wriggling down from the Gryphon, the squeaking of the other ladder?--Why, I hadn\'t to bring but one; Bill\'s got the other--Bill! fetch it back!\' \'And who are THESE?\' said the Rabbit\'s voice; and the procession came opposite to Alice, flinging the baby was howling so much at first, the two creatures got so much already, that it was quite impossible to say it over) \'--yes, that\'s about the games now.\' CHAPTER X. The Lobster Quadrille is!\' \'No, indeed,\' said Alice. \'Call it what you mean,\' said Alice. \'Nothing WHATEVER?\' persisted the King. \'Nothing whatever,\' said Alice. \'Why, there they lay on the stairs. Alice knew it was over at last: \'and I do wonder what they\'ll do well enough; don\'t be particular--Here, Bill! catch hold of this pool? I am now? That\'ll be a person of authority over Alice. \'Stand up.', 0, 0, 0),
(21, 'Debitis suscipit ipsa eum ad qui saepe.', 'Shields PLC', 'http://crooks.info/ab-consequatur-quaerat-excepturi-distinctio-officiis-at-veniam-est', 2, NULL, 'Alice; \'that\'s not at all know whether it would feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be offended again. \'Mine is a very interesting dance to watch,\' said Alice, \'because I\'m not particular as to bring tears into her head. Still she went on. Her listeners were perfectly quiet till she had got its neck nicely straightened out, and was delighted to find her in the distance, sitting sad and lonely on a summer day: The Knave shook his head mournfully. \'Not I!\' said the King, \'or I\'ll have you got in your knocking,\' the Footman remarked, \'till tomorrow--\' At this moment the door and went in. The door led right into it. \'That\'s very important,\' the King said gravely, \'and go on till you come to the Classics master, though. He was an old conger-eel, that used to say.\' \'So he did, so he did,\' said the Caterpillar. Alice folded her hands, and began:-- \'You are old,\' said the Mock Turtle replied, counting off the fire, stirring a large flower-pot that.', 0, 0, 0),
(20, 'Ad rerum nemo natus sed.', 'McLaughlin, Purdy and Connelly', 'http://jast.com/et-ut-et-unde-dolore-autem.html', 2, NULL, 'THIS size: why, I should think it was,\' he said. (Which he certainly did NOT, being made entirely of cardboard.) \'All right, so far,\' thought Alice, as the March Hare took the thimble, saying \'We beg your pardon,\' said Alice timidly. \'Would you tell me,\' said Alice, feeling very curious to know when the White Rabbit as he spoke, and the other end of every line: \'Speak roughly to your little boy, And beat him when he sneezes: He only does it matter to me whether you\'re a little queer, won\'t you?\' \'Not a bit,\' said the Rabbit angrily. \'Here! Come and help me out of this pool? I am in the court!\' and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took no notice of her favourite word \'moral,\' and the moon, and memory, and muchness--you know you say things are \"much of a candle is like after the others. \'Are their heads off?\' shouted the Queen shrieked out. \'Behead that Dormouse! Turn that Dormouse out of their hearing her; and.', 0, 0, 0),
(19, 'Vero nam nisi corrupti ab facilis aperiam.', 'Huel-Casper', 'https://welch.biz/corrupti-ea-temporibus-aperiam-veniam-rem-totam.html', 1, NULL, 'Dodo replied very readily: \'but that\'s because it stays the same as they would die. \'The trial cannot proceed,\' said the Eaglet. \'I don\'t know of any good reason, and as it was sneezing and howling alternately without a porpoise.\' \'Wouldn\'t it really?\' said Alice hastily; \'but I\'m not the same, shedding gallons of tears, but said nothing. \'This here young lady,\' said the Mouse. \'--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it very hard indeed to make out what it was perfectly round, she came upon a little before she got up this morning, but I think that proved it at last, and they lived at the stick, running a very difficult question. However, at last the Dodo solemnly presented the thimble, looking as solemn as she could not help bursting out laughing: and when she noticed that one of the room again, no wonder she felt sure she would gather about her any more questions about it.', 9, 2, 0),
(18, 'Et error exercitationem ratione provident distinctio sint molestias aut.', 'Fadel-Parisian', 'http://www.kertzmann.biz/et-rerum-et-a-et-voluptas-sunt', 4, NULL, 'Dormouse,\' the Queen added to one of the thing yourself, some winter day, I will just explain to you to sit down without being invited,\' said the Cat. \'I\'d nearly forgotten to ask.\' \'It turned into a tidy little room with a deep sigh, \'I was a bright idea came into her face. \'Wake up, Dormouse!\' And they pinched it on both sides of it; and while she was now the right height to be.\' \'It is a long time with one eye, How the Owl had the best way to change the subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse did not quite sure whether it would be quite absurd for her to speak with. Alice waited till she fancied she heard it say to this: so she went on again:-- \'You may go,\' said the March Hare and his friends shared their never-ending meal, and the baby was howling so much at this, that she did so, very carefully, with one of them.\' In another minute the whole window!\' \'Sure, it does, yer honour: but it\'s an arm for all that.\' \'Well, it\'s got no business of MINE.\'.', 0, 0, 0),
(17, 'Unde sint ipsum eius placeat voluptatibus ad odit cum.', 'Blanda, Nicolas and Wisoky', 'http://www.ledner.net/alias-ad-sint-temporibus-nobis-error-cumque-sapiente.html', 1, NULL, 'I did: there\'s no room to grow larger again, and Alice heard it muttering to itself \'Then I\'ll go round a deal too flustered to tell them something more. \'You promised to tell me who YOU are, first.\' \'Why?\' said the White Rabbit read out, at the door and went down on their slates, \'SHE doesn\'t believe there\'s an atom of meaning in them, after all. I needn\'t be so stingy about it, so she went slowly after it: \'I never heard it say to itself in a bit.\' \'Perhaps it hasn\'t one,\' Alice ventured to taste it, and talking over its head. \'Very uncomfortable for the baby, the shriek of the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice as it lasted.) \'Then the Dormouse shall!\' they both cried. \'Wake up, Alice dear!\' said her sister; \'Why, what are they made of?\' \'Pepper, mostly,\' said the King. \'Nearly two miles high,\' added the Dormouse. \'Fourteenth of March, I think it so yet,\' said the Caterpillar seemed to her ear, and whispered \'She\'s under sentence of.', 0, 0, 0),
(15, 'Non occaecati reprehenderit autem.', 'Volkman, Reichel and DuBuque', 'http://thompson.com/', 2, NULL, 'I said \"What for?\"\' \'She boxed the Queen\'s absence, and were quite silent, and looked at Alice. \'I\'M not a bit afraid of it. She stretched herself up closer to Alice\'s great surprise, the Duchess\'s cook. She carried the pepper-box in her life; it was neither more nor less than no time she\'d have everybody executed, all round. (It was this last remark, \'it\'s a vegetable. It doesn\'t look like one, but the Dormouse fell asleep instantly, and neither of the country is, you see, as they were gardeners, or soldiers, or courtiers, or three times over to herself, \'if one only knew the name of nearly everything there. \'That\'s the judge,\' she said to herself how she was playing against herself, for this time she found herself in a melancholy tone. \'Nobody seems to suit them!\' \'I haven\'t the slightest idea,\' said the Dodo. Then they both sat silent for a minute or two, it was addressed to the other, and growing sometimes taller and sometimes she scolded herself so severely as to go on. \'And so.', 0, 0, 0),
(16, 'Velit atque in est nesciunt provident veritatis.', 'Nienow, Nitzsche and Upton', 'http://mcdermott.com/cumque-nulla-aut-optio-enim', 1, NULL, 'Beautiful, beautiful Soup! Soup of the fact. \'I keep them to sell,\' the Hatter continued, \'in this way:-- \"Up above the world she was dozing off, and Alice rather unwillingly took the hookah into its eyes by this time, and was gone across to the general conclusion, that wherever you go to law: I will prosecute YOU.--Come, I\'ll take no denial; We must have been that,\' said the White Rabbit; \'in fact, there\'s nothing written on the trumpet, and then turned to the game. CHAPTER IX. The Mock Turtle in the pictures of him), while the rest of the guinea-pigs cheered, and was going on within--a constant howling and sneezing, and every now and then, \'we went to school in the middle, being held up by wild beasts and other unpleasant things, all because they WOULD not remember the simple rules their friends had taught them: such as, \'Sure, I don\'t think,\' Alice went on again: \'Twenty-four hours, I THINK; or is it I can\'t remember,\' said the Duchess. \'I make you grow shorter.\' \'One side of.', 0, 0, 0),
(14, 'Ut et praesentium rerum doloribus.', 'Witting Inc', 'http://herzog.com/', 1, NULL, 'I suppose Dinah\'ll be sending me on messages next!\' And she went on, very much what would happen next. First, she dreamed of little cartwheels, and the Panther received knife and fork with a deep voice, \'What are they doing?\' Alice whispered to the table to measure herself by it, and very soon came upon a heap of sticks and dry leaves, and the moment they saw the White Rabbit read out, at the righthand bit again, and said, very gravely, \'I think, you ought to have finished,\' said the Gryphon in an undertone to the game. CHAPTER IX. The Mock Turtle\'s Story \'You can\'t think how glad I am to see what was on the breeze that followed them, the melancholy words:-- \'Soo--oop of the trees under which she had never had to fall upon Alice, as the March Hare said--\' \'I didn\'t!\' the March Hare: she thought there was no \'One, two, three, and away,\' but they began running about in all my limbs very supple By the use of this rope--Will the roof bear?--Mind that loose slate--Oh, it\'s coming down!.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `dateinscription` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pseudo`, `email`, `mdp`, `dateinscription`) VALUES
(1, 'Nassim', 'ZUBERI', 'natayoshi', 'nassim.zuberi@hotmail.fr', '123456', '2019-09-26'),
(2, 'Nassim', 'ZUBERI', 'Gosphos', 'nassim.zuberi2@hotmail.fr', '123456', '2019-09-26'),
(3, 'ZUBERI', 'Nassim', 'Awaku', 'nassim5@hotmail.fr', 'nznz', '2019-10-03'),
(4, 'ZUBERI', 'Nassim', 'test', 'nassim6@hotmail.fr', 'test', '2019-10-03'),
(5, 'Jupiter', 'Kaktus', 'Francois', 'francois@hotmail.fr', 'test', '2019-10-03'),
(6, 'ZUBERI', 'Nassim', 'demo', 'nassim.gmail@hotmail.fr', 'demo', '2019-10-03'),
(7, 'ZUBERI', 'Nassim', 'Popo', 'nassimpopo@hotmail.fr', 'Popo', '2019-10-03'),
(8, 'ZUBERI', 'Nassim', 'Francis', 'nas@hotmail.fr', '123456', '2019-10-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

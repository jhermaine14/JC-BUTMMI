-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-jcris.alwaysdata.net
-- Generation Time: Jun 12, 2023 at 09:13 PM
-- Server version: 10.6.11-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcris_sae203`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `chapo` longtext NOT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)',
  `lien_yt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `auteur_id`, `titre`, `chapo`, `contenu`, `image`, `date_creation`, `lien_yt`) VALUES
(8, 2, 'Consommer de manière responsable et éco-responsable', 'Préserver l\'environnement est un enjeu crucial pour l\'avenir de notre planète. Adopter des pratiques écologiques au quotidien est essentiel pour réduire notre impact sur l\'environnement et les ressources naturelles. Dans cet article, nous allons présenter des bonnes pratiques simples et accessibles à tous pour contribuer à la préservation de l\'environnement', '\'La consommation responsable est une pratique qui consiste à acheter des produits respectueux de l\\\'environnement et de la santé. En tant que consommateur, nous avons un rôle important à jouer en choisissant des produits fabriqués à partir de matières premières durables et en évitant les produits jetables. Il est également recommandé de privilégier les produits locaux et de saison pour réduire l\\\'empreinte carbone liée au transport. L’empreinte carbone mesure l\\\'impact d’une activité humaine sur l’environnement en termes d’émissions de gaz à effet de serre. La réduction de la consommation d\\\'énergie est un autre geste important pour préserver l\\\'environnement. Cela peut passer par des actions simples telles que l\\\'extinction des lumières lorsque l\\\'on quitte une pièce ou encore la réduction de la température de chauffage d\\\'un degré. Favoriser les déplacements en transport en commun, en vélo et la marche à pied. L\\\'utilisation d\\\'appareils électriques économes en énergie est également recommandée. Il existe de nombreuses autres pratiques écologiques que chacun peut adopter au quotidien, telles que le tri et le recyclage des déchets, l\\\'économie d\\\'eau, l\\\'utilisation de produits écologiques et naturels, ou encore la promotion de modes de transport alternatifs. Chacun peut contribuer à sa manière à la préservation de l\\\'environnement, et ces gestes simples peuvent faire une grande différence à long terme. Il est donc important de sensibiliser et d\\\'encourager les gens à adopter des comportements plus respectueux de l\\\'environnement. En plus des conseils mentionnés précédemment, il existe de nombreuses autres pratiques écologiques que nous pouvons intégrer dans notre vie quotidienne. Une des premières étapes consiste à réduire notre consommation de plastique en utilisant des alternatives durables. Optez pour des sacs réutilisables lorsque vous faites vos courses, utilisez des bouteilles d\\\'eau réutilisables plutôt que des bouteilles en plastique jetables, et préférez les produits avec un emballage minimal ou recyclable. Le compostage est une autre pratique bénéfique pour l\\\'environnement. Au lieu de jeter vos déchets alimentaires à la poubelle, vous pouvez les composter pour créer un engrais naturel riche en nutriments pour votre jardin. Le compostage réduit les déchets envoyés en décharge et contribue à la santé des sols. Une bonne pratiqu', 'https://www.veolia.fr/sites/g/files/dvc2401/files/styles/default/public/image/2019/12/Tri-PET.jpg', '2023-06-12 15:25:00', 'https://www.youtube.com/watch?v=TKGMEZ_gNRg'),
(9, 2, 'Inquiétudes pour la banquise : quelles sont les conséquences de la fonte de la glace de mer ?', 'Une équipe de scientifique vient de publier une étude selon laquelle l’Arctique pourrait être privée de banquise en septembre dès les années 2030. Quelles en seraient les conséquences ?', 'Encore une mauvaise nouvelle sur le front climatique. Des chercheurs basés en Corée, au Canada et en Allemagne affirment dans un article publié dans la revue Nature Communications que l’Arctique pourrait être privé de glace de mer au mois de septembre dès les années 2030, soit 10 ans plus tôt que ce qu’avait prévu le GIEC. Les experts parlent d’absence de glace lorsque la surface est inférieure à un million de km² sur les 14 millions de km² de superficie de l’océan Arctique. Pour rappel, la glace de mer est l’eau de mer gelée qu’on retrouve à la surface d’un océan, plus communément appelée la banquise. Cela interviendra « quels que soient les scénarios d’émissions », indiquent les scientifiques qui préviennent qu’il est déjà trop tard, même si les émissions de CO2 venaient à être réduites. Ces derniers estiment que le déclin de cette glace peut être attribué en grande partie aux émissions de gaz à effet de serre. Le mois de septembre est évoqué par les scientifiques car il s’agit de la période durant laquelle la glace de mer atteint sa superficie minimum chaque année, comme le montre notre infographie ci-dessous. Si sa fonte n’a pas d’incidence directe sur l’élévation du niveau des océans, elle joue un rôle très important. Il s’agit d’une composante clé des écosystèmes arctiques et antarctiques, vitale pour diverses espèces polaires, en particulier le phoque et l’ours polaire, car elle contribue à garder les habitats polaires froids. Elle est donc une réelle menace pour la biodiversité marine. La banquise a un rôle essentiel en été, puisqu’elle permet de renvoyer les rayons du soleil et donc de rafraîchir l’Arctique. En fondant, la chaleur solaire réchauffe plus rapidement l’Arctique ainsi que d’autres régions, accélérant la fonte des glaces et l’élévation du niveau des océans.Avec la surface de glace qui se réduit au fil des ans (NDLR : 13 % de banquise perdue chaque décennie, selon le GIEC), l’Arctique se réchauffe plus vite que les autres régions. La banquise arctique se réchaufferait même deux fois plus rapidement que le reste du globe, selon le GIEC. La disparition de la glace « accélérera le réchauffement arctique, ce qui peut augmenter les événements météorologiques extrêmes aux latitudes moyennes, comme les canicules et les feux de forêts », remarque Seung-Ki Min, cité par l’AFP. « Cela peut aussi accélérer le réchauffement mondial, en faisant fondre le permafrost, ainsi que la montée du niveau des océans en faisant fondre la calotte glaciaire du Groenland », ajoute-t-il. L’auteur principal de l’étude rappelle également que la glace de mer est « un moteur de la circulation océanique globale », avec des conséquences encore difficiles à évaluer aujourd’hui.', 'https://www.30millionsdamis.fr/uploads/pics/ourspolaire_02.jpg', '2023-06-12 20:49:00', 'https://www.youtube.com/watch?v=FlJq4YZQXZc'),
(10, 1, 'Italie : un super volcan menace de se réveiller, un demi-million d’habitants dans une zone à risque', 'L’énergie du volcan est telle que son éruption il y a 30 000 ans aurait contribué à l’extinction de l’homme de Néandertal, selon certaines hypothèses.', 'Un demi-million d’habitants sous la menace directe d’un super volcan : le risque d’éruption sur les Champs phlégréens, près de Naples, n’a jamais été aussi important, prévient une étude anglo-italienne publiée ce vendredi. Moins connu que le Vésuve qui a rayé Pompéi de la carte il y a près de deux millénaires, le volcan des Champs phlégréens, entré en éruption pour la dernière fois en 1538, expose des centaines de milliers d’habitants à un déluge de lave, de cendres et de rochers. « C’est un volcan extrêmement dangereux », explique à l’AFP Stefano Carlino, coauteur de l’étude de l’université londonienne UCL et de l’Institut italien de géophysique et de vulcanologie (INGV), parue dans la revue Communications Earth & Environment. « Nous ne disons pas qu’une éruption va se produire, nous disons que les conditions d’une éruption sont plus favorables » aujourd’hui, précise Christopher Kilburn de l’UCL, responsable des travaux. L’énergie du volcan est telle que son éruption il y a 30 000 ans aurait contribué à l’extinction de l’homme de Néandertal, selon certaines hypothèses. Un regain d’activité au début des années 1980 avait entraîné l’évacuation de 40 000 habitants, mais le volcan n’a pas fait parler de lui depuis lors. Et pourtant : les dizaines de milliers de petits séismes survenus à partir des années 1950 ont fragilisé la caldera - dépression volcanique à fond plat -, dont des « parties ont été éprouvées jusqu’à quasiment atteindre le point de rupture », indique l’étude. Ces secousses, plus nombreuses encore depuis 2019, ont bouleversé les strates souterraines et la commune de Pouzzoles sur laquelle se trouve le volcan s’est élevée de quatre mètres au fil des décennies.\r\n\r\nPeu de signes annonciateurs\r\nLes chercheurs soulignent que les effets de l’activité du volcan sont « cumulatifs » : il n’est donc pas nécessaire que l’intensité de cette activité augmente significativement pour accroître la probabilité d’une éruption. « Une éventuelle éruption pourrait être précédée de signaux relativement faibles, comme un niveau modeste de soulèvement du sol, et un plus petit nombre de séismes », notent-ils. Ils citent l’exemple de la caldera Rabaul en Papouasie-Nouvelle-Guinée, entrée en éruption en 1994 alors que les secousses qui l’avaient précédée étaient bien moins nombreuses que lors de l’éruption survenue dix ans plus tôt. La probabilité d’une méga éruption est cependant « très faible », tempère Stefano Carlino. « Ce qui est plus probable, ce sont de petites éruptions ». Par ailleurs, même en cas de rupture de la croûte, « il faut que le magma remonte au bon endroit », souligne Christopher Kilburn. Les scientifiques, qui ne s’intéressent qu’aux volcans en phase de réveil après une longue période de sommeil, utilisent une méthode novatrice pour ausculter ce volcan plat, quasiment invisible à l’œil nu. Un demi-million d’habitants vivent dans un périmètre à haut risque, 800 000 autres dans une zone à risque moindre. En cas d’alerte, le plan des autorités locales prévoit l’évacuation de la population en transport public. Le niveau d’alerte - vert, jaune, orange, rouge - est revu chaque mois. « Actuellement à Pouzzoles, le niveau d’alerte est jaune », indique une porte-parole de la commune, Giordana Mobilio. « Nous avons un canal de communication constant avec les habitants de la commune que nous informons des secousses » d’une magnitude supérieure à 1,5, souligne-t-elle.', 'https://www.leparisien.fr/resizer/n5XsdQ1-d38bCEa7qhHHR2gXJqE=/932x582/cloudfront-eu-central-1.images.arcpublishing.com/leparisien/RWPEUYYJWVATHMAWFD7YO56Z6E.jpg', '2023-06-12 20:51:00', 'https://www.youtube.com/watch?v=KfEWXvaJIEg'),
(11, 1, 'Déforestation importée : la nouvelle législation européenne entre en vigueur', 'Les opérateurs qui mettent sur le marché européen ou exportent des produits susceptibles de contribuer à la déforestation doivent adopter un système de diligence raisonnée. Le nouveau règlement européen entre en vigueur le 30 juin 2023.', 'Réduire au maximum le risque de déforestation et de dégradation des forêts associé aux produits mis sur le marché de l\'Union européenne ou exportés à partir de celui-ci. Tel est l\'objectif principal du règlement publié le 9 juin au Journal officiel de l\'UE. Ce texte, qui entre en vigueur le 30 juin 2023 et qui abroge le règlement sur le bois de l\'UE (RBUE) de 2010, prévoit toutefois une période transitoire. Il laisse aux opérateurs jusqu\'au 30 décembre 2024 pour s\'adapter, et jusqu\'au 30 juin 2025 pour les petites entreprises. L\'Organisation des Nations unies pour l\'alimentation et l\'agriculture (FAO) estime que les pertes nettes (prenant en compte les forêts régénérées) de la superficie de forêt s\'élèvent à 178 millions d\'hectares entre 1990 et 2020, soit trois fois la France. Et la déforestation est, à elle seule, responsable de 11 % des émissions de gaz à effet de serre mondiales, tandis que les émissions directes provenant de la production agricole en représentent 12 %, selon le rapport spécial du Giec de 2019.\r\n\r\n« Le principal moteur de ces processus est l\'expansion des terres agricoles qui est liée à la production de produits tels que l\'huile de palme, le bétail, le soja, le café, le cacao, le bois et le caoutchouc », explique la Commission européenne. Étant donné que l\'UE est une économie majeure et grande consommatrice de ces produits de base, cette étape contribuera à mettre un terme à une part considérable de la déforestation et de la dégradation des forêts à l\'échelle mondiale et, partant, à réduire les émissions de gaz à effet de serre et la perte de biodiversité. » L\'exécutif européen affiche également l\'ambition, à travers ce texte, de « garantir les moyens de subsistance de millions de personnes », en particulier des communautés locales dépendantes des écosystèmes forestiers. Le règlement fixe des obligations aux opérateurs qui mettent sur le marché de l\'UE ou exportent à partir de celui-ci des produits qui contiennent l\'un des produits de base suivant, ou ont été nourris ou fabriqués à partir de tels produits : bovins, cacao, café, palmier à huile, caoutchouc, soja et bois. « Ces produits de base ont été choisis sur la base d\'une analyse d\'impact approfondie qui les a identifiés comme étant le principal moteur de la déforestation due à l\'expansion agricole », explique la Commission européenne. Sont également concernés des produits dérivés de ces produits de base tels que le chocolat, les meubles, le papier imprimé ou des produits d\'hygiène utilisant de l\'huile de palme. Les opérateurs concernés doivent mettre en place un système de diligence raisonnée. Dans ce cadre, ils doivent prouver que les produits sont issus de terres qui n\'ont pas fait l\'objet de déforestation après le 31 décembre 2020 et qu\'ils sont conformes à toutes les lois en vigueur dans le pays de production. Les entreprises doivent également collecter des informations géographiques précises sur les terres agricoles sur lesquelles ont été cultivés les produits qu\'elles fournissent afin de garantir leur traçabilité. La Commission européenne doit mettre en place un système d\'évaluation comparative qui attribuera aux différents pays un niveau de risque (faible, standard, élevé) lié à la déforestation. « La catégorie de risque déterminera l\'étendue des obligations spécifiques des opérateurs et des autorités des États membres en matière d\'inspections et de contrôles, favorisant ainsi un suivi renforcé pour les pays à risque élevé et une diligence raisonnée simplifiée pour les pays à faible risque », expliquent les services du Conseil de l\'UE. Les États membres devront contrôler 9 % des opérateurs de produits issus de pays à risque élevé, 3 % de ceux issus de pays à risque standard et 1 % de ceux à risque faible. Ils doivent aussi veiller à ce que les sanctions soient « effectives, proportionnées et dissuasives ». Ces sanctions devront notamment comprendre des montants d\'amende représentant au moins 4 % du chiffre d\'affaires annuel européen des opérateurs pris en défaut. « Ce texte, à l\'ambition inédite, peut marquer un tournant dans la lutte contre la déforestation mondiale : c\'est la première fois qu\'une législation interdit la commercialisation de produits résultant de la destruction des forêts », salue Greenpeace. L\'ONG pointe toutefois la question clé des contrôles et de la désignation des autorités nationales qui en seront chargées. « Pour garantir l\'efficacité du règlement, il faudra que chaque État membre s\'assure de mettre à la disposition des autorités compétentes les moyens humains et économiques adéquats pour répondre aux exigences de cette nouvelle législation. Faute de quoi, ce règlement risque de tomber dans les travers rencontrés par le règlement sur le bois illégal, qui n\'a pas permis d\'enrayer le trafic de bois dans l\'UE, faute de moyens », explique Greenpeace, qui a emprunté la voie pénale pour tenter de faire appliquer ce texte.\r\n\r\nL\'ONG pointe également d\'autres lacunes dans le nouveau règlement, qu\'elle espère voir corrigées à l\'occasion des révisions programmées : prise en compte d\'autres écosystèmes que la seule forêt, élargissement du règlement à l\'ensemble des produits d\'élevage et au maïs, ainsi qu\'au secteur financier. « Contrairement à ce que nous imaginons, le principal impact que nous avons, nous Européens, n\'est pas en Amazonie, mais dans l\'immense savane du Cerrado, située juste au sud. Là-bas, la culture du soja a déjà entraîné la disparition de la moitié de sa végétation. Si la loi ne protège pas cet écosystème, elle passera donc à côté du problème », explique Klervi Leguenic, de l\'association Canopée.\r\n\r\nDes opportunités seront données par trois échéances prévues par le texte. La Commission est en effet chargée d\'une évaluation et, le cas échéant, d\'une proposition législative, sur une extension du règlement à d\'autres surfaces boisées d\'ici un an, à d\'autres écosystèmes tels que les prairies, tourbières et zones humides et à d\'autres produits de base d\'ici deux ans. Elle devra aussi procéder à un réexamen général du règlement avant le 30 juin 2028, puis tous les cinq ans.', 'https://www.actu-environnement.com/images/illustrations/news/41957_large.jpg', '2023-06-12 20:58:00', 'https://www.youtube.com/watch?v=P2pny4Nvojw&pp=ygUPZMOpZm9yZXN0YXRpb24g&pbjreload=102');

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `lien_twitter` varchar(255) NOT NULL,
  `lien_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `lien_twitter`, `lien_avatar`) VALUES
(1, 'Crisostomo', 'Jhermaine', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-jhermaine.jpeg'),
(2, 'Conégan', 'Matéo', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-mateo.jpeg'),
(3, 'Despré', 'Baptiste', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-baptiste.jpeg'),
(4, 'Diakite', 'Marvin', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-marvin.jpeg'),
(5, 'Guitton', 'Luna', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-luna.jpeg'),
(6, 'Cao', 'Tony', 'https://twitter.com/UniversiteCergy', 'https://jcris.alwaysdata.net/SAE203/ressources/images/portrait-tony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connexion`
--

INSERT INTO `connexion` (`id`, `utilisateur`, `mot_de_passe`) VALUES
(0, 'SAE203', 'comunique');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nom`, `prenom`, `email`, `contenu`, `type`, `date_creation`) VALUES
(1, 'Martin', 'Thomas', 'm.thomas43@yopmail.com', 'Je suis intéressé par la formation.', 'etudiant', '2022-04-13 08:28:01'),
(2, 'Despoux', 'Helena', 'h.despoux@foo.fr', 'Je suis intéressé par la formation.', 'etudiant', '2022-04-13 08:28:01'),
(11, 'c', 'j', 'jhermaine.crstm@gmail.com', 'coucou', 'etudiant', '2023-05-23 12:29:47'),
(12, 'c', 'j', 'jhermaine.crstm@gmail.com', 'essaie', 'etudiant', '2023-05-30 11:44:38'),
(13, 'c', 'j', 'jhermaine.crstm@gmail.com', 'hvcsgcdytfqdvjzudyfufq', 'etudiant', '2023-06-12 15:30:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E6660BB6FE6` (`auteur_id`);

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

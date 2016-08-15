-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: gateways
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colleges` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `accomodation_count` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
INSERT INTO `colleges` VALUES (1,'Chinmaya Institute of Technology','chintech@chintech.ac.in','8708208','Chinmaya Institute of Technology, Govindagiri, Chala, PO Thottada Kannur,Kerala PIN: 670 007','4972822923',0),(2,'NIELIT Centre Calicut','nazeer@nitc.ac.in ','6776642','Post Box No. 5, P. O. NIT Campus, CALICUT - 673601, Kerala','4952286800',0),(3,'Govt. Engineering College Thrissur','Hodmca@gec.tcr','9190229','Government Engineering College,Thrissur - 680 009, Kerala, India','9895464415',0),(4,'KVM College Of Engineering & Information Technology','kvmceit@gmail.com','2495175',' KVM College Road, Kokkothamangalam P.O , Cherthala, Alappuzha, Kerala 688527','4782811080',0),(5,'KristuJyoti College Of Management Of Technology','kristujyoti@gmail.com','6498495','Kristu Jyoti College of Management and Technology\nChetipuzha, Kurisummoodu P.O.,\nChanganacherry, Kottayam,\nKerala, India,\nPIN : 686 104','9447965274',0),(6,'MES College Marampally','info@mesimat.ac.in ','9672578','MES College Marampally\nMarampally P O,\nNorth Vazhakulam, Aluva,\nErnakulam (Dist.),\nKerala, India.\nPincode - 683 107','4842677104',0),(7,'Mar Athanasios College For Advanced Studies','principal@macfast.org','5684612','Mar Athanasios College for Advanced Studies (MACFAST)\nTiruvalla, \nKerala, \nIndia. Pin-689 101\n','4692730313',0),(8,'Marian College','mariancollege@mariancollege.org\n\n','1299008','Marian College, Kuttikkanam P.O, Peermade,\nIdukki, Kerala, India - 685531','9447573105',0),(9,'Marthoma Institute Of Information Technology','miitayur@bsnl.in','3030816','Chadayamangalam P.O Ayur, Kollam District, Kerala 691001','9447046637',0),(10,'MES College Of Engineering','nowshadcv@gmail.com','5632495','Thrikkanapuram, Kuttippuram, Malappuram, Kerala 679573\n','9656823676',0),(11,'Rajagiri College Of Social Sciences','bindya@rajagiri.edu','9393893','Rajagiri College of Social Sciences (Autonomous),                           Rajagiri P.O,\nKalamassery, Cochin - 683 104\nKerala,\nIndia.','9846281188',0),(12,'Regional Centre School Of Technology & Applied','stasmgu@gmail.com','4780472','MG Regional Centre, Edapally Raghavan Pillai Road, Ernakulam, Edappally, Kerala 682024\n','4842340402',0),(13,'Santhigiri College Of Computer Sciences','nv.melvin@gmail.com','6769186','Santhigiri College\nVazhithala, Thodupuzha\nIdukki Dt., Kerala, India\nPostcode 685 583','4862273006',0),(14,'School of Communication & Management Studies','sstm@scms.org','3002757','SCMS COCHIN SCHOOL OF BUSINESS\nSCMS Campus, Prathap Nagar\nMuttom, Aluva\nCochin – 683 106, Kerala, INDIA.','4842623803',0),(15,'Mary matha college','tmonoph@yahoo.com','3803552','Mananthavady Vemom P.O., Mananthavady, Wayanad, Kerala 670645\n','9400759752',0),(16,'Thangal Kunju Musaliar College of Engineering','principal@tkmce.ac.in','8170794','TKM College of Engineering,\nKaricode, \nKollam-691005,\nKerala,India','8547791197',0),(17,'College Of Applied Sciences (IHRD), Calicut','po.ihrd@gmail.com','9550911','College of Applied Science,\nBalan. K. Nair Road, Kiliyanad,\nKozhikode, Kerala State-673 001','9447885352',0),(18,'College Of Applied Sciences,Vadakkencherry','principal@casvdy.org','4803690','College of Applied Science\nErassankulam, Salem - Kochi Hwy, Vadakkencherry, Kerala 678683\n','9895577294',0),(19,'DE Paul Institute Of Science & Technology','joseph@depaul.edu.in','8731055','Depaul Institute of Science and Technology, De Paul Nagar,Angamaly South, Kochi, Kerala - 683573','4842911800',0),(20,'Federal Institute of Science And Technology(FISAT)','koduveriali@gmail.com','6849998','Hormis Nagar, Mookkannoor P O, Angamaly, Ernakulam, Kerala 683577','8547680990',0),(21,'Lal Bahadur Shastri Institute of Management (LBSIM)','pradeep@lbsim.ac.in','2258027','Lal Bahadur Shastri Institute of Management, Delhi\n11/07, Sector – 11\n(Near Metro Station) Dwarka,\nNew Delhi – 110075','1125307700',0),(22,'Jagan Institute of Management Studies','praveen@jimsindia.org','3558495','3, Institutional Area, Sector-5, Near Rajiv Gandhi Cancer Research Institute, Rohini, New Delhi, Delhi 110085','1145184000',0),(23,'  IEC College of Engineering & Technology','hodcs@ieccollege.com','2074129','5, Sant Nagar (Ground Floor), East of Kailash, New Delhi 110065','1202326665',0),(24,'HMR Institute of Technology and Management','hmritmdydirector@gmail.com','5950040','Plot No. 370, Hamidpur, Delhi, Delhi NCR – 110036','1127724114',0),(25,'Institute of Information Technology of Management (IITM)','director@iitmitu.ac.in','2085977','D-29, Institutional Area, Janakpuri, New Delhi-110058','1128525051',0),(26,'Delhi Institute of Higher Education (DIHE)','mohitmathur@jimsindia.org','168858','Community Centre, Sector-3, Rohini, Delhi, Delhi NCR - 110085','9811349167',0),(27,'Vivekanand Institute of Professional Studies','supriyamadan.vips@gmail.com','9245066','AU Block (Outer Ring Road), Pitampura, Delhi - 110034','1127343401',0),(28,'ATM Global Business School','shilpa@atm.edu.in','6748595','Plot No. 12, Deep Central Market, Ashok Vihar, Phase-1, Delhi - 110052','9810084417',0),(29,'New Delhi Institute for Information Technology and Management (NDIIT)','info.ndiit@gmail.com','7658822','105, MOR Pocket, Kalkaji New Delhi Delhi 110019','1143136666',0),(30,' CBS Group of Institutions','ceo@cbscolleges.com','4874283','B-8, Gujranwala Town, Part-1, Near Model Town, Metro Station Exit No.4, New Delhi-110009','8860168713',0),(31,'Tecnia Instiutute of Advanced Studies','directortias@tecnia.in','7715647','3 PSP, Institutional Area, Madhuban Chowk, Rohini, New Delhi-110085','1127555121',0),(32,'  Rukmini Devi Institute of Advanced Studies','jyoti.arora@rdias.ac.in','938730','2A & 2B, Phase-1, Madhuban Chowk, Outer Ring Road, Rohini, Delhi-110085','1127864596',0),(33,'Department of Computer Science - University of Delhi','drskmuttoo@gmail.com office.cs.du@gmail.com','7030127','1st Floor, New Academic Block, Delhi, Delhi NCR - 110007','1127667725',0),(34,' Gitarattan International Business School','gibs@gitarattan.edu.in','4490772','PSP 2A & 2B Complex - II, Madhuban Chowk , Sector - 14, Rohini Delhi- 110085','1127555607',0),(35,'Delhi Institute of Advanced Studies','dias@dias.ac.in','3724229','Plot No 6, Sector-25, Rohini, New Delhi - 110085','1127932742',0),(36,' Banarsidas Chandiwala Institute of Information Technology (BCIIT)','director@bciit.ac.in','5306919','Chandiwala Estate, Maa Anandmai Marg, Kalkaji, New Delhi-110019','1149020144',0),(37,'RC Institute of Technology','rcit1@rediff.com','3699562','Gopal Nagar, Najafgarh, New Delhi - 110043.','1128015971',0),(38,'Northern India Engineering College',' niecnd.dir@gmail.com','5617560','FC-26, Shahdara, New Delhi, DL 110031','1139905900',0),(39,' IPD College ( International Professional Development College )','ipdcollege@gmail.com','9175266','487/5 Outer Ring Road, Peeragarhi Chowk, New Delhi-110087','1132495020',0),(40,' Bharati Vidyapeeth\'s Institute of Computer Applications & Management','narinat@gmail.com','7750741','A-4, Paschim Vihar, Opp. Paschim Vihar (East) Metro Station, Rohtak Road, New Delhi - 110063','1125275055',0),(41,' Delhi Institute of Computer Technology','info@dict.org.in','6584069','A-1233/34, First Floor, G. D. Colony, Mayur Vihar Phase-3, Delhi - 110096','1122613567',0),(42,'Webuniv - South Extension','nidhi.webuniv@gmail.com','9820862','N-5, 2nd Floor, Main Ring Road, , Adjacent to Flyover, South Ex 1, Delhi, Delhi, India- 110049','1146094300',0),(43,' Noble Institute of Professional Studies','nips13@gmail.com','8509686','13, Central Market, Second Floor, Ashok Vihar, Delhi, Delhi, India- 110052','9212223500',0),(44,'Mahatma Gandhi University','ccspbhajanpura@gmail.com','201704','EIPS, E - 528 & 529, Sector - 7, , Dwarka (Near Ramphal Chowk and dwarka Sector - 9 Metro Station), New delhi','9868639785',0),(45,'Wesley PG College','wesleypgc@yahoo.com','3715448','145, McIntyre Road, Opp. Anand Theatre, Secunderabad, Andhra Pradesh - 500003','4027818139',0),(46,'Kasturba Gandhi Degree & PG College for Women','akkireddysunitha@yahoo.com','6598385','Street Number 10, Aswini Colony, West Marredpally, Secunderabad, Telangana 500026\n','9676056078',0),(47,'Loyola Academy Degree College','lacademyinformation@yahoo.com','652188','Off Suchitra X Roads, Old Alwal, Secunderabad, Telangana 500010','4027862363',0),(48,'GITAM University','hod_cs@gitam.edu','6081844','Rudraram, Patancheru Mandal, Medak District, Hyderabad, Telangana 502329','8912790101',0),(49,'Pydiah College for PG Studies','admpydah@gmail.com','6407756','Gambheeram, Boyaplem, Visakhapatnam, Andhra Pradesh, 531163','9848058608',0),(50,'Osmania University College of Engineering (OUCE), Hyderabad','schandram@gmail.com','4848631','Osmania University Main Rd, Osmania University, Amberpet, Hyderabad, Telangana 500007','4027098254',0),(51,'St. Francis College for Women,Hyderabad','afeefaafn@gmail.com','3194475','Street.No.6,Uma Nagar, Begumpet, Hyderabad, Telangana 500016','9985257906',0),(52,'Holy Cross College','computerscience@hcctrichy.ac.in','7356324','Sangillyandapuram, Tiruchirappalli, Tamil Nadu 620020','4312700637 ',0),(53,'Fatima College','compscifcmdu1998@gmail.com','355596','Old Dindigul Rd, Madurai, Tamil Nadu 625001','4522669015',0),(54,'Thiagarajar College of Engineering','hod_mca@adhiyamaan.ac.in','3210885','GST Road, Thiruparankundram, Madurai, Tamil Nadu 625015','452248224',0),(55,'Loyola college','amaliasha@gmail.com','6898370',' Loyola Alumni Association, Sterling Road, Near Nungambakkam Railway Station, Nungambakkam, Chennai, Tamil Nadu 600034\n','4428178200',0),(56,'Ethiraj College for Women','ethirajprincy@yahoo.com','506457','70, Ethiraj Salai, Egmore, Thousand Lights, Chennai, Tamil Nadu 600008','4428245092',0),(57,'Jaya Engineering College','mcahod@jec.ac.in','9638788','CTH Road , Thiruninravur, \nChennai, Tamil Nadu - 602024\n','4426390041',0),(58,'Sri Sairam engineering college','sairam@sairam.edu.in','4461355','Sai Leo Nagar, West Tambaram, \nChennai, Tamil Nadu - 600044\n','4422512222',0),(59,'Stella Maris College','csdeptsmc@gmail.com','2265930','17, Cathedral Rd, Chokkalingam Nagar, Teynampet, Chennai, Tamil Nadu 600086','4428111987',0),(60,'SRM University, Chennai','hod.dca@ktr.srmuniv.ac.in','6291033','SRM Nagar, Potheri, Kattankulathur, Kancheepuram District, Near Potheri Railway Station, Chennai, Tamil Nadu 603203','9789064844',0),(61,'Sathyabama University',' deanoffice@sathyabamauniversity.ac.in','5326385','Jeppiaar Nagar, Rajiv Gandhi Road, \nChennai, Tamil Nadu - 600119\n','4424503150',0),(62,'Vels University','vistas@velsuniv.org','2648083','P.V. Vaithiyalingam Road Pallavaram, \nChennai, Tamil Nadu - 600117 \n','4422662500',0),(63,'Hindustan Institute of Technology & Science','cse@hindustanuniv.ac.in','3768803','P.O.Box No.1, Rajiv Gandhi Salai (OMR), Padur, Kelambakkam, \nChennai, Tamil Nadu - 603103\n','4427474262',0),(64,'Madha Engineering College','info@madhaengineeringcollege.com','34125','Madha Nagar, Somangalam Road, \nKundrathur, Chennai, \nTamil Nadu - 600069\n','4424780732',0),(65,'Presidency College ','jothivenkateswaran@co.in','2548049','Kannagi Salai, Chepauk, Triplicane, Chennai, Tamil Nadu 600005','4428544894',0),(66,'Vel Sri Rangarajan Sakunthala College of Multimedia','register@veltechuniv.edu.in','6901002','42, Avadi- Alamathi Road, Chennai, Tamil Nadu - 600062','4424334845',0),(67,'PSG College of Technology','ctr.psg@gmail.com','7602637','Post Box No. 1611 Peelamedu, Coimbatore, Tamil Nadu - 641004','4222572177',0),(68,'Dr Mahalingam College of Engineering & Technology','hod_ca@drmcet.ac.in','227957','NPT - MCET Campus, Udumalai Road, Pollachi, Tamil Nadu 642003','4259236030',0),(69,'PSGR Krishnammal College for Women','msvijaya@psgrkc.com','7274263',' Avinashi Rd, Peelamedu, Coimbatore, Tamil Nadu 641004','4224295959',0),(70,'CMS College of Science and Commerce','cmscadept16@gmail.com','620555','Near CRI Pumps, Chinnavedampatty, Coimbatore, Tamil Nadu 641049','4222666465',0),(71,'Tamilnadu College of Engineering','sun_dmurali@yahoo.com','2676690','Palanisame Ravi Nagar, Karumathampatti, Coimbatore, Tamil Nadu - 641659','4213200244',0),(72,'Dr SNS Rajalakshmi College of Arts and Science','vkathirmca@gmail.com','8167206','486, Thudiyalur-Saravanampatti Road, Chinavedampatti, Near Ramani\'s Sri Mayuri Layout, Coimbatore, Tamil Nadu 641049','9843086670',0),(73,'Dr NGP Institute of Technology','directormca@drngpit.ac.in','5101140','Kalapatti Road, Coimbatore, Tamil Nadu - 641048','9442853333',0),(74,'RVS College of Arts and Science','gracepadma@rvsgroup.com','4073734','242-B, Trichy Road, Sulur, Coimbatore, Tamil Nadu - 641402','4222687421',0),(75,'Sri Krishna College of Engineering and Technology','srideviuk@skcet.ac.in','6904225','Kuniamuthur, Coimbatore, Tamil Nadu, India- 641008','4222678001',0),(76,'Sree Naryana Guru Colleges','priyaminerva@rediffmail.com','4438105','Salem - Kochi Hwy, KG Chavadi, Tamil Nadu 641011','4222656371',0),(77,'Karpagam University','venikarthik04@gmail.com','1064986','Pollachi Main Road, L & T By Pass Road Junction Eachanari Post, Eachanari, Coimbatore, Tamil Nadu 641021','4226471113',0),(78,'KG College of Arts and Science','rr@kgisl.com ','8481708','366/1, Thudiyalur Road, Saravanampatti, Saravanampatti, Coimbatore, Tamil Nadu 641035','9362928734',0),(79,'S. N. R. Sons College','cs@snrsonscollege.org','7162206',' S.N.R. College Road, Ganapathy Post, Siddhapur, Sri Ramakrishna Dental College and Hospital, P N Palayam, Coimbatore, Tamil Nadu 641044','4222562788',0),(80,'Sree Ramu College of Arts and Science','srtcas@yahoo.com','4757799','N M Sungam, Valparai Main Road, Thensangampalayam, Tamil Nadu 642007','4259286969',0),(81,'Hindustan College of Engineering and Technology','hicetmcahod@hindusthan.net','8058209','Othakkalmandapam (Post), Pollachi Main Road, \nCoimbatore, Tamil Nadu - 641032\n','4222611833',0),(82,'Amrita School of Engineering','vr_umayal@cb.amrita.edu','4373923','Amritanagar, \nCoimbatore, Tamil Nadu - 641112\n','4222685000',0),(83,'Park College of Engineering & Technology','pcetmca@gmail.com','9431001','NH 47, Avinashi Road, Kaniyur, Coimbatore, Tamil Nadu 641659','4212911100',0),(84,'Alpha Arts and college','aneeshkumar.alpha@gmail.com','4643277','No.30, Tundalam Road, Chettiyar Agaram Road, Behind Ramachandra Hospital,, Porur, Chennai, Tamil Nadu 600116','0442476 2368',0),(85,'K. S. Rangasamy College of Technology','','1340734','KSR Kalvi Nagar, Tiruchengode, Tamil Nadu 637215','4288274741',0),(86,'Nehru Arts and Science','','6290365','Nehru College Road, Thirumalayampalayam, Coimbatore, Tamil Nadu 641105','4222623055',0),(87,'Kumaraguru College Of Technology','','7173777','Chinnavedampatti, Saravanampatty, Coimbatore, Tamil Nadu 641049','4222661100',0),(88,'Mother Teresa Women University','','8477833','Attuvampatti, Dindigul District, Kodaikanal, Tamil Nadu 624101','4542243977',0),(89,'Kongu Engineering College','','4504211','Thoppupalayam, Perundurai, Erode, Tamil Nadu 638052',' 04294226555',0),(90,'Bengal College of Engineering & Technology','rahim_bcet@yahoo.in','8039841','195/2, Park Street, Kolkata West Bengal - 700 017','9932926810',0),(91,' BP Poddar Institute of Management & Technology','info@bppimt.ac.in','2861061','137,V.I.P. Road, PoddarVihar, Kolkata,West Bengal - 700052','3340619174',0),(92,'   Pailan College of Management & Technology','admission@pcnk-india.net','9923490','Sector - 1 Phase I Bengal Pailan Park,(off D.H. Road), Joka,Kolkata,West Bengal - 700104','3324535605',0),(93,'Lovely Professional University','info@lpu.co.in','555882','Jalandhar-Delhi, G.T. Road (NH-1),Phagwara, Punjab (INDIA) -144411.','1824404404',0),(94,'IIMT ENGINEERING COLLEGE','hodmca@iimtindia.net','9894602','IIMT Nagar, ‘O’ Pocket,Ganga Nagar Colony, Mawana Road, Meerut(U.P.)','1212793710',0),(95,'Shivaji University','pgdutr@unishivaji.ac.in','6706267','Head of the Department,\nDepartment of Computer Science,\nShivaji University, Kolhapur\nVidya Nagar, Kolhapur, \n      Maharashtra 416004\n','2312609000',0),(96,'Xavier College','sunnyker.darla@gmail.com','1962783','Circuit House Area, Sonari, Jamshedpur, Jharkhand 831001','9031359993',0),(97,'Alvas College, Moodbidri-Mangalore','sunil.space@gmail.com','8097202','Vidyagiri, Moodubidire, Puthige, Karnataka 574227','9845334624',0),(98,'St Aloysius College, Mangalore','vinulasrado@gmail.com','6496152','Light House Hill Rd, Hampankatta, Mangaluru, Karnataka 575003','9900148448',0),(99,'Gogte institute of technology,Belgaum','sairajnaik777@gmail.com','3141823','Jnana Ganga, Khanapur Road, Udyambag, Belagavi, Karnataka 590008','8123593918',0),(100,'Symbiosis Institute of Computer Studies and Research','aao@sicsr.ac.in','6999573','Floor- 1,2,3,4,7, Atur Centre, Gokhale Cross Road, Model Colony, Pune, Maharashtra 411016','2025675601',0),(101,'Mohanlal Sukhadia University','physics@mlsu.ac.in','2356235','University Road, Ganesh Nagar, Udaipur, Rajasthan 313001','9928093213',0),(102,'Pacific university,rajastan','malasiyagaurag@gmail.com','703357','Pacific Hills, Near Pratapnagar Extn., Airport Road, Debari, Udaipur, Rajasthan 313003','9782020888',0),(103,'Don Bosco, Goa','bladeofdarkmehh8@gmail.com','2624684','MG Road, Near Municipal Market, Altinho, Panjim, Goa 403001','9049399210',0),(104,'Goa University','ashayborkar@gmail.com','9547068','Taleigao Plateau, Goa 403206','9049858498',0),(105,'New Horizon College','dcanhce@gmail.com','3232621','Ring Road, Bellandur Post, Marathahalli, Bangalore, Karnataka, India- 560103','8028440666',0),(106,'Acharya Institute of Management & Sciences\n\n','principal@theaims.ac.in','932039','1st cross, 1st stage, Peenya, Bangalore 560 058','8041253496',0),(107,'\nThe Oxford College of Engineering\n','rjamandhi@hotmail.com','1821919','\n10th Milestone, Bommanahalli, Hosur Road,\nBangalore , Karnataka – 560068','8030219774',0),(108,'\nThe Oxford College of Science   ','hodcsa@theoxford.edu','154168','                                           \nNo.32, 17th B Main, \nSector IV, HSR Layout, \nBangalore 560 102\n','8030266301',0),(109,'DayanandaSagar College of Engineering\n','hod-cse@dayanandasagara.edu','3050166','\nShivageMalleshwara Hills,Kumaraswamy Layout, Bangalore-560078','8026662226',0),(110,'Acharya Institute of Management & Sciences\n\n','mail to hod.cse@cmrit.ac.in ','6152396','No.2, 3rd ‘C’Cross,\n6th ‘A’ Main, 2nd block\nHRBR layout,\nBangalore-560043\n','8025427700',0),(111,'Brindavan College of Engineering','msksasi@yahoo.com','7577681','Dwarakanagar, Bagalur Main Road, Near Air force Station, Yelahanaka, Bangalore, Karnataka, India- 560063','8028478423',0),(112,'\nT.John College   \n','hymathik@tjohngroup.com','3962228','              \n#88/1, Bannerghatta Road,\nBangalore , Karnataka – 560004                                                                                  \n','8028429126',0),(113,'\nSurana College\n','djarori@gmail.com','5713040','\n16,South End Road,\nBangalore , Karnataka – 560083','8028486382',0),(114,'BMS College of Engineering',' hod.mca@bmsce.ac.in','1041089','P.O. Box No. 1908, Bull Temple Road\nBangalore,Karnataka – 560019\n','8026622130',0),(115,'JyotiNivas College     \n','jncpgcourses@gmail.com','6214669','\nHosur Road\nBangalore ,  Karnataka – 560095','8025530137',0),(116,'KristuJayanti college of Management & Technology \n','anthonyvincent@kristujayanti.in','3334654','\nK. Narayanapura, Kothanpur,Bangalore , Karnataka – 560077     ','8028465611',0),(117,' \nMount Carmel College\n\n','mcc_mca_office@yahoo.co.in','1457798','58, Palace Road,\nBangalore , Karnataka – 560052','8022261487',0),(118,'RV College of Engineering (RVCE),','shobhag@rvce.edu.in','1769225','R V Vidyaniketan Post, Mysore Road, Bangalore, Karnataka - 560059','8067178020',0),(119,'\n Jain University      \nSchool of Engineering & Technology\n\n','suchithra.suriya@gmail.com','6272405','45th km, NH - 209, Jakkasandra Post\nKanakapura Road \nBangalore - 562 112 \n','8027577199',0),(120,'East West Group Of Institutions','kspraveen85@gmail.com','4922431','#63, Off Magadi Main Road, Near Anjananagar, Vishwaneedam, Bangalore, Karnataka, India- 560091','8023288899',0),(121,'City College   \n\n','bccprincipal2015@gmail.com','1970436','160, Chelekere Main Road\nBanaswadi Outer Ring Road, Kalyanagar Post,\nBehind BTS Bus Depot, Bangalore - 560 043','8025459956',0),(122,'\nPES Institute of Technology\n','neelam@pes.edu','1168559','\n100 Feet Ring Road, BSK III Stage,\nBangalore , Karnataka – 560050','8026720410',0),(123,'\nR N S Institute of Technology                                                  \nTechnology Channasandra,       \n','sham4singh@yahoo.com','9649680','Uttarahalli Road,                   \nSubramanya Pura Post, Bangalore– 560061                 ','9448250632',0),(124,'Presidency College','alliarul@yahoo.co.in','8881602','Kempapura, Near Reliance Fresh, Hebbal, Bengaluru, Karnataka 560024','9844262504',0),(125,'CMR Institute of Technology\n','hodmca.ims@cmr.ac.in','9946688','\n132 AECS layout, IT Park Road,\nBangalore, Karnataka-560037','9845598590',0),(126,'St.joseph\'s','sam.arunojyan@gmail.com','2785348','36, Langford Rd, Langford Gardens, Bengaluru, Karnataka 560027\nPhone: 080 2221 1429','9739548846',0),(127,'Nitte Meenakshi Institute of Technolog','joylavinya@gmail.com','429876','Govindapura, Gollahalli, Yelahanka, Bangalore, Karnataka - 560064','8022167874',0),(128,'KLE Society\'s S Nijalingappa College','bca@klesnc.org','2576458','PB No 1040, 2nd Block, Rajaji Nagar, Bangalore, Karnataka - 560010','8023526055',0),(129,'Sambhram Institute of Technology, ','amanju64@gmail.com','9164014','MS Palya, Via Jalahalli East, \nBangalore, Karnataka - 560097 \n','\n8023643618',0),(130,'PES School of Engineering (PESSE), ','artiarya@pes.edu','9680956','Hosur Road (1 Km before Electronic City), \nBangalore, Karnataka - 560100 \n','8066186629',0),(131,'\nSRN Adarsh College      \n','nitai2009@gmail.com','5026735','                                                       \n5th Min, Chamarjpeth,                                                   \nBangalore , Karnataka – 560018       ','8026677100',0),(132,'Krupanidhi Degree College, ','rock.reddi@gmail.com','3301596','Chikka Bellandur, Carmelaram Post,\nVarthur Hobli, Bangalore, \nKarnataka - 560035 \n','9986935808',0),(133,'Global Institute of Management Sciences, ','principal@gimsbengaluru.com','9957222','\n#6, 3rd Main, D RoadIdeal Homes Township, \nRajarajeswari Nagar, II Phase, \nBangalore - 560098 \n','9900329327',0),(134,'\nCapital College,\n','','6690134',' \n16th KM Old Madras Road,\nBangalore, Karnataka - 560036 \n','8050735308',0);
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `e_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `description` text,
  `code_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'IT Manager','the most awaited and fun filled event of Gateways. This event is aimed at picking out the best future IT manager from the masses. Are you the one?','itmanager'),(2,'Gaming','Exciting and fast-paced action filled event that promises to keep the gamers on the edge. Get fast or keep walking.','gaming'),(3,'JAM','Are you the talkative kind with a knack for the English language? All you get is a minute to talk but then a minute is a lot if you think about it!','jam'),(4,'IT Quiz','This one is for the avid quizzers. Try and answer the most challenging questions that are painstakingly made difficult, just for you. Care to try?','quiz'),(5,'Product Launch','Have an idea? Here is a platform that helps you showcase your idea and market it. Come on, make us want to buy your product!','productlaunch'),(6,'Coding and Debugging','Serious geeks take note. The most twisted and brain teasing code snippets await you. Do the code. ','coding'),(7,'Web Designing','Make a website from scratch. Be the creative kind and design a web page that can knock us right off of our seats.','web'),(8,'Video Editing','You think you can be a director? An editor? Well, prove it. Make a video, edit it and submit. We will see if you have what it takes to be the next Nolan.','video'),(9,'Green Art','Worried about the levels of global warming? Here is your chance to design something creative and happening out of waste. Do your part for nature. ','greenart'),(10,'Dumb Charades','What would you do if you lost your ability to speak? ACT ! Act out phrases or words and make your mates understand what you are implying. ','dumbcharades'),(11,'Photography','Want to make it to the cover of Nat Geo wild magazine? This is the first step. Give it your best and capture an amazing picture. Click!','photo'),(12,'Mock Parliament','Hello there future politician. This one is for you. Speak your mind, have a shout and make it your stage at the biggest, well kind of, mock parliament.','mockparliament'),(13,'Treasure Hunt','Wear your eye patch and your pirate hat, stomp out on your wooden leg and look for your treasure hidden so well that if you can find it, you get to keep it.','treasurehunt'),(14,'Poster Making','Art person? Splash your colors and spill your imagination onto the canvas and convey your ideas to the world. Well, to whoever is watching.','postermaking');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_organizers`
--

DROP TABLE IF EXISTS `events_organizers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_organizers` (
  `e_id` int(2) DEFAULT NULL,
  `o_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_organizers`
--

LOCK TABLES `events_organizers` WRITE;
/*!40000 ALTER TABLE `events_organizers` DISABLE KEYS */;
INSERT INTO `events_organizers` VALUES (6,1),(7,2),(4,3),(5,4),(1,5),(8,6),(14,7),(3,8),(12,9),(10,10),(11,11),(2,13),(9,14),(0,15),(0,16),(13,12);
/*!40000 ALTER TABLE `events_organizers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizers`
--

DROP TABLE IF EXISTS `organizers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizers` (
  `o_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `privilege` int(2) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizers`
--

LOCK TABLES `organizers` WRITE;
/*!40000 ALTER TABLE `organizers` DISABLE KEYS */;
INSERT INTO `organizers` VALUES (1,'Jonathan Paul','9538225911',5,'jonathan.paul@mca.christuniversity.in','code_gateways','code_123'),(2,'Faisal Vasaya','9036171330',5,'vasaya.nadir@mca.christuniversity.in','web_gateways','web_123'),(3,'Akshay Santhanam','9916443981',5,'akshay.santhanam@mca.christuniversity.in','itq_gateways','itq_123'),(4,'Tinu Anand','9611449026',5,'tinu.singh@mca.christuniversity.in','prod_gateways','prod_123'),(5,'Alan George','8050476313',5,'alan.george@mca.christuniversity.in','itm_gateways','itm_123'),(6,'Vishak K','9845625132',5,'visakh.k@mca.christuniversity.in','vid_gateways','vid_123'),(7,'Manvender Rathore','8971512171',5,'manvender.rathore@mca.christuniversity.in','post_gateways','post_123'),(8,'Jereena Justin','9008604308',5,'jereena.justin@mca.christuniversity.in','jam_gateways','jam_123'),(9,'Rohit Joseph','9738113670',5,'rohit.joseph@mca.christuniversity.in','mock_gateways','mock_123'),(10,'Shreyas Raj','9900134116',5,'shreyas.raj@mca.christuniversity.in','dumb_gateways','dumb_123'),(11,'Aby Joseph','8553939637',5,'aby.joseph@mca.christuniversity.in','pho_gateways','pho_123'),(12,'Leo Immanuel','9980436727',5,'leo.immanuel@mca.christuniversity.in','tre_gateways','tre_123'),(13,'Clinton Cardoza','8861487702',5,'clinton.cardoza@mca.christuniversity.in','game_gateways','game_123'),(14,'Archana Lisbon','8951144047',5,'archana.lisbon@mca.christuniversity.in','green_gateways','green_123'),(15,'Diganta Das','8971089822',5,'diganta.das@mca.christuniversity.in','self_gateways','self_123'),(16,'Libin Thomas','8884238759',5,'libin.thomas@mca.christuniversity.in','art_gateways','art_123'),(17,'Co-ordinator','9686530428',10,'jerrin.james@mca.christuniversity.in','coord','ejgt'),(18,'ADMIN','8123963574',15,'jaison.saji@mca.christuniversity.in','admin','sajipaul');
/*!40000 ALTER TABLE `organizers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `col_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants`
--

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;
/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants_events`
--

DROP TABLE IF EXISTS `participants_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants_events` (
  `p_id` int(4) DEFAULT NULL,
  `e_id` int(2) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `present` int(1) DEFAULT NULL COMMENT '0 - absent, 1 - present'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants_events`
--

LOCK TABLES `participants_events` WRITE;
/*!40000 ALTER TABLE `participants_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `participants_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rounds`
--

DROP TABLE IF EXISTS `rounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rounds` (
  `round_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `v_id` int(2) NOT NULL,
  KEY `e_id` (`e_id`),
  KEY `v_id` (`v_id`),
  CONSTRAINT `rounds_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `events` (`e_id`),
  CONSTRAINT `rounds_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `venues` (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rounds`
--

LOCK TABLES `rounds` WRITE;
/*!40000 ALTER TABLE `rounds` DISABLE KEYS */;
INSERT INTO `rounds` VALUES (1,1,'13:00:00','17:00:00',9),(2,1,'14:00:00','16:00:00',1),(1,2,'11:00:00','14:00:00',4),(2,2,'11:00:00','13:00:00',4),(1,3,'11:00:00','13:00:00',1),(2,3,'11:00:00','13:00:00',1),(1,4,'15:30:00','17:00:00',8),(2,4,'09:00:00','11:00:00',1),(1,5,'11:00:00','13:00:00',2),(2,5,'11:00:00','13:00:00',3),(1,6,'14:00:00','16:00:00',5),(2,6,'09:00:00','11:00:00',5),(1,7,'11:00:00','13:00:00',5),(2,7,'11:00:00','13:00:00',5),(1,8,'11:00:00','16:00:00',7),(1,9,'14:00:00','16:00:00',6),(1,10,'11:00:00','13:00:00',10),(1,11,'11:00:00','16:00:00',7),(1,12,'09:00:00','11:00:00',10),(1,13,'09:00:00','13:00:00',8),(1,14,'09:00:00','11:00:00',4);
/*!40000 ALTER TABLE `rounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rules`
--

DROP TABLE IF EXISTS `rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rules` (
  `r_id` int(11) NOT NULL,
  `rule` text,
  `e_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rules`
--

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;
INSERT INTO `rules` VALUES (1,'Individual Event.',1),(2,'<b>Round 1: Decrypt to Speak</b>  <ul><li>Time to decrypt the topic: 10 min</li>     <li>Minimum time for speaking: 4 min </li></ul>',1),(3,'<b>Round 2: Pitch the Sponsor</b> <ul><li>Time provided for pitching idea: 10 min </li></ul> ',1),(4,'<b>Round 3: The Game of Startups (OPTIONAL ROUND)</b>             <ul><li>Time provided for understanding the startup: whole day.</li>                           <li>Time provided for explaining and contributing: 10 min </li></ul> ',1),(5,'<b>Round 4: The Stress Interview</b>                 <ul><li>RULES? THERE ARE NO RULES IN HELL!</li></ul>',1),(6,'<b>Counter Strike</b> <ul><li>1 team consisting of 5 members, from each college.</li> <li>Team members can bring their own gaming accessories (joysticks/mouse)</li></ul>',2),(7,'<b>NFS (Most Wanted)</b> <ul><li>2 members per college</li><li>Stock cars only to be used</li><li>Team members can bring your own gaming equipments(joystick, gamepad, headphones, mouse)</li></ul>',2),(8,'Individual event.',3),(9,'<b>Round 1 </b> <ul><li>Every contestant will get an individual topic. Time of one minute will be provided to prepare.</li></ul>',3),(10,'<b>Round 2</b><ul><li>Common topic for everyone to speak without any hesitation, repetition or deviation.</li></ul>',3),(11,'2 members per team.',4),(12,'One prelim and one final.',4),(13,'The top 6 teams from the prelims will qualify for the finals',4),(14,'The event will be a general quiz encapsulating everything from technology to current affairs.',4),(15,'No constrain on the number of teams per college',4),(16,'3 members each in a team.',5),(17,'Top 5 teams will make it to the finals.',5),(18,'<b>Round 1</b><ul><li>Prelims: (Theme)</li><li>Convert any given object into an A.I technology related object. (5 + 1 mins)</li></ul> ',5),(19,'<b>Round 2</b><ul><li>Prototype of the idea must be implemented (Use Photoshop , paint , wireframe technology)</li></ul>',5),(20,'<b>Final Round</b><ul><li>PPT presentation (Budget, Technical Specifications,)</li></ul>',5),(21,'Individual event.',6),(22,'No limit on the number of participants per college.',6),(23,'Internet usage strictly prohibited.',6),(24,'Systems will be provided.',6),(25,'Expected programming languages to be acquainted with : Java, C, C++, HTML, CSS, Javascript.',6),(26,'Problems will be related to the theme.',6),(27,'3 members in a team.',7),(28,'The event will consist of two rounds:<ul><li>1st round will be a written test of 40 MCQs related to web designing. </li><li>Top 5 teams in the 1st round will proceed to round 2.</li><li>2nd round will be web development.</li></ul>',7),(29,'Themes for web design will be declared on spot.',7),(30,'Website is expected to have at least 4 web pages.',7),(31,'Multimedia related to the theme will be provided.',7),(32,'Systems will be provided.',7),(33,'3 main actors (+ 2 support actors) per team. Maximum of 3 teams per college.',8),(34,'Event consists of only 1 round, and the theme will be given on the spot.',8),(35,'The video must be shot only inside the Campus.',8),(36,'Subtitles can be included as per requirement.',8),(37,'Usage of vulgar/abusive words and inappropriate actions are strictly prohibited.',8),(38,'Video must be recorded at 720p or higher resolution.',8),(39,'3 members per team and a maximum of 2 teams per college.',9),(40,'Theme will be given on the spot; participants will get 90 minutes to interpret the theme.',9),(41,'The participants are required to draw on the charts using different junk materials that can be found around the campus.',9),(42,'Basic material (chart and paint) will be provided; 30 minutes will be given to collect things from around the campus, that the participants can use to paint with.',9),(43,'3 members per team and a minimum of 3 teams per college.',10),(44,'Normal round : Chits will be given and only one person is allowed to act it out and the other two will guess.',10),(45,'Pictionary:Only one person is allowed to draw on the board, what is mentioned in the chit provided and the other two will guess. ',10),(46,'<b>Mirror acting </b>: One reads the chit and enacts it to the second person and he in turn enacts the same to the third person who willing be doing the guessing work. ',10),(47,'<b>Solo event :</b> A maximum 3 participants per college allowed.',11),(48,'Theme will be given on the spot; photographs must be taken on the same day within the campus.',11),(49,'Soft copy of 3 photos without any digital manipulation(editing), metadata (shutter speed, aperture, ISO, temperature, camera make etc.) and 50-100 words description of each image, needs to be submitted.',11),(50,'3 members each in a team.',12),(51,'<b>Round 1:</b> <ul><li>Pick and speak</li></ul>',12),(52,'<b>Round 2:</b><ul><li>Debate</li></ul>',12),(53,'<b>Round 3: </b><ul><li>Case Study</li></ul>',12),(54,'3 members per team.',13),(55,'Electronic gadgets, Wallets, Paper etc. are not allowed.',13),(56,'The round consists of 7-8 clues, each one leading to successive clues.',13),(57,'Round 1:-                                 Knock-out round.',13),(58,'          Round 2:- Rest of the teams will compete to win the final spot.',13),(59,'2 members per team.',14),(60,'The software to be used is Adobe Photoshop.',14),(61,'An explanation in 10-150 words or less describing what inspired the artwork has to be submitted. ',14),(62,'Systems will be provided.',14),(63,'The theme will be announced at the venue.',14),(64,'No downloaded images will not be entertained. It will compulsorily be original. Media will be provided if necessary.',14),(65,'Time 16th August to 7th September 12.00 p.m.',15),(66,'The selfie should be related to the theme provided.',15),(67,'One can submit a collection of selfies as a storyline (each image separately) with a short line or phrase describing it along with your name and college name on our facebook page. For extra points check out Gateways 2016 Facebook page',15),(68,'Genre: Fiction/Non-fiction: <br>Topic: A fiction or non-fictional incident that changed your life for the better or for the worse.',16),(69,'Genre: Science Fiction/Non-Fiction: <br>Topic:  A science fiction/non-fictional invention or technology that could be revolutionary.',16),(70,'Participants can choose either of the two topics mentioned above. The article can be either fictional or non-fictional and must compulsorily be written in English.',16),(71,'The articles must be sent to pensoffury.gateways2016@gmail.com ',16),(72,'The articles must be submitted on or before 27st August 2016.   ',16),(73,'The word count of the article should be in the range of 500-1500.',16),(74,'Font type should be Times New Roman with a font size of 12 for the body. Heading should be of the same font type and size but in bold. Line spacing must be 1.',16),(75,'Best entries will be published on our official website.',16);
/*!40000 ALTER TABLE `rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `t_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `present` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams_events`
--

DROP TABLE IF EXISTS `teams_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams_events` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` int(2) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams_events`
--

LOCK TABLES `teams_events` WRITE;
/*!40000 ALTER TABLE `teams_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venues` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `block` varchar(30) NOT NULL,
  `floor` varchar(30) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venues`
--

LOCK TABLES `venues` WRITE;
/*!40000 ALTER TABLE `venues` DISABLE KEYS */;
INSERT INTO `venues` VALUES (1,'Audi','Audi Block','3rd'),(2,'Sky View','Central Block','10th'),(3,'Panel Room','Block 2','1st'),(4,'LAB - A','Block 2','1st'),(5,'LAB - B','Block 2','1st'),(6,'Lobby','Central Block','8th'),(7,'Room 808','Central Block','8th'),(8,'Room 811','Central Block','8th'),(9,'Room 812','Central Block','8th'),(10,'Seminar Hall','Block 2','Ground Floor');
/*!40000 ALTER TABLE `venues` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-15 18:03:52

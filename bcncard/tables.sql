INSERT INTO `Data` 
(`IDNUMBER`, `LAYOUT`, `TAG`, `TEXTFREE1`, `TEXTFREE2`, `TEXTFREE3`, `TEXTFREE4`, `TEXTFREE5`, `TEXTFREE6`, `TEXTFREE7`, `TEXTFREE8`, `TEXTFREE9`, `TEXTFREE10`, `TEXTFREE11`, `TEXTFREE12`, `TEXTFREE13`, `TEXTFREE14`, `NUMFREE1`, `NUMFREE2`, `NUMFREE3`, `NUMFREE4`, `NUMFREE5`, `NUMFREE6`, `DATEFREE1`, `DATEFREE2`, `DATEFREE3`, `DATEFREE4`, `DATEFREE5`, `DATEFREE6`, `Title`) VALUES
(3, NULL, 0, 'Alexia', 'Thomas', 'Apartment 711, Marconi House', '335 Strand, WC2R 1HA', 'UNITED KINGDOM', 'BRITISH', NULL, 'F', '170 CM ', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, '2030-01-29 00:00:00', '1973-03-02 00:00:00', NULL, NULL, NULL, 'Professor'),
(1476, NULL, 0, 'Mambo', 'Tamo Mary', 'Flat 11, Alfred House, Homerton Road', 'Homerton, London, E9 5QD', 'United kingdom', 'BRITISH', NULL, 'F', '160 CM', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, '2018-09-02 00:00:00', '1959-11-11 00:00:00', NULL, NULL, NULL, 'Ms.'),

CREATE TABLE `bcnc_datacard` (
idnumber int(11) NOT NULL,
layout varchar(30) DEFAULT NULL,
tag int(11) DEFAULT '0',
firstname varchar(50) DEFAULT NULL,
surname varchar(40) DEFAULT NULL,
address1 varchar(40) DEFAULT NULL,
address2 varchar(40) DEFAULT NULL,
residence varchar(40) DEFAULT NULL,
nationality varchar(40) DEFAULT NULL,
gender varchar(40) DEFAULT NULL,
height varchar(40) DEFAULT NULL,
expirydate datetime DEFAULT NULL,
dateofbirth datetime DEFAULT NULL,
title varchar(40) DEFAULT NULL,

userid int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `bcnc_imagecard` (
  id varchar(50) NOT NULL,
  length int(11) DEFAULT '0',
  picture longblob,
  type tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `bcnc_status` (
idnumber int(11) NOT NULL,
userid int(11) DEFAULT '0',
statusdate datetime DEFAULT NULL,
status varchar(40) DEFAULT NULL -- (applied, pending, due, approval, reject, )
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
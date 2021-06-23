INSERT INTO `proizvodi`(`barkod`, `cena`, `ime`) VALUES ('789','200','paradajz'),('776','50','crni luk'),('761','80','beli luk');

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES ('1','789','20'.'200','2021.6.17');

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES ('3','789','40','250','2021.6.17'),('4','789','10','220','2021.6.17'),('5','776','30','50','2021.5.1');

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES ('6','761','20','200','2021.6.16'),('7','761','30','300','2021.6.16'),('8','761','50','1000','2021.5.1');

DELETE FROM `prodaja` WHERE barkod='789' AND datum='2021.6.16';


SELECT `barkod` FROM `prodaja` WHERE datum='2021.5.1';

SELECT DISTINCT `barkod` FROM `prodaja` WHERE datum='2021.5.1';

UPDATE `prodaja` SET `cena`=cena*0.1 WHERE datum='2021.6.17' ;
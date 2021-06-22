1.1.zadatak, prva stavka:

INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES 
('321','hleb','50'),
('173','jogurt','120'),
('727','jabuke','150');


1.2.zadatak, druga stavka

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) 
VALUES 
('173','4','350','2021-06-17'),
('173','2','150','2021-05-01'),
('173','1','100','2021-06-16'),
('321','4','350','2021-06-17'),
('321','2','250','2021-05-01'),
('321','1','120','2021-06-16'),
('454','5','620','2021-06-17'),
('454','3','420','2021-05-01'),
('454','6','520','2021-06-16'),
('727','3','320','2021-06-16');

2.1.zadatak

INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) 
VALUES 
('789','paradajz','200'),
('776','crni luk','50'),
('761','beli luk','80');

2.2.zadatak - dodavanje

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) 
VALUES 
('789','50','200','2021-06-16'),
('789','20','200','2021-06-17'),
('789','40','250','2021-06-17'),
('789','10','220','2021-06-17'),
('776','30','50','2021-05-01'),
('776','20','55','2021-05-01'),
('776','10','60','2021-06-16'),
('776','40','65','2021-06-17');


2.2.zadatak - brise svu prodaju paradajza za datum 16.6 
DELETE FROM `prodaja` WHERE barkod=789 and datum='2021-06-16';


2.3.zadatak - svim prodajama za datum 17.6 dodaje na cenu 10%
UPDATE `prodaja` SET `cena`=cena + cena*0.1 WHERE `datum`='2021-06-17'


2.4. zadatak - prikazuje barkodove svih proizvoda koji su imali prodaju 1.5.
SELECT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01'


2.5. zadatak - prikazuje samo razlicite barkodove koji su imali prodaju 1.5
SELECT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01' GROUP BY barkod


2.6. zadatak - prikazuje ukupnu kolicinu prodatih proizvoda po datumima, tako sto prikazuje dve kolone:  datum,  ukupna_kolicina
SELECT sum(kolicina) AS ukupna_kolicina FROM `prodaja` GROUP BY datum

2.7. zadatak - prikazuje ukupnu kolicinu prodaje po proizvodu, tako sto prikazuje dve kolone:  proizvod,  ukupna_kolicina
SELECT datum, sum(kolicina) AS ukupna_kolicina FROM `prodaja` GROUP BY datum

2.8. zadatak - prikazuje ukupnu kolicinu prodaje po proizvodu, tako sto prikazuje dve kolone:  proizvod,  ukupna_kolicina
SELECT barkod, sum(kolicina) AS ukupna_kolicina FROM prodaja GROUP BY barkod

2.9. zadatak - prikazuje ukupnu kolicinu prodaje po proizvodu i datumu, tako sto prikazuje tri kolone:  proizvod,  datum, ukupna_kolicina
SELECT barkod,datum, sum(kolicina) AS ukupna_kolicina FROM prodaja GROUP BY barkod, `datum`













INSERT INTO country(cont_name) VALUES ('Deutschland');
INSERT INTO country(cont_name) VALUES ('England');
INSERT INTO country(cont_name) VALUES ('Frankreich');
INSERT INTO country(cont_name) VALUES ('Italien');
INSERT INTO country(cont_name) VALUES ('China');
INSERT INTO country(cont_name) VALUES ('Russland');
INSERT INTO country(cont_name) VALUES ('Norwegen');
INSERT INTO country(cont_name) VALUES ('Schweiz');
INSERT INTO country(cont_name) VALUES ('USA');
INSERT INTO country(cont_name) VALUES ('Türkei');

commit;

INSERT INTO city(city_name, city_cont_id) VALUES ('Berlin',1);
INSERT INTO city(city_name, city_cont_id) VALUES ('London',2);
INSERT INTO city(city_name, city_cont_id) VALUES ('Paris',3);
INSERT INTO city(city_name, city_cont_id) VALUES ('Rom',4);
INSERT INTO city(city_name, city_cont_id) VALUES ('Peking',5);
INSERT INTO city(city_name, city_cont_id) VALUES ('Moskau',6);
INSERT INTO city(city_name, city_cont_id) VALUES ('Oslo',7);
INSERT INTO city(city_name, city_cont_id) VALUES ('Zürich',8);
INSERT INTO city(city_name, city_cont_id) VALUES ('Los Angeles', 9);
INSERT INTO city(city_name, city_cont_id) VALUES ('Antalya',10);

commit;


INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('Siemens AG Berlin','AGBerlin@siemens.com','0049 2839675','Stammlieferant','Rigaer Straße 200','10115','01763462986','030 2839676','A',1);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id) 
VALUES ('Lon Don','mailToLonDon@outlook.com','0044 9382756','Monitorlieferant','Litchfield St.','49252','01749766892','044 321454','A',2);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id) 
VALUES ('Croissant','SantCroiss@croissant.com','00331 293817','Liefert unter anderem PC´s und Peripheriegeräte','Avenue de l’Opéra','75009','01519283718','00331 123455','A',3);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('ROMan´s Electricity','electricityFromRom@gmx.com','0039 4563728','Kabellieferant','Via Frattina','09039','01763462946','0039 987654','A',4);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('PCKing','PCfromPeking@pcking.com','0086 348975','PC Hardware Lieferant','Baizhifang W St','315010 ','01519283321','0086 348976','A',5);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('M.O.S.K.A.U','mightneedmoskau@moskauV2.com','007 7483745','Komponentenlieferant','Chlebny-Gasse','121069','01763462943','007 7483746','A',6);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('BSIO - Best skjermen in Oslo','skjermen@bsio.com','0047 9821376','Lieferant für Bildschirme','Stenersgata','0105','01677372638','0047 9821377','A',7);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id)
VALUES ('Zügig in Zürich','zügirich@outlook.com','0041 2312342','Lieferant für jegliche Art von Kabeln','Turnerstrasse','8006','01519283354','0041 2312343','A',8);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id) 
VALUES ('NOL - No Lost Angles','neverloseangles@angles.com','0213 2378829','Beamer Lieferant','Bellevue Ave','13','01749766834','0213 2378830','A',9);

INSERT INTO supplier(supl_name, supl_mail, supl_phone, supl_note, supl_street, supl_city_code, supl_mobile, supl_fax, supl_state, supl_city_id) 
VALUES ('Antalya Electrowaves','wavesforyou@antalyaEW.com','0090 2812387','WLAN Lieferant','Sakarya Blv.','54000','01519285578','0090 2812388','A',10);



INSERT INTO room(room_number, room_description, room_note)
VALUES  ('Ausgemustert', 'Ausgemustert', 'Ausgemustert'),
        ('Lagerraum', 'Lagerraum', 'Lagerraum'),
        ('r215', 'Unterrichtsraum', 'Hier gibt es nur eine RJ45-Buchse'),
        ('r315','Unterrichtsraum','Die Projektionsfläche ist sehr klein'),
        ('r123','Lehrerzimmer','Die Kaffemaschiene ist kaputt'),
        ('r222','Computerraum','Hier gibt es nur 5 Steckdosen'),
        ('r001','Unterrichtsraum','2 der 4 Steckdosen sind kaputt'),
        ('r301','Unterrichtsraum','Im Sommer wird es hier sehr heiß');

INSERT INTO room(room_number, room_description)
VALUES  ('r017','Computerraum'),
        ('r100','Sekretariat'),
        ('r333','Unterrichtsraum'),
        ('r201','Computerraum');

INSERT INTO component_type(coty_name)
VALUES  ('Software'), 
        ('Switches'),
        ('Router'),
        ('Accesspoints'),
        ('Drucker'),
        ('Beamer'),
        ('Visualizer'),
        ('Monitor');

INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id, comp_note)
VALUES  ('Windows 10', 'Microsoft', 12, '20190415 12:00:00 AM', 2, 2, 1, 'Lizenz 1'),
        ('Windows 10', 'Microsoft', 12, '20190220 12:00:00 AM', 3, 2, 1, 'Lizenz 2'),
        ('Beamer 001', 'Epson', 24, '20190111 12:00:00 AM', 5, 6, 6, 'An der Halterung fehlt eine Schraube'),
        ('Drucker 022', 'Siemens', 6, '20190330 12:00:00 AM', 1, 5, 5, 'Druckt sehr langsam'),
        ('Switch 012', 'D-Link', 6, '20190401 12:00:00 AM', 3, 8, 2, 'Erster Port kaputt');

INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id)
VALUES  ('Windows 7', 'Microsoft', 12, '20190504 12:00:00 AM', 4, 2, 1),
        ('Switch 002', 'D-Link', 24, '20190711 12:00:00 AM', 5, 3, 2),
        ('Router 005', 'bintec elmeg', 36, '20190608 12:00:00 AM', 2, 2, 3),
        ('Beamer 005', 'Acer', 6, '20190212 12:00:00 AM', 2, 5, 6),
        ('Drucker 555', 'Samsung', 12, '20190408 12:00:00 AM', 5, 1, 5);

INSERT INTO component_attribute(coat_name, coat_state)VALUES('Seriennummer','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('RAM','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('CPU','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Festplatte','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Festplattentyp','A');

INSERT INTO component_attribute(coat_name, coat_state)VALUES('Grafikausgang','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Portanzahl','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Uplink','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('WLAN-Standart','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckertyp','A');

INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckart','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckformat','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('ANSI-Lumen','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Eingang','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Anschlusstyp','A');

INSERT INTO component_attribute(coat_name, coat_state)VALUES('Versionsnummer','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Lizenzschlüssel','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Lizenztyp','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Anzahl Lizenzen','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Netzbereich','A');

INSERT INTO component_attribute(coat_name, coat_state)VALUES('Bildschirmdiagonale','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Resolution','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Bildschirmrate','A');




/*
        Zuweisung der Komponenetentypen zu den Komponentenattributen
        ('Software'),       1 
        ('Switches'),       2
        ('Router'),         3
        ('Accesspoints'),   4
        ('Drucker'),        5
        ('Beamer'),         6
        ('Visualizer'),     7
        ('Monitor');        8
*/
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 16);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 17);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 18);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 19);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 7);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 8);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 7);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 20);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(4, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(4, 9);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 10);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 11);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 12);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 15);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 13);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 14);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 14);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 15);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 22);

INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 14);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 15);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 21);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 22);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 23);

INSERT INTO user_role(usro_name)
VALUES  ('Admin'),
        ('Azubi'),
        ('Verwaltung');

INSERT INTO user(user_name, user_usro_id, user_password)
VALUES  ('testAdmin', 1, 'bb7208bc9b5d7c04f1236a82a0093a5e33f40423d5ba8d4266f7092c3ba43b62'),
        ('testAzubi', 2, 'bb7208bc9b5d7c04f1236a82a0093a5e33f40423d5ba8d4266f7092c3ba43b62'),
        ('testVerwaltung', 3, 'bb7208bc9b5d7c04f1236a82a0093a5e33f40423d5ba8d4266f7092c3ba43b62');


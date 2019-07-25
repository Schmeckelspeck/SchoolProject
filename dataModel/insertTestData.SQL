-- insert rooms testdata (with note values)
INSERT INTO room(room_number, room_description, room_note)
VALUES  ('Ausgemustert', 'Ausgemustert', 'Ausgemustert'),
        ('Lagerraum', 'Lagerraum', 'Lagerraum'),
        ('r215', 'Unterrichtsraum', 'Hier gibt es nur eine RJ45-Buchse'),
        ('r315','Unterrichtsraum','Die Projektionsfläche ist sehr klein'),
        ('r123','Lehrerzimmer','Die Kaffemaschiene ist kaputt'),
        ('r222','Computerraum','Hier gibt es nur 5 Steckdosen'),
        ('r001','Unterrichtsraum','2 der 4 Steckdosen sind kaputt'),
        ('r301','Unterrichtsraum','Im Sommer wird es hier sehr heiß');

-- insert rooms testdata (without note values)
INSERT INTO room(room_number, room_description)
VALUES  ('r017','Computerraum'),
        ('r100','Sekretariat'),
        ('r333','Unterrichtsraum'),
        ('r201','Computerraum');

-- insert component types
INSERT INTO component_type(coty_name)
VALUES  ('Software'), 
        ('Switches'),
        ('Router'),
        ('Accesspoints'),
        ('Drucker'),
        ('Beamer'),
        ('Visualizer'),
        ('Monitor');

-- insert components (with note values)
INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id, comp_note)
VALUES  ('Windows 10', 'Microsoft', 12, '20190415 12:00:00 AM', 2, 2, 1, 'Lizenz 1'),
        ('Windows 10', 'Microsoft', 12, '20190220 12:00:00 AM', 3, 2, 1, 'Lizenz 2'),
        ('Beamer 001', 'Epson', 24, '20190111 12:00:00 AM', 5, 6, 6, 'An der Halterung fehlt eine Schraube'),
        ('Drucker 022', 'Siemens', 6, '20190330 12:00:00 AM', 1, 5, 5, 'Druckt sehr langsam'),
        ('Switch 012', 'D-Link', 6, '20190401 12:00:00 AM', 3, 8, 2, 'Erster Port kaputt');

-- insert components (without note values)
INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id)
VALUES  ('Windows 7', 'Microsoft', 12, '20190504 12:00:00 AM', 4, 2, 1),
        ('Switch 002', 'D-Link', 24, '20190711 12:00:00 AM', 5, 3, 2),
        ('Router 005', 'bintec elmeg', 36, '20190608 12:00:00 AM', 2, 2, 3),
        ('Beamer 005', 'Acer', 6, '20190212 12:00:00 AM', 2, 5, 6),
        ('Drucker 555', 'Samsung', 12, '20190408 12:00:00 AM', 5, 1, 5);

--Koponentenattribute
--1
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Seriennummer','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('RAM','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('CPU','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Festplatte','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Festplattentyp','A');
--6
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Grafikausgang','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Portanzahl','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Uplink','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('WLAN-Standart','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckertyp','A');
--11
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckart','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Druckformat','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('ANSI-Lumen','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Eingang','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Anschlusstyp','A');
--16
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Versionsnummer','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Lizenzschlüssel','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Lizenztyp','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Anzahl Lizenzen','A');
INSERT INTO component_attribute(coat_name, coat_state)VALUES('Netzbereich','A');

--21
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
--Software
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 16);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 17);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 18);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(1, 19);

--Switch
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 7);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(2, 8);

--Router
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 7);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(3, 20);

--Accesspoint
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(4, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(4, 9);

--Drucker
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 10);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 11);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 12);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(5, 15);

--Beamer
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 13);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(6, 14);

--Visualizer
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 14);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 15);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(7, 22);

--Monitor
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 1);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 14);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 15);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 21);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 22);
INSERT INTO coty_coat(coco_coty_id, coco_coat_id)VALUES(8, 23);



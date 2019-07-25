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
        ('Visualizer');

-- insert components (with note values)
INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id, comp_note)
VALUES  ('Windows 10', 'Microsoft', 12, '20190415 12:00:00 AM', 2, 2, 1, 'Lizenz 1'),
        ('Windows 10', 'Microsoft', 12, '20190220 12:00:00 AM', 3, 2, 1, 'Lizenz 2'),
        ('Beamer 001', 'Epson', 24, '20190111 12:00:00 AM', 5, 6, 6, 'An der Halterung fehlt eine Schraube'),
        ('Drucker 022', 'Siemens', 6, '20190330 12:00:00 AM', 1, 5, 5, 'Druckt sehr langsam'),
        ('Switch 012', 'D-Link', 6, '20190401 12:00:00 AM', 3, 8, 2, 'Erster Port kaputt');

-- insert components (without note values)
INSERT INTO component(comp_description, comp_manufacturer, comp_warranty_length, comp_purchase_date, comp_supl_id, comp_room_id, comp_coty_id)
VALUES  ('Windows 7', 'Microsoft', 12, '20190504 12:00:00 AM', 4, 4, 1),
        ('Switch 002', 'D-Link', 24, '20190711 12:00:00 AM', 5, 3, 2),
        ('Router 005', 'bintec elmeg', 36, '20190608 12:00:00 AM', 2, 2, 3),
        ('Beamer 005', 'Acer', 6, '20190212 12:00:00 AM', 2, 5, 6),
        ('Drucker 555', 'Samsung', 12, '20190408 12:00:00 AM', 5, 1, 5);
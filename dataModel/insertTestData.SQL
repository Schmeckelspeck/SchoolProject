-- insert rooms testdata (with note values)
INSERT INTO room(room_number, room_description, room_note)
VALUES  ('r215', 'Unterrichtsraum', 'Hier gibt es nur eine RJ45-Buchse'),
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


# Argazki Albuma

Helburua lainoan mantengarri izango den argazki-albuma aplikazio baten garapena da.

# OHARRAK:

Datu base bat sortu argazkibilduma izenekoa

Datu basean beharrezko taulak sortzeko "file/argazkialbuma.sql"-ko CREATE TABLE sententziak erabili.

Argazkien carouselak ondo ikusteko, "file/argazkiabluma.sql"-ko sententzia hau exekutatu:
INSERT INTO `argazkia` (`NICK`, `ALBUMID`, `IRUDIAID`, `ETIKETA`, `IMG`, `EGOERA`, `VISITUSER`, `VISITNOUSER`) VALUES
('default', 0, 0, 'DEFAULT', 0xff....);

Erabiltzaileak sortzeko:
- Aplikazioaren bidez (Soilik erabiltzaileak sortu daitezke)
- "file/argazkialbuma.sql"-ko INSERT INTO ERABILTZAILEA ... sententziak erabili (jegana016,admin001...)
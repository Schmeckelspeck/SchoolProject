*** WEB ***
- Wir sammeln alle Styles im Style.css-File, welches sich im Web-Rootverzeichnis findet.

- Jeder Controller VIEWNAMEController.php greift auf seinen VIEWNAMEDatenAbruf.php zu

- Jeder VIEWNAMEDatenZugang.php greift auf DatenbankZugriff.php zu

- In DatenbankZugriff können die Methoden für die jeweilige Funktionalität eingesetzt werden, also Lesen, Schreiben
	* Z.B. mit mysqli, aber hier kann verwendet werden, was gewünscht wird.

- Jede View im Verzeichnis Views hat einen Controller im Verzeichnis Controller
	* Controller: Darin befindet sich die Geschäftslogik einer View, also alles, was HTML nicht leisten kann.
	* View: Darin sind die HTML-Ansichten abgelegt plus php-Header zum Einbinden von Files. Jede View bindet den Header ein, in dem die css-Links drin sind plus das Navigationsmenu menu.php

- Jede View bindet einen Header ein und einen Footer, die Files dafür liegen im Webroot-Verzeichnis.

- Bezeichnungen
	- VIEWNAMEController.php
	- VIEWNAMEView.php
	- VIEWNAMEDatenZugang.php 
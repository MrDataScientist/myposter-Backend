# php-Backend

## I) Schreibe eine Funktion, die die folgenden Straßen in den Namen und die Hausnummer aufteilt und ausgibt.
Straßen:
- Einsteinstr. 7
- Einsteinstrasse 7
- Curd-Jürgens-Str. 30
- Perlcherstr.88 1
- Rosenheimerstr. 14e-f
- Bei Fußenkreuz 36
- Sankt Georgs Kirchhof 26
- Mallertshofener Strasse 36c
- Rosenheimerstr. 145 e+f
- Hof 151
- Wald a.A. 125
- Lindenhof 0
- Am Elfenholt
- Am Schießberg 35 357
- Idlhofgasse 16A-1
- Kreisbacherstrasse 3/1/19
- Höpflergasse 6 / 18

Beispielaufruf:
$streets = array(
	'Einsteinstr. 7',
	'Einsteinstrasse 7',
	'Curd-Jürgens-Str. 30',
	'Perlcherstr.88 1',
	'Rosenheimerstr. 14e-f',
	'Bei Fußenkreuz 36',
	'Sankt Georgs Kirchhof 26',
	'Mallertshofener Strasse 36c',
	'Rosenheimerstr. 145 e+f',
	'Hof 151',
	'Wald a.A. 125',
	'Lindenhof 0',
	'Am Elfenholt',
	'Am Schießberg 35 357',
	'Idlhofgasse 16A-1',
	'Kreisbacherstrasse 3/1/19',
	'Höpflergasse 6 / 18'
);

foreach ($streets as $street) {
	list($name, $number) = split_street($street);
	echo 'Name: ' . $name . ', Hausnummer: ' . $number . "\n";
}

Beispielausgabe:
> Name: Einsteinstr., Hausnummer: 7
Name: Einsteinstrasse, Hausnummer: 7
Name: Curd-Jürgens-Str., Hausnummer: 30

## II)Schreibe eine Funktion, die ein Array mit Zahlen als Parameter nimmt, alle Zahlen summiert und ausgibt. Die Funktion muss rekursiv sein und darf keine Schleifen (for, foreach) verwenden.

Beispielaufruf:
sum(array(1, 2, 3));

Beispielausgabe:
> 6

## III) Schreibe eine Funktion, die die Datenstruktur nach folgenden Kriterien sortiert:
- Die Bestellungen sollen aufsteigend (ASC) nach dem Datum (date) sortiert werden
- Die Artikel innerhalb der Bestellungen sollen aufsteigend (ASC) nach dem Preis (price) sortiert werden

Datenstruktur:

	$data = array(
	'order-2' => array(
		'date' => '19:22:56 2015-03-17',
		'articles' => array(
			array(
				'id'    => '1',
				'price' => 32.0
			),
			array(
				'id'    => '2',
				'price' => 20.0
			)
		)
	),
	'order-3' => array(
		'date' => '22:56:17 2015-03-16',
		'articles' => array(
			array(
				'id'    => '1',
				'price' => 12.0
			)
		)
	),
	'order-1' => array(
		'date' => '19:22:43 2015-03-17',
		'articles' => array(
			array(
				'id'    => '3',
				'price' => 15.0
			),
			array(
				'id'    => '1',
				'price' => 8.0
			),
			array(
				'id'    => '2',
				'price' => 21.0
			)
		)
	)
);

Beispielaufruf:
sortData($data);
print_r($data);

Beispielausgabe:
> Array
(
	[order-3] => Array
		(
			[date] => 22:56:17 2015-03-16
			[articles] => Array
				(
					[0] => Array
						(
							[id] => 1
							[price] => 12
						)
				)
		)
	[order-1] => Array
		(
			[date] => 19:22:43 2015-03-17
			[articles] => Array
				(
					[0] => Array
						(
							[id] => 1
							[price] => 8
						)
					[1] => Array
						(
							[id] => 3
							[price] => 15
						)
					[2] => Array
						(
							[id] => 2
							[price] => 21
						)
				)
		)
	[order-2] => Array
		(
			[date] => 19:22:56 2015-03-17
			[articles] => Array
				(
					[0] => Array
						(
							[id] => 2
							[price] => 20
						)
					[1] => Array
						(
							[id] => 1
							[price] => 32
						)
				)
		)
)


## IV) Schreibe eine Funktion, die die Zahlen von 1 bis 100 ausgibt. Für Vielfache von 3 soll stattdessen "drei" und für Vielfache von 5 "fünf" ausgegeben werden. Für Vielfache von 3 und 5 soll "beide" ausgegeben werden.

Beispielaufruf:
multiple();

Beispielausgabe:
> 1
2
drei
...

## V) Schreibe eine Klasse, die zählt, wie oft eine Zahl gezählt wurde.

Beispielaufruf:

	$counter = new Counter();
	$counter->count(1);
	$counter->count(1);
	$counter->count(3);

Beispielausgabe:
$counter->getCounts();
> 1: 2, 3: 1

## VI) Erstelle EINEN SQL-Query für EINE Abfrage, welcher über die Tabelle 'Familien' eine Auswertung erstellt.

Dabei sollen folgende Ausgaben geliefert werden:
- Liste aller Einträge - pro Familien-Nachname eine Zeile, Nachname als erstes Sortierkriterium
- Anzahl der Familienmitglieder pro Nachnamen als Column 'Mitglieder'
- Vorname des männlichen Erziehungsberechtigten in Column 'Vater'
- Alter des ältestes Familienmitglieds in Column 'maxAlter'
- Vornamen der Kinder als Komma-getrennte Liste in der Spalte 'Kinder', dabei die Vornamen alphabetisch sortiert

Daten:

ID      Vorname     Nachname    Alter   Geschlecht  Erziehungsberechtigt

1       Jochen      Meier       42      male        1
2       Susanne     Meier       38      female      1
3       Johannes    Meier       14      male        0
4       Kia         Meier       10      female      0
5       Sabine      Müller      33      female      1
6       Klara       Müller      12      female      0
7       Klaas       Ümser       3       male        0
8       Gabi        Ümser       27      female      1
9       Jochen      Ümser       26      male        1
10      Dieter      Unger       72      male        1
11      Gertrud     Unger       76      female      1
12      Hans        Rößler      38      male        1
13      Fritz       Waagner     18      male        0
14      Susi        Waagner     44      female      1
15      Max         Waagner     50      male        1
16      Bambi       Waagner     13      female      0

Zu erwartendes Ergebnis des SQL-Queries:

Nachname    Mitglieder      Vater       maxAlter    Kinder
--------------------------------------------------------------------------
Meier       4               Jochen      42          Johannes, Kia
Müller      2                           33          Klara
Rößler      1               Hans        38
Ümser       3               Jochen      27          Klaas
Unger       2               Dieter      76
Waagner     4               Max         50          Bambi, Fritz


Als kleine Hilfe, hier die Insert-Statements:

insert into Familien (`ID`, `Vorname`, `Nachname`, `Alter`, `Geschlecht`, `Erziehungsberechtigt`) values
(1 ,'Jochen',    'Meier',    42 ,'male',     1),
(2 ,'Susanne',   'Meier',    38 ,'female',   1),
(3 ,'Johannes',  'Meier',    14 ,'male',     0),
(4 ,'Kia',       'Meier',    10 ,'female',   0),
(5 ,'Sabine',    'Müller',   33 ,'female',   1),
(6 ,'Klara',     'Müller',   12 ,'female',   0),
(7 ,'Klaas',     'Ümser',    3  ,'male',     0),
(8 ,'Gabi',      'Ümser',    27 ,'female',   1),
(9 ,'Jochen',    'Ümser',    26 ,'male',     1),
(10,'Dieter',    'Unger',    72 ,'male',     1),
(11,'Gertrud',   'Unger',    76 ,'female',   1),
(12,'Hans',      'Rößler',   38 ,'male',     1),
(13,'Fritz',     'Waagner',  18 ,'male',     0),
(14,'Susi',      'Waagner',  44 ,'female',   1),
(15,'Max',       'Waagner',  50 ,'male',     1),
(16,'Bambi',     'Waagner',  13 ,'female',   0);

## VII) Die Zustände von zwei Artikeln in der Produktion sollen verwaltet werden.

Zwei Artikel sind vorgegeben:
- Gerahmtes Poster
- Bedruckte Glasplatte

Beide Artikel können jeweils mit und ohne "Geschenkverpackung" bestellt werden.

Die Produktion des "Gerahmten Posters" umfasst folgende Zustände:
1. ordered
2. printed
3. sliced
4. framed
5. gift-wrapped (optional)
6. shipped

Die Produktion der "Bedruckten Glasplatte" umfasst folgende Zustände:
1. ordered
2. printed
3. gift-wrapped (optional)
4. shipped

Wichtig ist, dass die korrekte Reihenfolge der Zustände sichergestellt wird.

Die Artikel werden manuell von einem Schritt zum nächsten befördert, wodurch es vorkommen kann, dass ein Artikel einen falschen Zustand erhält.
Hier wird erwartet, dass eine entsprechende Fehlermeldung mit dem erwarteten Zustand ausgegeben wird.
Solche Fehler sind in der Datei run.php bereits vorgesehen.

Anforderungen:
- Für die Umsetzung soll kein Framework/Bibliothek verwendet werden.
- Es ist keine Graphische Oberfläche nötig (Ein CLI Programm reicht aus).
- Am Artikel soll nachvollziehbar sein, wann (genaue Zeit) welcher Zustand eingetreten ist.
- Wenn ein nicht erwarteter Zustand bestätigt wird, soll eine Fehlermeldung ausgegeben werden.
- Der Code soll erweiterbar sein, so das ein neuer Zustand zwischen bereits vorhandene Zustände einfach eingefügt werden kann.
- Für die Umsetzung muss der bereitgestellte Quellcode als Basis verwendet werden. Dieser darf an beliebiger Stelle erweitert werden.
- Die Datei run.php dient als Grundlage zum Testen.

## VIII) Implementiere die Basis-Struktur für einen Logger. Der Logger soll dann in der Klasse "AsciiArray" genutzt werden.

Anforderungen:
- Der Logger soll verschiedene Prioritäten unterstützen
- Eine Exception soll mit mehr Informationen geloggt werden, als die normalen Log-Einträge (siehe Klasse "AsciiArray")
- Für jeden Log-Eintrag soll zusätzlich die aktuelle Uhrzeit und Priorität mitgespeichert werden.
- Der Logger soll mindestens zwei verschiedene Speicherarten unterstützen, z.B. Datenbank und Filesystem.
- Der Logger soll zur Laufzeit nur eine der beiden Speicherarten verwenden
- Das Abspeichern selbst muss nicht implementiert werden (Testen ob Datenbank/Datei existiert usw.).
- Die Funktionalität des Loggers soll durch PHPUnit Tests abgedeckt sein. Die Speicherarten müssen nicht getestet
  werden, da deren Implementierung nicht notwendig ist.
- Die Grundprinzipien von OOP sollen eingehalten werden.

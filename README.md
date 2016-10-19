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

## IV) Schreibe eine Klasse, die zählt, wie oft eine Zahl gezählt wurde.

Beispielaufruf:
$counter = new Counter();
$counter->count(1);
$counter->count(1);
$counter->count(3);

Beispielausgabe:
$counter->getCounts();
> 1: 2, 3: 1

## V) 

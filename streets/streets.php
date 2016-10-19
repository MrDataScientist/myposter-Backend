<?php
/**
 * Created by PhpStorm.
 * User: Tarik En Nakdi
 * Date: 19/10/2016
 * Time: 19:43
 */

$subjects = array(

    'Einsteinstr. 7 ',
    'Einsteinstrasse 7',
    'Curd-Jürgens-Str. 30 ',
    'Perlcherstr.88 1',
    'Rosenheimerstr. 14e-f ',
    'At the root cross 36 ',
    'Sankt Georgs Kirchhof 26',
    'Mallertshofenerstrasse 36c',
    'Rosenheimerstr. 145 e + f ',
    'Hof 151',
    'Wald a.A. 125 ',
    'Lindenhof 0',
    'Am Elfenholt',
    'Am Schießberg 35 357',
    'Idlhofgasse 16A-1',
    'Kreisbacherstrasse 3/1/19',
    'Höflergasse 6/18'

);

foreach( $subjects as $subject )
{

    $address = "";
    $number = "";

    $matches = array();
    if(preg_match('/(?P<address>[^\d]+)(?P<number>\d+.?)/i', $subject, $matches)){
        //preg_match('/^([^\d]*[^\d\s]) *(\d.*)$/', $address, $match)
        $address = $matches['address'];
        $number = $matches['number'];
    } else { // no number found, it is only address
        $address = $subject;
    }
	echo "<table id='table1'><tr>";
	echo "<td>Name: $address </td>";
	echo "<td>Hausnummer: $number \n </td>";
	echo "</tr></table>";
}
?>

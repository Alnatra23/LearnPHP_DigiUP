<?php
require 'person.php';

$person = new Person('Kafanal', 'Kediri');
$person->tampil();
echo '<hr>';
$person->set_ktp('123456');
$person->tampil();
?>
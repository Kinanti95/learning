<?php

$db = new PDO('mysql:host=localhost;dbname=elearning;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<h1>Here is the data</h1>';
$result = $db->query('select * from elearning');
echo "<ul>";
foreach ($result as $data) {
	echo "<li>".$data['id_admin'].' - '.$data['password'].' - '.$data['username']."</li>";
}
echo "</ul>";

// $stmt = $db->prepare('insert into newtable values (null, ?, ?, ?)');
// $stmt->execute(array('Alienware', 'Gaming Laptop', 20000000));
// $stmt->execute(array('Brother DeskJet', 'Printer', 900000));
// $stmt->execute(array('Lenovo', 'Handphone', 5000000));
// $stmt->execute(array("Dark'O", 'Handphone', 5000000));

$stmt = $db->prepare("select * from elearning where nama = ?");
$stmt->execute(array("Dark'O"));
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($result as $data) {
	echo "<li>".$data['id_admin'].' - '.$data['password'].' - '.$data['username']."</li>";
}
echo "</ul>";

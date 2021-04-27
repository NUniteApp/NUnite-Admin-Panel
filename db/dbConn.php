<?php

//PDO Define
$PDO = new PDO('sqlite:nunite.db');

$statement = $PDO->query("SELECT * FROM USER");

$data = $statement->fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";
print_r($data);
echo"</pre>";

?>
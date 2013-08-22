<?php
$m = new MongoClient(); // connect
$db = $m->selectDB("forum");
$catagorys = $db->catagorys->find();
$catagorysarray = iterator_to_array($catagorys);
foreach($catagorysarray as &$catagory) {
print$catagory['_id'];
}

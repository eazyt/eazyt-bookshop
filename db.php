<?php
$connection = new MongoClient("mongodb://my-mongo:27017");

$collection = $connection->selectCollection('db-name', 'collection-name');
if (!$collection) {
  echo 'not connected to collection';
  exit;
}
$cursor = $collection->find();
foreach ($cursor as $doc) {
  var_dump($doc);
}

<?php

$data = array(array("name" => "John", "age" => 22), 
              array("name" => "Jane", "age" => 33), 
              array("name" => "Jim", "age" => 44));

$searchTerm = $_GET['searchTerm'];
$filteredData = array_filter($data, function($item) use ($searchTerm) {
  return strpos($item['name'], $searchTerm) !== false;
});

echo "<li>" . implode("</li><li>", array_column($filteredData, 'name')) . "</li>";

?>
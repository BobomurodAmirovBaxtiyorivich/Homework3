<?php

$conn = mysqli_connect('localhost', 'root', 'My$par0l', 'test');

$query = "SELECT * FROM product";

$result = mysqli_query($conn, $query);

foreach ($result as $value) {
    echo "ID: " . $value['id'] . "| Name: " . $value['name'] . "| Price: " . $value['price'] . "| Count: " . $value['count'];
    echo "<br>";
}
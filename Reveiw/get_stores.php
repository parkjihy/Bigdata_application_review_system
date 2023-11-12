<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant_data");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT store_ID, store_address FROM Store";
$result = mysqli_query($conn, $sql);
$stores = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $stores[] = $row;
    }
}

mysqli_close($conn);
?>

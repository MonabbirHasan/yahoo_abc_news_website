<?php
include '../src/config.php';
global $conn;

header('Acess-control-allow-origine:*');
header('Content-Type: application/json; charset=UTF-8');
header('Acess-Control-Allow-Method:GET');
header(
    'Acess-Control-Allow-Header:Content-Type,Acess-Control-Allow-Headers, Authorization, X-Requested-With'
);

$sql = 'SELECT * FROM category';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}
mysqli_close($conn);

?>

<?php
$link = mysqli_connect("db.be-mons1.bengt.wasmernet.com", "49927c2d7a1980007a2a60b491eb", "06814992-7c2d-7b51-8000-e26e98d1397f", "dbay3QihKUWXFH2FvPHwZjms");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

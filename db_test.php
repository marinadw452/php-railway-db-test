<?php
$host = getenv("MYSQLHOST");
$port = getenv("MYSQLPORT");
$db   = getenv("MYSQLDATABASE");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    echo "<h2 style='color:red'>❌ فشل الاتصال بقاعدة البيانات</h2>";
    echo "<pre>" . $conn->connect_error . "</pre>";
} else {
    echo "<h2 style='color:green'>✅ تم الاتصال بقاعدة البيانات بنجاح</h2>";
}

$conn->close();

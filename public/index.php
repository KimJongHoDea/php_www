<?php
    $config = include " ../dbconf.php";
    echo "대림대학교";
    print_r($config);
    require "../loading.php";

    // require "../Module/Database/database.php";
    // require "../Module/Database/Table.php";

    $db = new Database( $config );

$query = "SHOW TABLES";
$result = $db->queryExecute($query);

$count = mysqli_num_rows($result);
for ($i=0;$i<$count;$i++) {
    $row = mysqli_fetch_object($result);
    echo $row->Tables_in_php."<br>";
    
}
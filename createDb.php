<?php
$db=sqlite_open("formData.db");

sqlite_query($db, "CREATE TABLE Event (name VARCHAR[50], description VARCHAR[140], startDatetime VARCHAR[50], endDatetime VARCHAR[50], location VARCHAR[50], eventType varchar[50])", $sqliteerror);


?>
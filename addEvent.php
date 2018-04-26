<?php

    //create database class
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('formData.db');
        }
    }

    //create instance of db class
    $db = new MyDB();

    echo $_POST["name"];
    echo "post post";

    $event_name = $_POST["event_name"];
    $description = $_POST["description"];
    $startDateTimePicker = $_POST["startDateTimePicker"];
    $location = $_POST["location"];
    $eventType = $_POST["eventType"];
    $department = $_POST['department'];

    //creating table
    //$db->exec('CREATE TABLE Event (name VARCHAR[50], description VARCHAR[140], startDatetime VARCHAR[50], endDatetime VARCHAR[50], location VARCHAR[50], eventType varchar[50])');


    //add data
    $db->exec("INSERT INTO Event (name, description) VALUES ('$event_name', '$description')");



   $result = $db->query('select * from Event');
   var_dump($result->fetchArray());

?>
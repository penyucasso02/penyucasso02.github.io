<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $sql = "INSERT INTO events (event_name, event_date, event_time, location, description) VALUES ('$event_name', '$event_date', '$event_time', '$location', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Event booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
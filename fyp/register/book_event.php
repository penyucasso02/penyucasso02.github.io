<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Event</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            text-align: center;
        }
        .container form div {
            margin-bottom: 15px;
        }
        .container form label {
            display: block;
            margin-bottom: 5px;
        }
        .container form input, .container form select, .container form textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .container form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book an Event</h2>
        <form action="bookingprocess.php" method="post">
            <div>
                <label for="event_name">Event Name</label>
                <input type="text" id="event_name" name="event_name" required>
            </div>
            <div>
                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>
            <div>
                <label for="event_time">Event Time</label>
                <input type="time" id="event_time" name="event_time" required>
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit">Book Event</button>
        </form>
    </div>
</body>
</html>